function myAjax(url, data, type) {
    let tokenHead = sessionStorage.getItem("tokenHead");
    let access_token = sessionStorage.getItem("access_token");
    let token = tokenHead +" "+ access_token;
    let result = null;
    $.ajax({
        type: type,//对应的是
        url: url,//@WebServlet("/login")
        data: data,
        async: false,
        dataType: "json",//后台传递给前端的数据格式---json
        beforeSend: function(request) {
            request.setRequestHeader("Authorization", token);
        },
        xhrFields: {
            withCredentials: true // 发送Ajax时，Request header中会带上 Cookie 信息。
        },
        success: function (data) {//data是后台传递给前端的值
            result = data;
        }
    });
    return result;
}