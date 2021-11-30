$(function () {
    findAll();
});

function findAll() {
    var email = sessionStorage.getItem("email");
    console.log(email);
    $.ajax({
        url: 'http://localhost:8080/jalon2/catalogue/public/index.php/film/select',
        data: {},
        type: 'get',
        dataType: 'json',
        success: function (data) {
            console.log(data);
            setData(data);
        }
    });
}

function setData(data) {
    var html = "";
    for(let i = 0; i < 8; i++){
        html += '<tr>'+
        '<th scope="row"><strong>'+data[i].name+'</strong></th>'+
        '<td><img src="'+data[i].image+'" height="200" width="300"/></td>'+
        '<td>'+data[i].director+'</td>'+
        '<td>'+data[i].description+'</td>'+
        '<td>'+data[i].actor+'</td>'+
    '</tr>';
    }
    $("#content").html(html);
}