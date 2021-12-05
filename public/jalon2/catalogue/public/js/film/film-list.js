$(function () {
    findAll();
});

function findAll(data) {
    var email = sessionStorage.getItem("email");
    var search = $("#search").val();
    $.ajax({
        url: 'http://localhost:8080/jalon2/catalogue/public/index.php/film/select',
        data: {
                search:search,
                type : data
            },
        type: 'get',
        dataType: 'json',
        success: function (data) {
            console.log(data,1111);
            setData(data);
        }
    });

    $.ajax({
        url: 'http://localhost:8080/jalon2/catalogue/public/index.php/user/selectIdByEmail',
        data: {email:email},
        type: 'get',
        dataType: 'json',
        success: function (data) {
            console.log(data);
            sessionStorage.setItem("userId",data[0].id);
            //sessionStorage.setItem("userName",data[0].name);
        }
    });
}

function setData(data) {
    var html = "";
    for(let i = 0; i < data.length; i++){
        html += '<div class="col mb-5">'+
        '<div class="card h-100">'+
            '<img class="card-img-top" src="' + data[i].image + '" alt="..." />'+
            '<div class="card-body p-4">'+
                '<div class="text-center">'+
                    '<h5 class="fw-bolder">'  + data[i].title + '</h5>'+
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
                '<div class="text-center" onclick="setFilmSession('+ data[i].id +')"><a class="btn btn-outline-dark mt-auto" href="http://localhost:8080/jalon2/catalogue/public/filmInfo">View Info</a></div>'+
            '</div>'+
        '</div>'+
    '</div>';
    }
    $("#content").html(html);
}

function setFilmSession(data){
    sessionStorage.setItem("filmId",data);
}
