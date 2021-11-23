<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>Login</title>
	<link rel="stylesheet" href="../../bootstrap-5.1.3-dist/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="../css/login.css"> 
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="../../bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-6" style="float:left; display:inline">
            <form class="form-horizontal">
                <span class="heading">LOGIN</span>
                <div class="form-group">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Username/Email/Telephone">
                    <i class="fa fa-user"></i>
                </div>
                <div class="form-group help">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                    <i class="fa fa-lock"></i>
                    <a href="#" class="fa fa-question-circle"></a>
                </div>
                <div class="form-group">
                    <div class="main-checkbox">
                        <input type="checkbox" value="None" id="checkbox1" name="check"/>
                        <label for="checkbox1"></label>
                    </div>
                    <span class="text">Remember me</span>
                    <button type="submit" class="btn btn-default" onclick="sendForm()">Login</button>
                </div>
            </form>
        </div>
        <div style="float:left; display:inline">
            <form class="form-horizontal">
                <span class="heading">LOGIN WITH QR CODE</span>
                <div>
                    <img src="../img/WechatIMG91.jpeg" width="200px" height="200px"/>
                </div>
            </form>
        </div>
    </div>
</div>

</body>

<script>

    function getSearchData() {
    return {
        email: $("#inputEmail3").val(),
        password: $("#inputPassword3").val()
        };
    }

    function sendForm(){
        $.ajax({
        url: 'http://localhost:8080/catalogue/public/index.php/user/test4',
        data: getSearchData(),
        type: 'post',
        dataType: 'json',
        success: function (data) {
            console.log("bon!");
        }
    });
    }
</script>

</html>