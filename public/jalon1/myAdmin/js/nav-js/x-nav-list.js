var curPage = 1;
var pageSize = 10;
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

/*用户-停用*/
function member_stop(obj,id){
    var status = $(obj).attr('title')=='启用'?'停用':'启用';

    layer.confirm('确认要'+ status +'吗？',function(index){

        let tokenHead = sessionStorage.getItem("tokenHead");
        let access_token = sessionStorage.getItem("access_token");
        let token = tokenHead +" "+ access_token;
        $.ajax({
            url: 'http://localhost:8080/back/nav/updateEnable',
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
                if (data == 'success') {
                    if ($(obj).attr('title') == '启用') {

                        //发异步把用户状态进行更改
                        $(obj).attr('title', '停用')
                        $(obj).find('i').html('&#xe62f;');

                        $(obj).parents("tr").find(".td-status").find('span').addClass('layui-btn-disabled').html('已停用');
                        layer.msg('已停用!', {icon: 5, time: 1000});

                    } else {
                        $(obj).attr('title', '启用')
                        $(obj).find('i').html('&#xe601;');

                        $(obj).parents("tr").find(".td-status").find('span').removeClass('layui-btn-disabled').html('已启用');
                        layer.msg('已启用!', {icon: 6, time: 1000});
                    }
                }
            }
        });
    });
}

/*用户-删除*/
function member_del(obj,id){
    layer.confirm('确认要删除吗？',function(index){
        //发异步删除数据
        let tokenHead = sessionStorage.getItem("tokenHead");
        let access_token = sessionStorage.getItem("access_token");
        let token = tokenHead +" "+ access_token;
        $.ajax({
            url: 'http://localhost:8080/back/nav/delete',
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
    return {
        title: $("#name").val(),
        curPage: curPage,
        pageSize: pageSize
    };
}

function findAll() {
    let tokenHead = sessionStorage.getItem("tokenHead");
    let access_token = sessionStorage.getItem("access_token");
    let token = tokenHead +" "+ access_token;
    $.ajax({
        url: 'http://localhost:8080/back/nav/findAll',//地址：访问后台的地址
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
    var html="";
    for (var i = 0; i < data.length; i++) {
        html += '<tr>\n' +
            '                            <td>' + data[i].id + '</td>\n' +
            '                            <td>' + data[i].title + '</td>\n' +
            '                            <td>' + setUndefinedToNull(data[i].href) + '</td>\n' +
            '                            <td class="td-status">\n' +
            '                                <span class="layui-btn '+ (data[i].enable==1?"layui-btn-normal":"layui-btn-disabled") +' layui-btn-mini ">' + (data[i].enable == 1 ? "已启用" : "已停用") + '</span></td>\n' +
            '                            <td class="td-manage">\n' +
            '                                <a onclick="member_stop(this,' + data[i].id + ')" href="javascript:;" title="' + (data[i].enable == 1 ? "启用" : "停用") + '">\n' +
            '                                    <i class="layui-icon">&#xe601;</i>\n' +
            '                                </a>\n' +
            '                                <a title="编辑" onclick="edit(' + data[i].id + ')" href="javascript:;"\n' +
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
    sessionStorage.setItem("navId",id);
    xadmin.open('编辑','nav-edit.html',600,400);
}


function getCount(){
    var count = 0;
    let tokenHead = sessionStorage.getItem("tokenHead");
    let access_token = sessionStorage.getItem("access_token");
    let token = tokenHead +" "+ access_token;
    $.ajax({
        url: 'http://localhost:8080/back/nav/getCount',//地址：访问后台的地址
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
