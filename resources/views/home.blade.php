@extends('layouts.customer_navbar')
@section('content')

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
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">
    <link href="../public/css/carousel.css" rel="stylesheet">
    <link href="../public/css/cardbox.css" rel="stylesheet" type="text/css">
  </head>
  <body>
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
    <p>Never queue to buy your food again. Save your time.</p>
    </div>
    </div>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">  
    <div class="introSection">
        <div class="container">
        <div class="row">
                <h1 class="cntr">Order, wait in your beloved room and pick-up when your food is ready.</h1>
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
@endsection