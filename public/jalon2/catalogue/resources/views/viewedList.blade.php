<html>
<head>
    <meta name="referrer" content="no-referrer" /> 
    <link rel="stylesheet" type="text/css" href="thstronge.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="{{asset('js/film/viewed.js')}}"></script>   
    <link href="{{asset('css/styles.css') }}" rel="stylesheet" />   
    <link href="{{asset('css/list.css') }}" rel="stylesheet" />
</head>
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

<header>

  <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
  <div class="overlay"></div>

  <!-- The HTML5 video element that will create the background video on the header -->
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="https://download.dolby.com/us/en/test-tones/dolby-atmos-trailer_leaf_1080.mp4" type="video/mp4">
  </video>

  <!-- The header content -->
  <div class="container h-100">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
        <h1 class="display-3">The best movie website</h1>
        <p class="lead mb-0">You can view the movies you have already watched</p>
      </div>
    </div>
  </div>
</header>

<!-- Page section example for content below the video header -->
<!-- <section class="my-5">
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <p>The HTML5 video element uses an mp4 video as a source. Change the source video to add in your own background! The header text is vertically centered using flex utilities that are built into Bootstrap.</p>
        <p>The overlay color and opacity can be changed by modifying the <code>background-color</code> and <code>opacity</code> properties of the <code>.overlay</code> class in the CSS.</p>
        <p>Set the mobile fallback image in the CSS by changing the background image of the header element within the media query at the bottom of the CSS snippet.</p>
        <p class="mb-0">
          Created by <a href="https://startbootstrap.com">Start Bootstrap</a>
        </p>
      </div>
    </div>
  </div>
</section> -->



<body>
  <table style="width:100%"  class="table table-sm">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Poster</th>
            <th scope="col">Directors</th>
            <th scope="col">Description</th>
            <th scope="col">Actors</th>
        </tr>
    </thead>
    <tbody id = "content">
    
    </tbody>
  </table>
</body>
<!-- Footer -->
<footer class="page-footer font-small mdb-color lighten-3 pt-4">

  <!-- Footer Elements -->
  <div class="container">

    <!--Grid row-->
    <div class="row">

      <!--Grid column-->
      <div class="col-lg-2 col-md-12 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg" class="img-fluid"
            alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-6 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(78).jpg" class="img-fluid"
            alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-6 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(79).jpg" class="img-fluid"
            alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-12 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(81).jpg" class="img-fluid"
            alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-6 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(82).jpg" class="img-fluid"
            alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-6 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(84).jpg" class="img-fluid"
            alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

    </div>
    <!--Grid row-->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2022 IMT-nord-europe
    
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</html>