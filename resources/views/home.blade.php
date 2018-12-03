<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../public/ico/favicon.ico">
    <title>NO-Q Online Food Ordering</title>

    <!-- Bootstrap core CSS -->
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../public/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="../public/css/carousel.css" rel="stylesheet">
    <link href="../public/css/cardbox.css" rel="stylesheet" type="text/css">

  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="" style="color: black">No-Q Online Ordering</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="">Home</a></li>
                 
                <!-- Authentication Links -->
                        @if (Auth::guest())
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
                          <ul class="dropdown-menu">
                            <li><a href="{{ route('login') }}">Customer Login</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ route('staff.login') }}">Staff Login</a></li>
                          </ul>

                        </li> <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Registration <b class="caret"></b></a>
                          <ul class="dropdown-menu">
                            <li><a href="{{ route('register') }}">Customer Registration</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ route('staff.register') }}">Staff Registration</a></li>
                          </ul>
                        </li>

                        <li><a href="{{ url('product') }}">Products</a></li>
                        <li>
                          <a href="{{ url('cart') }}"><span class="glyphicon glyphicon-shopping-cart" style="color:black" aria-hidden="true" ></span> Cart({{ count(session('cart')) }})</a>
                        </li>

                        @else
                        <li><a href="{{ url('product') }}">Products</a></li>
                        <li>
                          <a href="{{ url('cart') }}"><span class="glyphicon glyphicon-shopping-cart" style="color:black" aria-hidden="true" ></span>Cart({{ count(session('cart')) }})</a>
                        </li>
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">

                                  <li><a href="{{ url('/profile') }}" >Edit Profile</a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>

                                </ul>
                            </li>
                        @endif
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>

    <!-- Carousel
    ================================================== -->
    <div id="mainCarousel">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
 
      <div class="carousel-inner">
        <div class="item active">

            <img src="../public/images/food-header.jpg" style="object-fit: cover;">
            </div>
          </div>
        </div><!-- /.carousel -->
    </div>

    <div class="mainTitle">
    <div class="container">
    <h1>No-Q Online Ordering</h1>
    <p>
    Never queue to buy your food again. Save your time.
    </p>
    </div>
    </div>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="../public/images/nepali-momo.png" alt="Generic placeholder image">
          <h2>Nepalese MOMO</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies</p>
          <p><a class="btn btn-default" href="#" role="button">&pound; 2.2 Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="../public/images/burger.png" alt="Generic placeholder image">
          <h2>Burger</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. </p>
          <p><a class="btn btn-default" href="#" role="button">&pound;5 Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4"
          <img class="img-circle" src="../public/images/gorkha-special-chicken.png" alt="Lam Tikka">
          <h2>Gurkha Chicken</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. </p>
          <p><a class="btn btn-default" href="#" role="button">&pound;4 Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
    </div>
    
    
    <div class="introSection">
        <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="cntr">Order, wait in your beloved room and pick-up when your food is ready.</h1>
            </div>
        </div>
        </div>
    </div>
    
     <div class="container marketing">
    <h2 class="itemsTitle">Breakfast</h2>
    <div id="myCarousel1" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <div class="carousel-inner">
        <div class="item active">
         <div class="row">
        <div class="col-lg-4">
          <img src="../public/images/salate.png" alt="Generic placeholder image">
          <h4>Salates</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="../public/images/burger.png" alt="Generic placeholder image">
          <h4>Meal</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="../public/images/drinks.png" alt="Generic placeholder image">
          <h4>Drink</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
         
        </div>
        <div class="item">
         <div class="row">
        <div class="col-lg-4">
          <img src="../public/images/salate.png" alt="Generic placeholder image">
          <h4>Salates</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="../public/images/burger.png" alt="Generic placeholder image">
          <h4>Meal</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="../public/images/drinks.png" alt="Generic placeholder image">
          <h4>Drink</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
         
        </div>
        <div class="item">
          <div class="row">
        <div class="col-lg-4">
          <img  src="../public/images/salate.png" alt="Generic placeholder image">
          <h4>Salates</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img  src="../public/images/burger.png" alt="Generic placeholder image">
          <h4>Meal</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img  src="../public/images/drinks.png" alt="Generic placeholder image">
          <h4>Drink</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel1" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel1" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
    </div>
    
    <div class="container marketing">
    <h2 class="itemsTitle">Lunch</h2>
    <div id="myCarousel2" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <div class="carousel-inner">
        <div class="item active">
         <div class="row">
        <div class="col-lg-4">
           <img src="../public/images/salate.png" alt="Generic placeholder image">
          <h4>Salates</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
         <img src="../public/images/chicken.png" alt="Generic placeholder image">
          <h4>Meal</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="../public/images/drinks_lussy.png" alt="Generic placeholder image">
          <h4>Drink</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
         
        </div>
        <div class="item">
         <div class="row">
        <div class="col-lg-4">
          <img src="../public/images/chicken_fry.png" alt="Generic placeholder image">
          <h4>Salates</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="../public/images/fish-and-chips.png" alt="Generic placeholder image">
          <h4>Meal</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="../public/images/drinks.png" alt="Generic placeholder image">
          <h4>Drink</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
         
        </div>
        <div class="item">
          <div class="row">
        <div class="col-lg-4">
          <img  src="../public/images/salate.png" alt="Generic placeholder image">
          <h4>Salates</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img  src="../public/images/burger.png" alt="Generic placeholder image">
          <h4>Meal</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img  src="../public/images/drinks.png" alt="Generic placeholder image">
          <h4>Drink</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel2" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel2" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
    </div>
    
    <div class="container marketing">
    <h2 class="itemsTitle">Dinner</h2>
    <div id="myCarousel3" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <div class="carousel-inner">
        <div class="item active">
         <div class="row">
        <div class="col-lg-4">
          <img src="../public/images/chicken_fry.png" alt="Generic placeholder image">
          <h4>Chicken</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="../public/images/rice.png" alt="Generic placeholder image">
          <h4>Rice</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="../public/images/drinks.png" alt="Generic placeholder image">
          <h4>Drink</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
         
        </div>
        <div class="item">
         <div class="row">
        <div class="col-lg-4">
          <img src="../public/images/courinder.png" alt="Generic placeholder image">
          <h4>Salates</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="../public/images/burger.png" alt="Generic placeholder image">
          <h4>Meal</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="../public/images/drinks.png" alt="Generic placeholder image">
          <h4>Drink</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
         
        </div>
        <div class="item">
          <div class="row">
        <div class="col-lg-4">
          <img  src="../public/images/salate.png" alt="Generic placeholder image">
          <h4>Salates</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img  src="../public/images/chicken_fry.png" alt="Generic placeholder image">
          <h4>Chicken</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img  src="../public/images/drinks.png" alt="Generic placeholder image">
          <h4>Drink</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel3" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel3" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
    </div>
        
    <div class="introSection">
        <div class="container">
        <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
          <figure class="snip1166 red">
            <img src="../public/images/card1.jpg"/>
            <figcaption>
              <h3>Save Your Time </h3>
              <div>
                <p>Do not queue for buying food. </p>
              </div>
            </figcaption>
          </figure>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
          <figure class="snip1166 red">
            <img src="../public/images/card2.jpg"/>
            <figcaption>
              <h3>Cozy</h3>
              <div>
                <p>For days you just feel like staying in.</p>
              </div>
            </figcaption>
          </figure>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
          <figure class="snip1166 red">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample73.jpg" alt="sample73"/>
            <figcaption>
              <h3>Convenient</h3>
              <div>
                <p>No more skipping lunch, no matter how busy.</p>
              </div><a href="#"></a>
            </figcaption>
          </figure>
        </div>

</div>
</div>
</div>


   <div class="container marketing">
   <div id="myCarousel4" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <div class="carousel-inner">
      <div class="item active">
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Fish and Chips <span class="text-muted">It's very very testy</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img src="../public/images/fish-and-chips.png" alt="Fish and Chips">
        </div>
      </div>
      </div>

      
    <div class="item">
      <div class="row featurette">
        <div class="col-md-5">
          <img src="../public/images/burger.png" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Oh yeah, very nice Burger. <span class="text-muted">Delicious.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
      </div>
      </div>


    <div class="item">
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Try yourself <span class="text-muted">Testy</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="img-circle" src="../public/images/drinks.png" alt="Generic placeholder image">
        </div>
      </div>
      </div>
       </div>
    </div><!-- /.carousel -->     
    </div><!-- /.container -->
      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <div class="container">
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 NO-Q Company, Inc.</p>
        </div>
      </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="../public/js/bootstrap.min.js"></script>
    <script src="../public/js/holder.js"></script>
    <script type="text/javascript">
        //For cardbox
        $(".hover").mouseleave(
          function () {
            $(this).removeClass("hover");
          });
        </script>
  </body>
</html>
