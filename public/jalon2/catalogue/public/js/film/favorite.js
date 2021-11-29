$(function () {
    findAll();
});

function findAll() {
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
        '<td><strong>' + data[i].name + '</strong></td>'+
        '<td><img src="' + data[i].image + '" height="250" width="175"/></td>'+
        '<td>' + data[i].director + '</td>'+
        '<td>' + data[i].description + '</td>'+
        '<td>' + data[i].actor+ '</td>'+
    '</tr>';
    }
    $("#content").html(html);
}