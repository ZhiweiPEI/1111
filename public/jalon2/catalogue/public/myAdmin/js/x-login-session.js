$(function () {
    var username = sessionStorage.getItem("loginName");
    var isLogin = username == null?false:true;
    if(!isLogin){
        location.href="";
    }
});