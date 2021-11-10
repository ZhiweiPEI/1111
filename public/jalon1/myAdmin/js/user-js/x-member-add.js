$(function(){
    findRoleType();
});
function findRoleType() {
    let tokenHead = sessionStorage.getItem("tokenHead");
    let access_token = sessionStorage.getItem("access_token");
    let token = tokenHead +" "+ access_token;
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