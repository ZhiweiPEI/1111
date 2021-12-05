var usernoeud;

function modify(e) {
    var formnoeud = document.getElementById("myForm");
    formnoeud.style.visibility = "visible";
    var formsubmitnoeud = document.getElementById("myFormSubmit");
    formsubmitnoeud.disabled = false;
    usernoeud = document.getElementById(e.currentTarget.parentNode.id);
}

function validateForm(e) {
    e.preventDefault();
    content = e.currentTarget.elements[0].value;

    // console.log(e.currentTarget.elements[0].value);
    // var content = document.getElementById('newComment').innerHTML;
    // console.log(document.getElementById('newComment').innerText);
    // console.log(document.getElementById('newComment').innerHTML);

    if (content == null || content == "") {
        alert("Need Input! ");
        var formnoeud = document.getElementById("myForm");
        formnoeud.style.visibility = "visible";
        return false;
    }

    alert("You will change the " + usernoeud.id + ". ");

    contentid = usernoeud.id + "content";

    var monnoeud = document.getElementById(contentid);   
    monnoeud.innerHTML = e.currentTarget.elements[0].value;

    var formnoeud = document.getElementById("myForm");
    formnoeud.style.visibility = "hidden";    

    document.getElementById("myForm").reset();
}

document.getElementById("addNew").addEventListener("click", function(e){
    var number_h4 = document.getElementById("users").getElementsByTagName("h4").length + 1;
    var user_id = "user" + number_h4;
    // Etape1
    var monnoeud = document.getElementById('users'); 
    var user = document.createElement('div');
    user.id = user_id;
    monnoeud.appendChild(user);
    // Etape2
    var monnoeud = document.getElementById(user_id);
    var user_title = document.createElement('h4');
    user_title.innerText = "User" + number_h4;
    monnoeud.appendChild(user_title);
    // Etape3
    var monnoeud = document.getElementById(user_id);
    var user_content = document.createElement('p');
    user_content.innerText = "Content";
    user_content.id = user_id + "content";
    monnoeud.appendChild(user_content);
    // Etape4
    var monnoeud = document.getElementById(user_id);
    var user_modify = document.createElement('button');
    user_modify.className = "modify";
    user_modify.addEventListener("click", modify);
    user_modify.innerText = "Modify Comment";
    monnoeud.appendChild(user_modify);
    // Etape5
    // var monnoeud = document.getElementById(user_id);
    // var user_remove = document.createElement('button');
    // user_remove.className = "remove";
    // user_remove.addEventListener("click", deleter);
    // user_remove.innerText = "Remove Comment"
    // monnoeud.appendChild(user_remove);
})

document.forms[0].addEventListener('submit', validateForm);

let modifiers = document.getElementsByClassName("modify");
Array.from(modifiers).forEach(m => m.addEventListener("click",modify));

let remover = document.getElementsByClassName("remove");
Array.from(remover).forEach(m => m.addEventListener("click",deleter));