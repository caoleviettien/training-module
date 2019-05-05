<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>


<div class="swiper-container gallery-top">
    <div class="swiper-wrapper">
          <div class="swiper-slide">
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
          </div>
          <div class="swiper-slide">
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
          </div>
          <div class="swiper-slide">
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
          </div>
          <div class="swiper-slide">
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
          </div>
          <div class="swiper-slide">
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
          </div>
          <div class="swiper-slide">
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
          </div>
          <div class="swiper-slide">
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
          </div>
          <div class="swiper-slide">
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
          </div>
          <div class="swiper-slide">
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
          </div>
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next swiper-button-white"></div>
    <div class="swiper-button-prev swiper-button-white"></div>
</div>

<div class="swiper-container gallery-thumbs">
    <div class="swiper-wrapper">
          <div class="swiper-slide" style="background-image:url(images/jameschapman.jpg)"></div>
          <div class="swiper-slide" style="background-image:url(images/oliviacastro.jpg)"></div>
          <div class="swiper-slide" style="background-image:url(images/jasonwang.jpg)"></div>
          <div class="swiper-slide" style="background-image:url(images/jameschapman.jpg)"></div>
          <div class="swiper-slide" style="background-image:url(images/oliviacastro.jpg)"></div>
          <div class="swiper-slide" style="background-image:url(images/jasonwang.jpg)"></div>
          <div class="swiper-slide" style="background-image:url(images/jameschapman.jpg)"></div>
          <div class="swiper-slide" style="background-image:url(images/oliviacastro.jpg)"></div>
          <div class="swiper-slide" style="background-image:url(images/jasonwang.jpg)"></div>
    </div>
</div>