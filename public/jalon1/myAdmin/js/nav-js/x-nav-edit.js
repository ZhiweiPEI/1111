$(function () {
    findById();
});

function findById() {
    var id = sessionStorage.getItem("navId");
    let tokenHead = sessionStorage.getItem("tokenHead");
    let access_token = sessionStorage.getItem("access_token");
    let token = tokenHead +" "+ access_token;
    $.ajax({
        url: 'http://localhost:8080/back/nav/findById',
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
    $("#L_title").val(data.title);
    $("#L_href").val(data.href);
}