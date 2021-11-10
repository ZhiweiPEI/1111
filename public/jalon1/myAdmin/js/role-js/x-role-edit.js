$(function () {
    findById();
    findPermissionData();
});

function findById() {
    var id = sessionStorage.getItem("roleId");
    let tokenHead = sessionStorage.getItem("tokenHead");
    let access_token = sessionStorage.getItem("access_token");
    let token = tokenHead +" "+ access_token;
    $.ajax({
        url: 'http://localhost:8080/back/role/findById',
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
    $("#L_name").val(data.name);
    $("#L_description").val(data.description);
}

function findPermissionData() {
    let da1 = myAjax('http://localhost:8080/back/permission/findAllType', {}, 'get');
    let da2 = myAjax('http://localhost:8080/back/permission/findAllData', {}, 'get');
    if (da1.code == 200 && da2.code == 200) {
        setPermissionData(da1.data.data,da2.data.data);
    } else if (da1.code == 500) {
        layer.msg(da1.message, {icon: 6, time: 1000});
    }else if (da1.code == 400) {
        layer.msg(da1.message, {icon: 6, time: 1000});
    }
}

function setPermissionData(permissionTypeList, permissionList) {
    layui.use(['form','layer'],function () {
        $ = layui.jquery;
        var form = layui.form,
            layer = layui.layer;

        let html = '';

        for (let i = 0; i < permissionTypeList.length; i++) {
            html += '<tr>\n' +
                '        <td>\n' +
                '            <input type="checkbox" name="roleName" lay-skin="primary" lay-filter="father" title="'+permissionTypeList[i].name+'">\n' +
                '        </td>\n'+
                '        <td>\n' +
                '            <div class="layui-input-block">\n';
            for (let j = 0; j < permissionList.length; j++) {
                if (permissionTypeList[i].id == permissionList[j].pid) {
                    html += '<input name="permission" lay-skin="primary" type="checkbox" title="'+permissionList[j].name+'" value="'+permissionList[j].id+'">\n';
                }
            }
            html +=  '             </div>\n' +
                '        </td>\n' +
                '    </tr>';
        }
        $("#tr_permission").html(html);
        form.render("checkbox");
    })
}