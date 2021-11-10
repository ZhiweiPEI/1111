$(function () {
    findById();
});

function findById() {
    var id = sessionStorage.getItem("userId");
    let tokenHead = sessionStorage.getItem("tokenHead");
    let access_token = sessionStorage.getItem("access_token");
    let token = tokenHead +" "+ access_token;
    $.ajax({
        url: 'http://localhost:8080/back/permission/findById',
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
    $("#L_uri").val(data.uri);
    $("#L_pid").val(data.pid);
}