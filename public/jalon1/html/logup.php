<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>Login</title>
	<link rel="stylesheet" href="../../bootstrap-5.1.3-dist/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="../css/logup.css"> 
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="../../bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <script src="../js/user/logup.js"></script>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <form class="form-horizontal" action='http://localhost:8080/catalogue/public/index.php/user/add' method="POST">
                <span class="heading">LOG UP</span>
                <table>
                    <tr>
                        <td>Username:</td>
                        <td>
                            <div class="form-group">
                            <input type="text" class="form-control" id="inputUsername3" placeholder="Username" name="name">
                            <i class="fa fa-lock"></i>
                            <a href="#" class="fa fa-question-circle"></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td>
                            <div class="form-group">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
                            <i class="fa fa-lock"></i>
                            <a href="#" class="fa fa-question-circle"></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td>
                            <div class="form-group">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
                            <i class="fa fa-user"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Number Tel:</td>
                        <td>
                            <div class="form-group">
                            <input type="text" class="form-control" id="inputNumber3" placeholder="Telephone Number" name="tel">
                            <i class="fa fa-lock"></i>
                            <a href="#" class="fa fa-question-circle"></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Code:</td>
                        <td>
                            <div class="form-group">
                            <input type="text" class="form-control" id="inputCoder3" placeholder="Code" name="code">
                            <i class="fa fa-lock"></i>
                            <a href="#" class="fa fa-question-circle"></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                        <div class="form-group">
                        <button type="submit" class="btn btn-default">Log up</button>
                        </div>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>

</body>
</html>