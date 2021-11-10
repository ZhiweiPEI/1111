$(function () {
    findById();
});

function findById() {
    let id = sessionStorage.getItem("companyId");
    let tokenHead = sessionStorage.getItem("tokenHead");
    let access_token = sessionStorage.getItem("access_token");
    let token = tokenHead +" "+ access_token;
    $.ajax({
        url: 'http://localhost:8080/back/company/findById',
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
    $("#L_title").val(data.nameCN);
    $("#L_name").val(data.nameEN);
    $("#L_address").val(data.address);
    $("#L_phone").val(data.number);
    $("#L_fax").val(data.fax);
    $("#L_email").val(data.email);
    $("#L_website").val(data.website);
    $("#L_logo").val(data.logo);
    $("#L_bref").val(data.bref);
    $("#L_time").val(data.time);
}