$(function () {
    findById();
    findRoleType();
});

function findById() {
    var id = sessionStorage.getItem("userId");
    $.ajax({
        url: 'http://localhost:8080/back/user/findById',
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
            console.log(data);
            setUserData(data);
        }
    });
}

function setUserData(data) {
    $("#L_username").val(data.username);
    $("#L_email").val(data.email);
    $("#L_phone").val(data.phone);
    $("#L_sex").val(data.sex);
}

function findRoleType() {
    $.ajax({
        url: 'http://localhost:8080/back/role/findAllRoles',
        data: {},
        type: 'get',
        dataType: 'json',
        beforeSend: function(request) {
            request.setRequestHeader("Authorization", token);
        },
        xhrFields: {
            withCredentials: true // 发送Ajax时，Request header中会带上 Cookie 信息。
        },
        success: function (data) {
            setRoleType(data);
        }
    });
}

function setRoleType(data) {
    layui.use(['form', 'layer'], function () {
        $ = layui.jquery;
        var form = layui.form
            , layer = layui.layer;

        //自定义验证规则

        let html = '';
        for (let i = 0; i < data.length; i++) {
            html += '<tr>\n' +
                '        <td>\n' +
                '            <div class="layui-input-block">\n' +
                '              <input type="checkbox" name="admin" lay-skin="primary" lay-filter="father" title="' + data[i].name + '" value="' + data[i].id + '">' +
                '             </div>\n' +
                '        </td>\n' +
                '    </tr>';
        }
        $("#admin").html(html);
        form.render('checkbox');
    })
}