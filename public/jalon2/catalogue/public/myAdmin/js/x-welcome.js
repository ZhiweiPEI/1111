$(function () {
    $("#welcomeName").html(sessionStorage.getItem("loginName"));
    $("#loginDate").html(new Date().toLocaleString());
});