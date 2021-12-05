<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="referrer" content="no-referrer" /> 
        <title>CDAW projet</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/styles.css') }}" rel="stylesheet" />
        <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
        <script src="{{asset('js/film/film-list.js')}}"></script>
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Film Website</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="./">Home</a></li>
                    
                        @if (Route::has('login'))

        @auth
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
        @else
        <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>

            @if (Route::has('register'))
                <li class="nav-item"><a href="{{ route('register') }}" class="nav-link"  >Register</a></li>
            @endif
        @endif
    </div>
@endif
                        
                        <!-- <li class="nav-item"><a class="nav-link" href="user/index.blade.php">User info</a></li>
                        <li class="nav-item"><a class="nav-link" href="user/favorite.blade.php">favorite</a></li>
                         -->

                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li> -->
                    </ul>
                    <form class="form-inline my-2 my-lg-0" role="search" method="get" action="" target="iframe">
                        <div class="input-group">
                        <input id="search" type="text" class="form-control" name="keyword" placeholder="you can search here">
                        <span class="input-group-btn">
                        <button type="submit" class="btn btn-secondary" onclick = "findAll()">search</button>
                        </span>
                        </div><!-- /input-group -->
                    </form>
                    <iframe id="iframe" name="iframe" style="display:none;"></iframe>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">The best movie website</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Find your favorite movies</p>
                </div>
            </div>
        </header>
        <div style="margin-top:50px;">
            <button action="" type="button" class="btn btn-primary" onclick="findAll(1)">Action</button>
            <button action="" type="button" class="btn btn-secondary" onclick="findAll(4)">Adventure</button>
            <button action="" type="button" class="btn btn-success" onclick="findAll(2)">Comedy</button>
            <button action="" type="button" class="btn btn-danger" onclick="findAll(5)">Drama</button>
            <button action="" type="button" class="btn btn-warning" onclick="findAll(6)">Horror</button>
            <button action="" type="button" class="btn btn-info" onclick="findAll(7)">Fantasy</button>
            <button action="" type="button" class="btn btn-light" onclick="findAll(8)">Romance</button>
            <button action="" type="button" class="btn btn-dark" onclick="findAll(9)">Animation</button>
            <button action="" type="button" class="btn btn-primary" onclick="findAll()">Return to All</button>
        </div>
        <div style = "margin-top:50px">
            <button action="" type="button" class="btn btn-primary" onclick="findAll(10)">Thriller</button>
            <button action="" type="button" class="btn btn-secondary" onclick="findAll(11)">Suspense</button>
            <button action="" type="button" class="btn btn-success" onclick="findAll(3)">Science Fiction</button>
            <button action="" type="button" class="btn btn-danger" onclick="findAll(12)">Musical</button>
            <button action="" type="button" class="btn btn-warning" onclick="findAll(13)">War Film</button>
            <button action="" type="button" class="btn btn-info" onclick="findAll(14)">Western Film</button>
            <button action="" type="button" class="btn btn-light" onclick="findAll(15)">Epic Film</button>
            <button action="" type="button" class="btn btn-dark" onclick="findAll(16)">Historical Film</button>
        </div>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center" id = "content">
                    
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item me-4">
                        <a href="https://www.facebook.com/" target="_blank"><i class="bi-facebook fs-3"></i></a>
                    </li>
                    <li class="list-inline-item me-4">
                        <a href="https://twitter.com/" target="_blank"><i class="bi-twitter fs-3"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.instagram.com/" target="_blank"><i class="bi-instagram fs-3"></i></a>
                    </li>
                </ul>
            </div>
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
            
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
