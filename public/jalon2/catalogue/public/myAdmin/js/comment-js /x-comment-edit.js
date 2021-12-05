$(function () {
    findById();
});

function findById() {
    var id = sessionStorage.getItem("userId");
    $.ajax({
        url: 'http://localhost:8080/jalon2/catalogue/public/index.php/user/selectById',
        data: {id: id},
        type: 'post',
        dataType: 'json',
        success: function (data) {
            console.log(data);
            setUserData(data[0]);
        }
    });
}

function setUserData(data) {
    $("#L_username").val(data.name);
    $("#L_email").val(data.email);
    $("#L_enable").val(data.enable);
}
