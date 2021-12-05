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

        $.ajax({
            url: 'http://localhost:8080/jalon2/catalogue/public/index.php/comment/updateEnable',
            data: {id: id},
            type: 'post',
            dataType: 'json',
            success: function (data) {
                console.log(data);
                if (data == 1) {
                    if ($(obj).attr('title') == '已过审') {

                        //发异步把用户状态进行更改
                        $(obj).attr('title', '未过审')
                        $(obj).find('i').html('&#xe62f;');

                        $(obj).parents("tr").find(".td-status").find('span').addClass('layui-btn-disabled').html('未过审');
                        layer.msg('未过审!', {icon: 5, time: 1000});

                    } else {
                        $(obj).attr('title', '已过审')
                        $(obj).find('i').html('&#xe601;');

                        $(obj).parents("tr").find(".td-status").find('span').removeClass('layui-btn-disabled').html('已过审');
                        layer.msg('已过审!', {icon: 5, time: 1000});
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
        $.ajax({
            url: 'http://localhost:8080/jalon2/catalogue/public/index.php/comment/del',
            data: {id: id},
            type: 'post',
            dataType: 'json',
            success: function (data) {
                data = data.data;
                console.log(data);
                if(data==1){
                    $(obj).parents("tr").remove();
                    layer.msg('已删除!',{icon:1,time:1000});
                }
            }
        });
    });
}

function getSearchData() {
    return {
        user: $("#user").val(),
        film: $("#film").val(),
        statut: $("#statut").val(),
        curPage: curPage,
        pageSize: pageSize
    };
}

function findAll() {
    $.ajax({
        url: 'http://localhost:8080/jalon2/catalogue/public/index.php/comment/selectAll',//地址：访问后台的地址
        data: getSearchData(),//前端传递给后台的数据
        type: 'get',
        dataType: 'json',//是后端传递到前端的数据格式dataType: 'json',
        success: function (data) {//后端给前端的一个反馈
            console.log(data,1111);
            setList(data);
        }
    });
}

function setList(data)  {
    var html="";
    for (var i = 0; i < data.length; i++) {
        html += '<tr>\n' +
            '                            <td>' + data[i].id + '</td>\n' +
            '                            <td>' + data[i].content + '</td>\n' +
            '                            <td>' + setUndefinedToNull(data[i].name) + '</td>\n' +
            '                            <td>' + setUndefinedToNull(data[i].title) + '</td>\n' +
            '                            <td>' + setUndefinedToNull(data[i].create_time) + '</td>\n' +
            '                            <td class="td-status">\n' +
            '                                <span class="layui-btn '+ (data[i].statut>0?"layui-btn-normal":"layui-btn-disabled") +' layui-btn-mini ">' + (data[i].statut > 0 ? "已过审" : "未过审") + '</span></td>\n' +
            '                            <td class="td-manage">\n' +
            '                                <a onclick="member_stop(this,' + data[i].id + ')" href="javascript:;" title="' + (data[i].statut > 0 ? "已过审" : "未过审") + '">\n' +
            '                                    <i class="layui-icon">&#xe601;</i>\n' +
            '                                </a>\n' +
            '                                <a title="删除" onclick="member_del(this,' + data[i].id + ')" href="javascript:;">\n' +
            '                                    <i class="layui-icon">&#xe640;</i>\n' +
            '                                </a>\n' +
            '                            </td>\n' +
            '                        </tr>';

    }
    $("#tbody").html(html);
}

function setRoles(data){
    if(data == 0){
        return "blocked";
    }
    if(data == 1){
        return "normal";
    }
    if(data == 2){
        return "moderator";
    }
    if(data == 3){
        return "admin";
    }
}

function setUndefinedToNull(data) {
    return data == undefined ? "" : data;
}

function getCount(){
    var count = 0;
    $.ajax({
        url: 'http://localhost:8080/jalon2/catalogue/public/index.php/comment/getCount',//地址：访问后台的地址
        data: getSearchData(),//前端传递给后台的数据
        type: 'post',
        async: false,
        dataType: 'json',//是后端传递到前端的数据格式
        success: function (data) {//后端给前端的一个反馈
            count = data;
        }
    });
    return count;
}
