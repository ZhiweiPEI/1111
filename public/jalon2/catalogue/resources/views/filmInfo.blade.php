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
            <li class="nav-item"><a href="{{ url('/favorite') }}" class="nav-link">Favorite</a></li>
            <li class="nav-item"><a href="{{ url('/histroy') }}" class="nav-link">Histroy</a></li>
            <li class="nav-item"><a href="{{ url('/playList') }}" class="nav-link">PlayList</a></li>
            <li class="nav-item"><a href="{{ url('/viewedList') }}" class="nav-link">ViewedList</a></li>
            <li class="nav-item"><a href="{{ url('/message') }}" class="nav-link">Message</a></li>
			<li class="nav-item">
                <form method="POST" action="http://localhost:8080/jalon2/catalogue/public/logout">
                    <a href="{{ url('/logout') }}" class="nav-link" onclick="event.preventDefault();this.closest('form').submit();">Logout</a>
                </form>
            </li>
            <li class="nav-item"><a href="{{ url('/user/profile') }}" class="nav-link">profile</a></li>
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

			<main class="main-content">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 pad-right">
							<h2 class="section-title">film information</h2>
							<p>Assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus.</p>
						</div> <!-- .column -->

						<div class="col-sm-4">
							<video src="#" poster="img/images/cover.png">
							</video>
						</div> <!-- .column -->

						<div class="col-sm-4 right-aligned  pad-left">
							<h2 class="section-title">Why choose this film?</h2>
							<div class="btn-group">
								<input
									type="radio"
									class="btn-check"
									name="options"
									id="option1"
									autocomplete="off"
									checked
								/>
								<label class="btn btn-secondary" for="option1">like</label>

								<input type="radio" class="btn-check" name="options" id="option2" autocomplete="off" />
								<label class="btn btn-secondary" for="option2">not like</label>

							</div>
							<div class="btn-group">
								<input
									type="radio"
									class="btn-check"
									name="options"
									id="option1"
									autocomplete="off"
									checked
								/>
								<label class="btn btn-secondary" for="option1">viewed</label>

								<input type="radio" class="btn-check" name="options" id="option2" autocomplete="off" />
								<label class="btn btn-secondary" for="option2">not viewed</label>

							</div>
							<p>Oluptatem sequi nesciunt porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur adipisci velit labore dolore.</p>
						</div> <!-- .column -->

					</div> <!-- .row -->

					<blockquote>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos atque harum tenetur consequatur officiis dolorem, dolor dolore autem fugit, esse porro doloribus ipsum, alias asperiores quidem ex corrupti vel dolores.</p>
					</blockquote>
					<form action="#" class="subscribe-form">
						<div class="control">
							<i class="fa fa-envelope"></i>
							<input type="email" placeholder="Enter your email">
							<input type="submit" value="Subscribe" class="button orange">
						</div>
					</form> <!-- .subscribe-form -->
				</div>
				
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