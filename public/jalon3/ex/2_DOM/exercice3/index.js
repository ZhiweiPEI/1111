"use strict";

function modify(e)
{
    
    var parent = e.currentTarget.parentNode;
    alert("modify success");
    parent.childNodes[3].innerHTML = "new message";

}

function deleter(e)
{
    alert(e.type +" on remove for "+ e.currentTarget.parentNode.id+" !");
    e.currentTarget.parentNode.remove();
}

document.getElementById("addNew").addEventListener("click", function(e){
    alert(e.type +" on add !");
    var content = "<div id=\"user"+(users.childNodes.length-3)+"\"><h4>Xuechu</h4><p> bien bien bien.</p><button class=\"modify\">Modify Comment</button><button class=\"remove\">Remove Comment</button></div>"
    users.innerHTML += content;

})

let modifiers = document.getElementsByClassName("modify");
Array.from(modifiers).forEach(m => m.addEventListener("click",modify));

let remover = document.getElementsByClassName("remove");
Array.from(remover).forEach(m => m.addEventListener("click",deleter));