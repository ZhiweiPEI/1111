function getData(){
    return {
        username: $("#inputUsername3").val(),
        password: $("#inputPassword3").val(),
        email: $("#inputEmail3").val(),
        tel: $("#inputNumber3").val(),
        code: $("#inputCoder3").val(),
    }
}

function signup(){
    console.log(data);
    $.ajax({
        url: 'http://localhost:8080/back/user/findAll',//地址：访问后台的地址
        data: getData(),//前端传递给后台的数据
        type: 'post',
        dataType: 'json',//是后端传递到前端的数据格式dataType: 'json',
        success: function (data) {//后端给前端的一个反馈
            console.log(data,1111);
            setList(data);
        }
    });
}