<!DOCTYPE html>
<html lang="en">
<script src="{{asset('js/message.js')}}"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    
    <head>

    </head>
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
</html>