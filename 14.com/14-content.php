<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<!-- CONTENT -->
<section id="maindiv" class="awards">
    <div id="div1" class="container">
        <ul class="logos">
            <li class="col-md-2 col-sm-2 col-xs-4">
                <img class="img-responsive" src="images/award1.jpg" alt="award">
            </li>           
            <li class="col-md-2 col-sm-2 col-xs-4">
                <img class="img-responsive" src="images/award2.jpg" alt="award">
            </li>
            <li class="col-md-2 col-sm-2 col-xs-4">
                <img class="img-responsive" src="images/award3.jpg" alt="award">
            </li>
            <li class="col-md-2 col-sm-2 col-xs-4">
                <img class="img-responsive" src="images/award4.jpg" alt="award">
            </li>
            <li class="col-md-2 col-sm-2 col-xs-4">
                <img class="img-responsive" src="images/award5.jpg" alt="award">
            </li>
            <li class="col-md-2 col-sm-2 col-xs-4">
                <img class="img-responsive" src="images/award7.jpg" alt="award">
            </li>  
        </ul><!--//logos-->
    </div>

    <div id="div2" class="container">
        <ul class="logos">
            <li class="col-md-2 col-sm-2 col-xs-4">
                <img class="img-responsive" src="images/award1.jpg" alt="award">
            </li>
            <li class="col-md-2 col-sm-2 col-xs-4">
                <img class="img-responsive" src="images/award2.jpg" alt="award">
            </li>
            <li class="col-md-2 col-sm-2 col-xs-4">
                <img class="img-responsive" src="images/award3.jpg" alt="award">
            </li>
            <li class="col-md-2 col-sm-2 col-xs-4">
                <img class="img-responsive" src="images/award4.jpg" alt="award">
            </li>
            <li class="col-md-2 col-sm-2 col-xs-4">
                <img class="img-responsive" src="images/award5.jpg" alt="award">
            </li>
            <li class="col-md-2 col-sm-2 col-xs-4">
                <img class="img-responsive" src="images/award7.jpg" alt="award">
            </li>  
        </ul><!--//logos-->
    </div>
</section>