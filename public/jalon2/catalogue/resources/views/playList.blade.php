<html>
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
    <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
  </video>

  <!-- The header content -->
  <div class="container h-100">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
        <h1 class="display-3">The best movie website</h1>
        <p class="lead mb-0">You can view your playlist</p>
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
            <th scope="col">IMBD</th>
            <th scope="col">Description</th>
            <th scope="col">Actors</th>
        </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row"><strong>Melancholia</strong></th>
        <td><img src="http://collider.com/wp-content/uploads/melancholia-movie-poster-404x600.jpg" height="250" width="175"/></td>
        <td><a href="http://www.imdb.com/title/tt1527186/?ref_=nv_sr_1">About me!</a></td>
        <td>An end of the world thriller with beautiful cinstrongatography and visuals</td>
        <td>Kirsten Dunst, Alexanders Skaarsgard, Charlotte Gainsbourgh</td>
    </tr>
    <tr>
        <th scope="row"><strong>Melancholia</strong></th>
        <td><img src="https://m.media-amazon.com/images/M/MV5BMTY0NTQ1NjA0OV5BMl5BanBnXkFtZTgwMDg5NjkzMTE@._V1_UX67_CR0,0,67,98_AL_.jpg" height="250" width="175"/></td>
        <td><a href="http://www.imdb.com/title/tt1714915/">About me!</a></td>
        <td>An end of the world thriller with political overtones and a dystopic bleakness</td>
        <td>Clive Owen, Juliette Moore, Michael Caine</td>
    </tr>
    <tr>
        <th scope="row"><strong>Melancholia</strong></th>
        <td><img src="http://www.undercine.com/wp-content/gallery/only-lovers-left-alive-vampiros/only-lovers-left-alive-australian-poster-copy.jpg" height="250" width="175"/></td>
        <td><a href="http://www.imdb.com/title/tt1714915/">About me!</a></td>
        <td>An end of the <strong>vampire</strong> world thriller that is cooly confident and satiated with intellectual overtones</td>
        <td>Tilda Swinton, Tom Hiddleston, Mia Wasikowska</td>
    </tr>
    <tr>
        <th scope="row"><strong>Melancholia</strong></th>
        <td><img src="http://s5.postimg.org/ruxxb3747/tumblr_m4udhecb_Ja1qh4u7ro1_1280.jpg" height="250" width="175"/></td>
        <td><a href="http://www.imdb.com/title/tt0245712/link">About me!</a></td>
        <td>A politically charged film about love and the difficulty expressing this emotion between humans</td>
        <td>Gael Garcia Bernal, Emilio Echevarria, Goya Toledo</td>
    </tr>
    <tr>
        <th scope="row"><strong>Melancholia</strong></th>
        <td><img src="http://ia.media-imdb.com/images/M/MV5BMTU3Mzc3MjE3N15BMl5BanBnXkFtZTYwMzY0MTg4._V1_SY317_CR10,0,214,317_AL_.jpg" height="250" width="175"/></td>
        <td><a href="http://www.imdb.com/title/tt0117509/">About me!</a></td>
        <td>A visually dynamic retelling of the Shakespeare classic that transports timed story of star-crossed lovers to the grungy existence of modern Mexico</td>
        <td>Leonardo Dicaprio, Claire Danes</td>
    </tr>
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