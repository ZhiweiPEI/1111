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
            '<p>Directors: '+ data.director +'</p>'+
            '<p>Actors: '+ data.actor +'</p>'+
        '</div> <!-- .column -->'+

        '<div class="col-sm-4">'+
            '<img src="'+ data.image +'" with = "300px" height = "200px">'+
            '</img>'+
        '</div> <!-- .column -->'+

        '<div class="col-sm-4 right-aligned  pad-left">'+
            '<h2 class="section-title">Why choose this film?</h2>'+
            '<div class="btn-group">'+
            '<input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" checked/>'+
            '<label class="btn btn-secondary" for="option1">like</label>'+

            '<input type="radio" class="btn-check" name="options" id="option2" autocomplete="off" />'+
            '<label class="btn btn-secondary" for="option2">not like</label>'+

            '</div>'+
            '<p>Oluptatem sequi nesciunt porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur adipisci velit labore dolore.</p>'+
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
    for(let i = 0; i < 5;i++){
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
                        '<button onclick="deleter1()" type="button" class="btn btn-danger btn-xs" title="Delete">'+
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