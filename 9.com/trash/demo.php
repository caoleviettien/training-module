<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <script src="js/touchSwipe.min.js" type="text/javascript"></script>
  <script src="js/myjs.js" type="text/javascript"></script>

  <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/type-9.less', 'css/type-9.css');
  ?>

  <link href="css/type-9.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="type-9 container-fluid">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/slide-1.jpg">
        <p class="flex-caption">
            <span class="main">JOIN GOURMET LEARNING ONLINE</span>
            <br>
            <span class="secondary clearfix">Choose from over 100 online and offline courses</span>
        </p>
      </div>
      <div class="item">
        <img src="images/slide-2.jpg">
        <p class="flex-caption">
            <span class="main">COME TO OUR OPEN DAYS</span>
            <br>
            <span class="secondary clearfix">Donec accumsan nunc sed ipsum dapibus consectetur</span>
        </p>
      </div>
      <div class="item">
        <img src="images/slide-3.jpg">
        <p class="flex-caption">
            <span class="main">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
            <br>
            <span class="secondary clearfix">Ipsam provident nam voluptate, dolore sed.</span>
        </p>
      </div>
      <div class="item">
        <img src="images/slide-4.jpg">
        <p class="flex-caption">
            <span class="main">A illum alias expedita labore quasi nisi modi reprehenderit.</span>
            <br>
            <span class="secondary clearfix">Earum repudiandae, provident sapiente corrupti fugit?</span>
        </p>
      </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</body>
</html>