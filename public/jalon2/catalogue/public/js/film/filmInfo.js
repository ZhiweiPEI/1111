$(function () {
    findAll();
});

function findAll() {
    var id = sessionStorage.getItem("filmId");
    console.log(id);
    $.ajax({
        url: 'http://localhost:8080/jalon2/catalogue/public/index.php/film/selectById',
        data: {id:id},
        type: 'post',
        dataType: 'json',
        success: function (data) {
            console.log(data);
            setData(data[0]);
        }
    });

    $.ajax({
        url: 'http://localhost:8080/jalon2/catalogue/public/index.php/comment/findByFilmId',
        data: {id:id},
        type: 'post',
        dataType: 'json',
        success: function (res) {
            console.log(res);
            setComment(res);
        }
    });
}

function setData(data) {
    var html = "";
    html += '<div class="container">'+
    '<div class="row">'+
        '<div class="col-sm-4 pad-right">'+
            '<h2 class="section-title">'+ data.title +'</h2>'+
            '<button type="button" class="btn btn-primary btn-sm" onclick = "addViewed('+ sessionStorage.getItem("userId")+','+ sessionStorage.getItem("filmId") +')">viewed</button>'+
            '<button type="button" class="btn btn-secondary btn-sm" onclick = "delViewed('+ sessionStorage.getItem("userId")+','+ sessionStorage.getItem("filmId") +')">not viewed</button>'+
            '<p>Directors: '+ data.director +'</p>'+
            '<p>Actors: '+ data.actor +'</p>'+
        '</div> <!-- .column -->'+

        '<div class="col-sm-4">'+
            '<img src="'+ data.image +'" with = "300px" height = "200px">'+
            '</img>'+
        '</div> <!-- .column -->'+

        '<div class="col-sm-4 right-aligned  pad-left">'+
            '<h2 class="section-title">Choose this film!</h2>'+
            '<div class="btn-group">'+
            '<input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" checked/>'+
            '<label class="btn btn-secondary" for="option1" onclick = "addFavorite('+ sessionStorage.getItem("userId")+','+ sessionStorage.getItem("filmId") +')">like</label>'+

            '<input type="radio" class="btn-check" name="options" id="option2" autocomplete="off" />'+
            '<label class="btn btn-secondary" for="option2" onclick = "delFavorite('+ sessionStorage.getItem("userId")+','+ sessionStorage.getItem("filmId") +')">not like</label>'+

            '</div>'+
            '<p>You can add your favorite list here so that you can go to your favorite page and select your movie in the navigation bar after the next login.</p>'+
        '</div> <!-- .column -->'+

    '</div> <!-- .row -->'+

    '<blockquote>'+
        '<p>'+ data.description +'</p>'+
    '</blockquote>'
'</div>';
    $("#content").html(html);
}

function setComment(res){
    var html = "";
    for(let i = 0; i < res.length;i++){
        html += '<li class="list-group-item">'+
            '<div class="row lists">'+
                '<div class="col-xs-2 col-md-1">'+
                    '<img src="http://placehold.it/80" class="img-circle img-responsive" alt="" /></div>'+
                '<div class="col-xs-10 col-md-11">'+
                    '<div>'+
                    '<div id="title">title</div>'+
                        '<div class="mic-info">'+
                            'By: <div id="userName">'+ res[i].name +'</div> on '+ res[i].create_time +
                        '</div>'+
                    '</div>'+
                    '<div id="comment" class="comment-text">'+
                        res[i].content +
                    '</div>'+
                    '<div class="action">'+
                        '<button onclick="modify()" type="button" class="btn btn-primary btn-xs" title="Edit">'+
                            '<span class="glyphicon glyphicon-pencil"></span>'+
                        '</button>'+
                        '<button onclick="del('+ res[i].id +')" type="button" class="btn btn-danger btn-xs" title="Delete">'+
                            '<span class="glyphicon glyphicon-trash"></span>'+
                        '</button>'+
                    '</div>'+
                    '<textarea rows="3" cols="40">You can edit the comment here, and then click the edit button</textarea>'+
                '</div>'+
            '</div>'+
        '</li>';
    }
    $("#message").html(html);
}

function addComment(){
    console.log("before ajax");
    $.ajax({
        url: 'http://localhost:8080/jalon2/catalogue/public/index.php/comment/add',
        data: setAddData(),
        type: 'post',
        dataType: 'json',
        success: function (res) {
            console.log(res);
        }
    });
}

function setAddData(){
    console.log(sessionStorage.getItem("userId"),111111);
    return {
        "comment" : $("#textComment").val(),
        "userId" : sessionStorage.getItem("userId"),
        "filmId" : sessionStorage.getItem("filmId")
    };
}

function del(data){
    console.log(data,11111);
    $.ajax({
        url: 'http://localhost:8080/jalon2/catalogue/public/index.php/comment/del',
        data: {id : data},
        type: 'post',
        dataType: 'json',
        success: function (res) {
            console.log(res);
        }
    });
}

function addViewed(userId,filmId){
    $.ajax({
        url: 'http://localhost:8080/jalon2/catalogue/public/index.php/film/addViewed',
        data: {userId , filmId},
        type: 'post',
        dataType: 'json',
        success: function (res) {
            console.log(res);
        }
    });
}

function addFavorite(userId,filmId){
    $.ajax({
        url: 'http://localhost:8080/jalon2/catalogue/public/index.php/film/addFavorite',
        data: {userId , filmId},
        type: 'post',
        dataType: 'json',
        success: function (res) {
            console.log(res);
        }
    });
}

function delViewed(userId,filmId){
    $.ajax({
        url: 'http://localhost:8080/jalon2/catalogue/public/index.php/film/delViewed',
        data: {userId , filmId},
        type: 'post',
        dataType: 'json',
        success: function (res) {
            console.log(res);
        }
    });
}

function delFavorite(userId,filmId){
    $.ajax({
        url: 'http://localhost:8080/jalon2/catalogue/public/index.php/film/delFavorite',
        data: {userId , filmId},
        type: 'post',
        dataType: 'json',
        success: function (res) {
            console.log(res);
        }
    });
}