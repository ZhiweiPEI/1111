function modify(e)
{

    alert("modify success");
    

}

function deleter1(e)
{
    var message = document.getElementsByClassName("lists");
    message[1].parentNode.removeChild(message[1]);
    alert("delete success");
}

function addNewMessage(){
    var html = 
    '<li class="list-group-item">'+
    '<div class="row lists">'+
        '<div class="col-xs-2 col-md-1">'+
            '<img src="http://placehold.it/80" class="img-circle img-responsive" alt="" /></div>'+
        '<div class="col-xs-10 col-md-11">'+
            '<div>'+
                '<div id="title">title</div>'+
                '<div class="mic-info">'+
                    'By: <div id="userName">Bhaumik Patel</div> on 11 Nov 2013'+
                '</div>'+
            '</div>'+
            '<div id="comment" class="comment-text">'+
                'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh'+
                'euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim'+
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
    $("#message").append(html);
    alert("add success");
}
