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

    // 监听全选
    form.on('checkbox(checkall)', function(data){

        if(data.elem.checked){
            $('tbody input').prop('checked',true);
        }else{
            $('tbody input').prop('checked',false);
        }
        form.render('checkbox');
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

/*用户-停用*/
function member_stop(obj,id){
    var status = $(obj).attr('title')=='启用'?'停用':'启用';

    layer.confirm('确认要'+ status +'吗？',function(index){

        let tokenHead = sessionStorage.getItem("tokenHead");
        let access_token = sessionStorage.getItem("access_token");
        let token = tokenHead +" "+ access_token;
        $.ajax({
            url: 'http://localhost:8080/back/permission/updateEnable',
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
                        layer.msg('已启用!', {icon: 5, time: 1000});
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
            url: 'http://localhost:8080/back/permission/delete',
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
        name: $("#name").val(),
        start: $("#start").val(),
        end: $("#end").val(),
        curPage: curPage,
        pageSize: pageSize
    };
}

function findAll() {
    let tokenHead = sessionStorage.getItem("tokenHead");
    let access_token = sessionStorage.getItem("access_token");
    let token = tokenHead +" "+ access_token;
    $.ajax({
        url: 'http://localhost:8080/back/permission/findAll',//地址：访问后台的地址
        data: getSearchData(),//前端传递给后台的数据
        type: 'get',
        dataType: 'json',//是后端传递到前端的数据格式dataType: 'json',
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
            '                            <td>' + data[i].name + '</td>\n' +
            '                            <td>' + setUndefinedToNull(data[i].description) + '</td>\n' +
            '                            <td>' + setUndefinedToNull(data[i].uri) + '</td>\n' +
            '                            <td>' + setUndefinedToNull(data[i].updateTime) + '</td>\n' +
            '                            <td class="td-status">\n' +
            '                                <span class="layui-btn '+ (data[i].status==1?"layui-btn-normal":"layui-btn-disabled") +' layui-btn-mini ">' + (data[i].status == 1 ? "已启用" : "已停用") + '</span></td>\n' +
            '                            <td class="td-manage">\n' +
            '                                <a onclick="member_stop(this,' + data[i].id + ')" href="javascript:;" title="' + (data[i].status == 1 ? "启用" : "停用") + '">\n' +
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
    sessionStorage.setItem("userId",id);
    xadmin.open('编辑','permission-edit.html',600,400);
}

function getCount(){
    var count = 0;
    let tokenHead = sessionStorage.getItem("tokenHead");
    let access_token = sessionStorage.getItem("access_token");
    let token = tokenHead +" "+ access_token;
    $.ajax({
        url: 'http://localhost:8080/back/permission/getCount',//地址：访问后台的地址
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