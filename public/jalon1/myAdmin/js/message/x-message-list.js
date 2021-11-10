let curPage = 1;
let pageSize = 10;
layui.use(['laydate','form','laypage'], function(){
    var laydate = layui.laydate;
    var  form = layui.form;
    var laypage =layui.laypage;

    laypage.render({
        elem: 'page'
        , count: getCount()
        , layout: ['count', 'prev', 'page', 'next', 'limit', 'refresh', 'skip']
        , jump: function (obj) {
            curPage = obj.curr;
            pageSize = obj.limit;
            findAll();
        }
    });

    //执行一个laydate实例
    laydate.render({
        elem: '#start' //指定元素
    });

    //执行一个laydate实例
    laydate.render({
        elem: '#end' //指定元素
    });


    //监听提交模糊查询
    form.on('submit(search)',
        function(data) {
            data=data.field;
            console.log(data);
            findAll();
            //发异步，把数据提交给php
            return false;
        });
});

/*用户-删除*/
function member_del(obj,id){
    layer.confirm('确认要删除吗？',function(index){
        //发异步删除数据
        let tokenHead = sessionStorage.getItem("tokenHead");
        let access_token = sessionStorage.getItem("access_token");
        let token = tokenHead +" "+ access_token;
        $.ajax({
            url: 'http://localhost:8080/back/comment/delete',
            data: {id: id},
            type: 'post',
            dataType: 'json',
            beforeSend: function(request) {
                request.setRequestHeader("Authorization", token);
            },
            xhrFields: {
                withCredentials: true // 发送Ajax时，Request header中会带上 Cookie 信息。
            },
            success: function (data) {
                data = data.data;
                console.log(data);
                if(data=="success"){
                    $(obj).parents("tr").remove();
                    layer.msg('已删除!',{icon:1,time:1000});
                }
            }
        });
    });
}

function getSearchData() {
    var obj = document.getElementById(status);
    return {
        subject: $("#title").val(),
        start: $("#start").val(),
        end: $("#end").val(),
        email: $("#email").val(),
        curPage: curPage,
        pageSize: pageSize
    };
}

function findAll() {
    let tokenHead = sessionStorage.getItem("tokenHead");
    let access_token = sessionStorage.getItem("access_token");
    let token = tokenHead +" "+ access_token;
    $.ajax({
        url: 'http://localhost:8080/back/comment/findAll',//地址：访问后台的地址
        data: getSearchData(),//前端传递给后台的数据
        type: 'get',
        dataType: 'json',//是后端传递到前端的数据格式
        beforeSend: function(request) {
            request.setRequestHeader("Authorization", token);
        },
        xhrFields: {
            withCredentials: true // 发送Ajax时，Request header中会带上 Cookie 信息。
        },
        success: function (data) {//后端给前端的一个反馈
            console.log(data);
            setList(data);
        }
    });
}

function setList(data)  {
    let html="";
    for (let i = 0; i < data.length; i++) {
        html += '<tr>\n' +
            '                            <td>' + data[i].id + '</td>\n' +
            '                            <td>' + data[i].subject + '</td>\n' +
            '                            <td>' + setUndefinedToNull(data[i].email) + '</td>\n' +
            '                            <td>' + setUndefinedToNull(data[i].content) + '</td>\n' +
            '                            <td>' + setUndefinedToNull(data[i].date) + '</td>\n' +
            '                            <td class="td-manage">\n' +
            '                                <a title="回复" onclick="edit(' + data[i].id + ')" href="javascript:;"\n' +
            '                                   href="javascript:;">\n' +
            '                                    <i class="layui-icon">&#xe642;</i>\n' +
            '                                </a>\n' +
            '                                <a title="删除" onclick="member_del(this,' + data[i].id + ')" href="javascript:;">\n' +
            '                                    <i class="layui-icon">&#xe640;</i>\n' +
            '                                </a>\n' +
            '                            </td>\n' +
            '                        </tr>';

    }
    $("#tbody").html(html);
}

function setUndefinedToNull(data) {
    return data == undefined ? "" : data;
}

function edit(id) {
    sessionStorage.setItem("messageId",id);
    xadmin.open('回复','message-edit.html',750,400);
}

function getCount(){
    let count = 0;
    let tokenHead = sessionStorage.getItem("tokenHead");
    let access_token = sessionStorage.getItem("access_token");
    let token = tokenHead +" "+ access_token;
    $.ajax({
        url: 'http://localhost:8080/back/comment/count',//地址：访问后台的地址
        data: getSearchData(),//前端传递给后台的数据
        type: 'post',
        async: false,
        dataType: 'json',//是后端传递到前端的数据格式
        beforeSend: function(request) {
            request.setRequestHeader("Authorization", token);
        },
        xhrFields: {
            withCredentials: true // 发送Ajax时，Request header中会带上 Cookie 信息。
        },
        success: function (data) {//后端给前端的一个反馈
            count = data;
        }
    });
    return count;
}
