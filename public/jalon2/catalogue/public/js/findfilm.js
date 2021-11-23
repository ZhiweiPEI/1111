$(function () {
    findByName();
});

function findByName() {
    var name = sessionStorage.getItem("name");
    console.log(name);
    $.ajax({
        url: 'http://localhost:8080/jalon2/catalogue/public/index.php/film/findByName',
        data: {name: name},
        type: 'post',
        dataType: 'json',
        success: function (data) {
            console.log(data[0]);
            setData(data[0]);
        }
    });
}

function setData(data) {
    $("#name").val(data.name);
    $("#director").val(data.director);
    $("#category").val(data.category_id);
}