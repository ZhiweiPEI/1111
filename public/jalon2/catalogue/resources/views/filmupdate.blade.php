<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>Login</title>
    <link rel="stylesheet" href="{{asset('css/logup.css')}}"> 
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="{{asset('js/logup.js')}}"></script>
    <script src="{{asset('js/findfilm.js')}}"></script>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <form class="form-horizontal" action='http://localhost:8080/jalon2/catalogue/public/index.php/film/update' method="POST">
                @csrf
                <span class="heading">Update Film</span>
                <table>
                    <tr>
                        <td>name:</td>
                        <td>
                            <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="" name="name">
                            <i class="fa fa-lock"></i>
                            <a href="#" class="fa fa-question-circle"></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>director:</td>
                        <td>
                            <div class="form-group">
                            <input type="text" class="form-control" id="director" placeholder="" name="director">
                            <i class="fa fa-lock"></i>
                            <a href="#" class="fa fa-question-circle"></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>category:</td>
                        <td>
                            <div class="form-group">
                            <input type="text" class="form-control" id="category" placeholder="" name="category">
                            <i class="fa fa-user"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                        <div class="form-group">
                        <button type="submit" class="btn btn-default">update</button>
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