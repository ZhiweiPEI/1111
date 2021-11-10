$(function () {
    $("#loginName").html(sessionStorage.getItem("loginName"));
});

function logout(){
    let tokenHead = sessionStorage.getItem("tokenHead");
    let access_token = sessionStorage.getItem("access_token");
    let token = tokenHead +" "+ access_token;
    $.ajax({
        url: 'http://localhost:8080/back/user/logout',//地址：访问后台的地址
        data: field,//前端传递给后台的数据
        type: 'post',
        dataType: 'json',//是后端传递到前端的数据格式
        beforeSend: function(request) {
            request.setRequestHeader("Authorization", token);
        },
        xhrFields: {
            withCredentials: true // 发送Ajax时，Request header中会带上 Cookie 信息。
        },
        success: function (data) {//后端给前端的一个反馈
            data = data.data
            console.log(data);
        }
    });
}