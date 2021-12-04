function addA(){
    alert("add success");
}
function delA(){
    alert("del success");
}

function modify(e)
{

    alert("modify success");
    

}

function deleter1(e)
{
    // var message = document.getElementsByClassName("lists");
    // message[1].parentNode.removeChild(message[1]);
    
    alert("delete success");
    location.replace(document.referrer);
}

function getCommentName(){

}

function getUserName(){
    var id = sessionStorage.getItem("userId");
    return id.nam
}

function addNewMessage(){

    var info = $("#textComment").val();
    var myDate = new Date();
    var html = 
    '<li class="list-group-item">'+
    '<div class="row lists">'+
        '<div class="col-xs-2 col-md-1">'+
            '<img src="http://placehold.it/80" class="img-circle img-responsive" alt="" /></div>'+
        '<div class="col-xs-10 col-md-11">'+
            '<div>'+
                '<div id="title">title</div>'+
                '<div class="mic-info">'+
                    'By: <div id="userName">'+sessionStorage.getItem("userId")+'</div> on '+myDate.getFullYear()+'-'+myDate.getMonth()+1+'-'+myDate.getDate()+
                '</div>'+
            '</div>'+
            '<div id="comment" class="comment-text">'+ info +
            '</div>'+
            '<div class="action">'+
                '<button onclick="modify()" type="button" class="btn btn-primary btn-xs" title="Edit">'+
                    '<span class="glyphicon glyphicon-pencil"></span>'+
                '</button>'+
                '<button onclick="del(res[i].id);deleter1()" type="button" class="btn btn-danger btn-xs" title="Delete">'+
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
