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
            '<h2 class="section-title">'+ data.name +'</h2>'+
            '<p>Directors: '+ data.director +'</p>'+
            '<p>Actors: '+ data.actor +'</p>'+
        '</div> <!-- .column -->'+

        '<div class="col-sm-4">'+
            '<img src="'+ data.image +'" with = "300px" height = "200px">'+
            '</img>'+
        '</div> <!-- .column -->'+

        '<div class="col-sm-4 right-aligned  pad-left">'+
            '<h2 class="section-title">Why choose this film?</h2>'+
            '<p>Oluptatem sequi nesciunt porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur adipisci velit labore dolore.</p>'+
        '</div> <!-- .column -->'+

    '</div> <!-- .row -->'+

    '<blockquote>'+
        '<p>'+ data.description +'</p>'+
    '</blockquote>'+
    '<form action="#" class="subscribe-form">'+
        '<div class="control">'+
            '<i class="fa fa-envelope"></i>'+
            '<input type="email" placeholder="Enter your email">'+
            '<input type="submit" value="Subscribe" class="button orange">'+
        '</div>'+
    '</form> <!-- .subscribe-form -->'+
'</div>';
    $("#content").html(html);
}