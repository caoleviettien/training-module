<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-16">
    <div class="reviews-section">
        <div class="container-fluid text-center">
            <div id="reviews-carousel" class="reviews-carousel carousel slide">
                <!--//wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <h3 class="review-title">
                            <i class="fa fa-quote-left"></i>Really amazing and well structured courses!
                        </h3>
                        <blockquote class="review center-block">
                            <p>Testimonial 1 goes here. You can add up to 6 testimonials.
                                Lorem ipsum dolor sit amet consectetur adipiscing elit. 
                                Integer suscipit, elit sed placerat aliquam, velit nulla semper lectus.</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>                        
                        </blockquote><!--//review-->
                        <div class="source">
                            <div class="name">James Chapman</div>
                            <div class="meta">London, UK</div>
                        </div><!--//source-->    
                    </div><!--//item-->
                    <div class="item">
                        <h3 class="review-title">
                            <i class="fa fa-quote-left"></i>Complete and concise!
                        </h3>
                        <blockquote class="review center-block">
                            <p>Testimonial 2 goes here. You can add up to 6 testimonials. 
                                Lorem ipsum dolor sit amet consectetur adipiscing elit. 
                                Integer suscipit, elit sed placerat aliquam, velit nulla semper lectus.</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>                        
                        </blockquote><!--//review-->
                        <div class="source">
                            <div class="name">Olivia Castro</div>
                            <div class="meta">San Francisco, US</div>
                        </div><!--//source-->    
                    </div><!--//item-->
                    <div class="item">
                        <h3 class="review-title">
                            <i class="fa fa-quote-left"></i>Informative and practical courses!
                        </h3>
                        <blockquote class="review center-block">
                            <p>Testimonial 3 goes here. You can add up to 6 testimonials. 
                                Lorem ipsum dolor sit amet consectetur adipiscing elit. 
                                Integer suscipit, elit sed placerat aliquam, velit nulla semper lectus.
                            </p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>                        
                        </blockquote><!--//review-->
                        <div class="source">
                            <div class="name">Jason Wang</div>
                            <div class="meta">Berlin, Germany</div>
                        </div><!--//source-->   
                    </div><!--//item-->
                </div><!--//carousel-inner-->
                <!--//Indicators-->
                <ol class="carousel-indicators">
                    <li class="active" data-target="#reviews-carousel" data-slide-to="0">
                        <img class="img-rounded img-circle" src="images/people-1.png"> 
                    </li>
                    <li data-target="#reviews-carousel" data-slide-to="1" >
                        <img class="img-rounded img-circle" src="images/people-2.png"> 
                    </li>
                    <li data-target="#reviews-carousel" data-slide-to="2" >
                        <img class="img-rounded img-circle" src="images/people-3.png"> 
                    </li>
                </ol><!--//carousel-indicators-->
            </div>
        </div><!--//container-->
    </div>
</div>
