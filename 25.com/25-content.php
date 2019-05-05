<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>


<!-- CONTENT -->
<section class="projects-section bg-light">
    <div class="container">

      <!-- Featured Project Row -->
      <div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-6 col-lg-6">
          <img class="img-fluid mb-3 mb-lg-0" src="images/news-9.jpg" alt="">
        </div>
        <div class="col-xl-6 col-lg-6">
          <div class="featured-text text-center text-lg-left">
            <h4>Thoughts and challenges for your journey to becoming a teacher</h4><hr>
            <span class="info1">SUPER USER  /</span> <span class="info2">TEACHING & LEARNING</span><br>
            <span class="info1">/ 21 NOVEMBER 2015</span>
            <hr>
            <p class="text-black-50 mb-0">Llentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas, auris placerat eleifend leo. Quisque sit amet est et sapien ultricies eget, tempor sit amet, Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend</p>
          </div>
        </div>
      </div>

      <!-- Project One Row -->
      <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
        <div class="col-lg-6">
          <img class="img-fluid" src="images/news-1.jpg" alt="">
        </div>
        <div class="col-lg-6">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-left">
                <h4 class="text-white">Sustainability focus on health and gardening!</h4><br>
                <div>
                  <span class="info1">SUPER USER  /</span> <span class="info2">TEACHING & LEARNING</span>
                  <span class="info1">/ 21 NOVEMBER 2015</span>
                </div>                
                <br><p class="mb-0 text-white-50">Aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
                <hr class="d-none d-lg-block">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Project Two Row -->
      <div class="row justify-content-center no-gutters">
        <div class="col-lg-6">
          <img  class="img-fluid" src="images/news-3.jpg" alt="">
        </div>
        <div class="col-lg-6 order-lg-first">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-right">
                <h4 class="text-white">On this day in AD284 Diocletian became emperor</h4>
                <div>
                  <span class="info1">SUPER USER  /</span> <span class="info2">TEACHING & LEARNING</span>
                  <span class="info1">/ 21 NOVEMBER 2015</span>
                </div>
                
                <br><p class="mb-0 text-white-50">Tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra.</p>
                <hr class="d-none d-lg-block">
              </div>
            </div>
          </div>
        </div>
      </div>
      

      <!-- Project Three Row -->
      <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
        <div class="col-lg-6">
          <img  class="img-fluid" src="images/news-11.jpg" alt="">
        </div>
        <div class="col-lg-6">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-left">
                <h4 class="text-white">From sensitivity into intellectual vacuity</h4>
                <div>
                  <span class="info1">SUPER USER  /</span> <span class="info2">TEACHING & LEARNING</span>
                  <span class="info1">/ 21 NOVEMBER 2015</span>
                </div>
                
                <br><p class="mb-0 text-white-50">Habitant morbi tristique senectus et netus et malesuada f ames ac turpis egestas, auris placerat eleifend leo. Quisque sit amet est et sapien ultricies eget tempor sit amet.</p>
                <hr class="d-none d-lg-block">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>