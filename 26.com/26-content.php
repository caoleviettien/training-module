<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>


<footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-8">
                <h2 class="footer-heading mb-4">Tweets</h2>
                    <div class="ja-twitter-tweets">
                      <div class="ja-twitter-item">
                          <div class="ja-twitter-source">
                              From <span>
                                  <a href="#">Twitter Web Client</a>
                              </span>
                          </div>

                          <div class="ja-twitter-text">
                              <a href="#">Joomlart Demo</a>

                              Magento Theme Showcase
                              <a href="#">http://t.co/6AzMb3BQ</a>      
                          </div>
                          <div class="ja-twitter-date" style="">
                              Monday, 06 February 2012 03:10      
                          </div>
                      </div><br>
                      <div class="ja-twitter-item">

                          <div class="ja-twitter-source">
                              From <span>
                                  <a href="#">Twitter Web Client</a>
                              </span>
                          </div>

                          <div class="ja-twitter-text">
                              <a href="#">Joomlart Demo</a>
                              Joomlart Blog <a href="#">http://t.co/LRrwpvQ2</a>      
                          </div>
                          <div class="ja-twitter-date">
                              Monday, 06 February 2012 03:10      
                          </div>
                      </div><br>
                      <div class="ja-twitter-item">

                          <div class="ja-twitter-source">
                              From <span>
                                  <a href="#">Twitter Web Client</a>
                              </span>
                          </div>

                          <div class="ja-twitter-text">
                              <a href="#">Joomlart Demo</a>

                              Template Showcase 
                              <a href="#">http://t.co/4ixx4jVW</a>      
                          </div>
                          <div class="ja-twitter-date" style="">
                              Monday, 06 February 2012 03:09      
                          </div>
                      </div>
                    </div>
              </div>
              <div class="col-md-4 ml-auto">
                <h2 class="footer-heading mb-4">Features</h2>
                <ul class="list-unstyled">
                  <li class="item active">
                      <a href="#">Home</a>
                  </li>
                  <li class="item">
                      <a href="#">Media</a>
                  </li>
                  <li class="item">
                      <a href="#">Events</a>
                  </li>
                  <li class="item">
                      <a href="#">Store</a>
                  </li>
                  <li class="item">  
                      <a href="#">J! Pages</a>
                  </li>
                  <li class="item">
                      <a href="#">Gallery</a>
                  </li>
                  <li class="item">
                      <a href="#">Donation</a>
                  </li>
                </ul>
              </div>
              
            </div>
          </div>
          <div class="col-md-4 ml-auto">

            <div class="mb-5">
              <h2 class="footer-heading mb-4">Subscribe to Us</h2>
              <form action="#" method="post">
                <div class="input-group mb-3">
                  <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-primary text-white" type="button" id="button-addon2">Subscribe</button>
                  </div>
                </div>
              </div>


              <h2 class="footer-heading mb-4">Connect</h2>
              <div class="contact">
                <a href="#" class="pl-3 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-youtube"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-wifi"></span></a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </footer>