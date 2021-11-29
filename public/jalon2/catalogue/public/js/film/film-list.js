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
        html += '<div class="col mb-5">'+
        '<div class="card h-100">'+
            '<img class="card-img-top" src="' + data[i].image + '" alt="..." />'+
            '<div class="card-body p-4">'+
                '<div class="text-center">'+
                    '<h5 class="fw-bolder">'  + data[i].name + '</h5>'+
                    '<div class="d-flex justify-content-center small text-warning mb-2">'+
                        '<div class="bi-star-fill"></div>'+
                        '<div class="bi-star-fill"></div>'+
                        '<div class="bi-star-fill"></div>'+
                        '<div class="bi-star-fill"></div>'+
                        '<div class="bi-star-fill"></div>'+
                    '</div>'+
                    data[i].director +
                '</div>'+
            '</div>'+
            '<div class="card-footer p-4 pt-0 border-top-0 bg-transparent">'+
                '<div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View Info</a></div>'+
            '</div>'+
        '</div>'+
    '</div>';
    }
    $("#content").html(html);
}