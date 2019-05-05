  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="../dist/css/swiper.min.css">

  <!-- Demo styles -->
  <style>
    html, body {
      position: relative;
      height: 100%;
    }
    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color:#000;
      margin: 0;
      padding: 0;
    }
    .swiper-container {
      width: 100%;
      height: 100%;
    }
    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }


  </style>

  <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><h3 class="review-title">
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
                        </div></div>
      <div class="swiper-slide"><h3 class="review-title">
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
                        </div></div>
      <div class="swiper-slide"><h3 class="review-title">
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
                        </div></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination">
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
        </ol>
      </div>
  </div>

  <!-- Swiper JS -->
  <script src="../dist/js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      spaceBetween: 30,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
  </script>