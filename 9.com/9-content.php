<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<!-- CONTENT -->
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