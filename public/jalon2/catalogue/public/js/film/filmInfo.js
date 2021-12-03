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
}

function setData(data) {
    var html = "";
    html += '<div class="container">'+
    '<div class="row">'+
        '<div class="col-sm-4 pad-right">'+
            '<h2 class="section-title">'+ data.title +'</h2>'+
            '<button type="button" class="btn btn-primary btn-sm">viewed</button>'+
            '<button type="button" class="btn btn-secondary btn-sm">not viewed</button>'+
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
            '<label class="btn btn-secondary" for="option1">like</label>'+

            '<input type="radio" class="btn-check" name="options" id="option2" autocomplete="off" />'+
            '<label class="btn btn-secondary" for="option2">not like</label>'+

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