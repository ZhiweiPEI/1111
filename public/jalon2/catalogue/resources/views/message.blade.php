<!DOCTYPE html>
<html lang="en">
<script src="{{asset('js/message.js')}}"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="thstronge.css">
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<script src="{{asset('js/film/favorite.js')}}"></script>   
<link href="{{asset('css/styles.css') }}" rel="stylesheet" />   
<link href="{{asset('css/list.css') }}" rel="stylesheet" />
    
<head>
    <meta name="referrer" content="no-referrer" /> 
    <link rel="stylesheet" type="text/css" href="thstronge.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="{{asset('js/film/favorite.js')}}"></script>   
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
    <body>
        <div class="container">
            <div class="row">
                <div class="panel panel-default widget">
                    <div class="panel-heading">
                        <span class="glyphicon glyphicon-comment"></span>
                        <h3 class="panel-title">
                            Recent Comments</h3>
                        <span class="label label-info">
                            78</span>
                    </div>
                    <div class="panel-body">
                        <ul id="message" class="list-group">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-xs-2 col-md-1">
                                        <img src="http://placehold.it/80" class="img-circle img-responsive" alt="" /></div>
                                    <div class="col-xs-10 col-md-11">
                                        <div>
                                        <div id="title">title</div>
                                            <div class="mic-info">
                                                By: <div id="userName">Bhaumik Patel</div> on 2 Aug 2013
                                            </div>
                                        </div>
                                        <div id="comment" class="comment-text">
                                            Awesome design
                                        </div>
                                        <div class="action">
                                            <button onclick="modify()" type="button" class="btn btn-primary btn-xs" title="Edit">
                                                <span class="glyphicon glyphicon-pencil"></span>
                                            </button>
                                            <button onclick="deleter()" type="button" class="btn btn-danger btn-xs" title="Delete">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </button>
                                        </div>
                                        <textarea rows="3" cols="40">You can edit the comment here, and then click the edit button</textarea>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-xs-2 col-md-1">
                                        <img src="http://placehold.it/80" class="img-circle img-responsive" alt="" /></div>
                                    <div class="col-xs-10 col-md-11">
                                        <div>
                                        <div id="title">title</div>
                                            <div class="mic-info">
                                                By: <div id="userName">Bhaumik Patel</div> on 2 Aug 2013
                                            </div>
                                        </div>
                                        <div id="comment" class="comment-text">
                                            Awesome design
                                        </div>
                                        <div class="action">
                                            <button onclick="modify()" type="button" class="btn btn-primary btn-xs" title="Edit">
                                                <span class="glyphicon glyphicon-pencil"></span>
                                            </button>
                                            <button onclick="deleter()" type="button" class="btn btn-danger btn-xs" title="Delete">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </button>
                                        </div>
                                        <textarea rows="3" cols="40">You can edit the comment here, and then click the edit button</textarea>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-xs-2 col-md-1">
                                        <img src="http://placehold.it/80" class="img-circle img-responsive" alt="" /></div>
                                    <div class="col-xs-10 col-md-11">
                                        <div>
                                            <div id="title">title</div>
                                            <div class="mic-info">
                                                By: <div id="userName">Bhaumik Patel</div> on 11 Nov 2013
                                            </div>
                                        </div>
                                        <div id="comment" class="comment-text">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim
                                        </div>
                                        <div class="action">
                                            <button onclick="modify()" type="button" class="btn btn-primary btn-xs" title="Edit">
                                                <span class="glyphicon glyphicon-pencil"></span>
                                            </button>
                                            <button onclick="deleter()" type="button" class="btn btn-danger btn-xs" title="Delete">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </button>
                                        </div>
                                        <textarea rows="3" cols="40">You can edit the comment here, and then click the edit button</textarea>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div onclick="addNewMessage()" class="btn btn-primary btn-sm btn-block" role="button"><span class="glyphicon"></span> add new comment</div>

                        <textarea rows="3" cols="80">You can add a comment here and click the add button</textarea>
                    </div>
                </div>
            </div>
        </div>
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