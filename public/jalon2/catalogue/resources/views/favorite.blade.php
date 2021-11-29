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
          <a class="nav-link" href="">Home</a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/dashboard') }}" class="nav-link">Manage account</a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/favorite') }}" class="nav-link">Favorite</a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/favorite') }}" class="nav-link">Histroy</a>
        </li>
        <li class="nav-item"><a href="{{ url('/favorite') }}" class="nav-link">PlayLisT</a></li>
        <li class="nav-item"><a href="{{ url('/favorite') }}" class="nav-link">ViewedList</a></li>
        <li class="nav-item"><a href="{{ url('/favorite') }}" class="nav-link">Message</a></li>
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
        <p class="lead mb-0">your favorite films are here</p>
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
</html>