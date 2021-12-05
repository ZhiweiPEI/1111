$(function () {
    var username = sessionStorage.getItem("email");
    var isLogin = username == null?false:true;
    if(!isLogin){
        location.href="";
    }
});