<!DOCTYPE html>
<html lang="en">
    		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Bitter:400,400italic,700|" rel="stylesheet" type="text/css">
		
        <link href="{{asset('css/fonts/font-awesome.min.css') }}" rel="stylesheet" />

		<!-- Loading main css file -->
		<link href="{{asset('css/style.css') }}" rel="stylesheet" />
        <script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		<script src="js/film/filmInfo.js"></script>
		<link href="{{asset('css/styles.css') }}" rel="stylesheet" />
<link href="{{asset('css/list.css') }}" rel="stylesheet" />

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">Your favorite films</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('/') }}">Home</a>
        </li>
        <li class="nav-item"><a href="{{ url('/dashboard') }}" class="nav-link">Manage account</a></li>
            <li class="nav-item"><a href="{{ url('/favorite') }}" class="nav-link">Favorite</a></li>
            <li class="nav-item"><a href="{{ url('/histroy') }}" class="nav-link">Histroy</a></li>
            <li class="nav-item"><a href="{{ url('/playList') }}" class="nav-link">PlayList</a></li>
            <li class="nav-item"><a href="{{ url('/viewedList') }}" class="nav-link">ViewedList</a></li>
            <li class="nav-item"><a href="{{ url('/message') }}" class="nav-link">Message</a></li>
      </ul>
    </div>
  </div>
</nav>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>LOGO</title>


		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
		
		<div class="site-content">
			<div class="hero">
				<div class="container">
					<a href="#" class="logo"><img src="img/images/logo.png" alt="Brand California"></a>

					<h1 class="hero-title">The best movie website <br>For you</h1>
					<p>Provide free movie and drama streaming service, including TV dramas, variety shows, movies, documentaries and other high-definition movies, including action movies, science fiction movies, comedies, dramas, war movies, romantic movies, costume dramas, the latest European and American dramas, and midnight Video, watching the video will not freeze, the page is simple and no ads. All popular movies are updated simultaneously.</p>
					
				</div> <!-- .container -->
			</div> <!-- .hero -->

			<main class="main-content" id = "content">
				
				
			</main> <!-- .main-content -->

			<footer class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<nav class="footer-navigation">
								<a href="index.html">Home</a>
								<a href="about.html">About us</a>
								<a href="contact.html">Contact</a>
							</nav>
							<p class="colophon">Copyright 2014. All rights reserved</p>
						</div>
						<div class="col-sm-6">
							<div class="social-links">
								<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
								<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
								<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
								<a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
							</div>
						</div>
					</div>
				</div>
			</footer> <!-- .site-footer -->
		</div>
        
		
	</body>

</html>