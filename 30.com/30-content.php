<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<footer id="t3-footer" class="wrap t3-footer mod-custom-style-8">
    <!-- row-1 -->
    <div class="main-container clearfix">
        <div class="row">
            <!-- col-1 -->
            <div class="footer-info col-xs-12 col-md-3  hidden-md hidden-sm hidden-xs">
                <div class="custom">
                    <img src="images/logo-footer-ltr.png" alt=""/>
                    <ul class="ic-contact">
                        <li>
                            <i class="fa fa-home"></i> Medicom Ltd Street , New York
                        </li>
                        <li>
                            <i class="fa fa-phone"></i> 905-476 -2437
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i> 
                            <a href="/">company@mail.com</a>
                        </li>
                    </ul>

                    <div class="addthis_toolbox">
                        <a class="addthis_button_facebook_follow" href="#">
                            <i class="fa fa-facebook"></i>

                        </a>
                        <a class="addthis_button_twitter_follow" href="#">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="addthis_button_rss_follow"  href="#">
                            <i class="fa fa-rss"></i>
                        </a>
                    </div>
                </div>
            </div>
           
            <!-- col-2 -->
            <div class="col-xs-12 col-md-12 col-lg-8">

                <div class="t3-footnav  row">
                    <!-- item menu 1 -->
                    <div class=" col-lg-3 col-md-3 col-sm-3  col-xs-6 hidden-xs ">
                        <div class="t3-module module " id="Mod90">
                            <div class="module-inner">
                                <h3 class="module-title ">
                                    <span>Patient guide</span>
                                </h3>
                                <div class="module-ct">
                                    <ul class="nav  nav-pills nav-stacked ">
                                        <li>Home</li>
                                        <li>Home</li>
                                        <li>Home</li>
                                        <li>Home</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item menu 2 -->
                    <div class=" col-lg-3 col-md-3 col-sm-3  col-xs-6 hidden-xs ">
                        <div class="t3-module module " id="Mod91">
                            <div class="module-inner">
                                <h3 class="module-title ">
                                    <span>Research</span></h3>
                                <div class="module-ct">
                                    <ul class="nav  nav-pills nav-stacked ">
                                        <li>Home</li>
                                        <li>Home</li>
                                        <li>Home</li>
                                        <li>Home</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item menu 3 -->
                    <div class=" col-lg-3 col-md-3 col-sm-3  col-xs-6 hidden-xs ">
                        <div class="t3-module module " id="Mod92">
                            <div class="module-inner">
                                <h3 class="module-title ">
                                    <span>Community</span>
                                </h3>
                                <div class="module-ct">
                                    <ul class="nav  nav-pills nav-stacked ">
                                        <li>Home</li>
                                        <li>Home</li>
                                        <li>Home</li>
                                        <li>Home</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item menu 4 -->
                    <div class=" col-lg-3 col-md-3 col-sm-3  col-xs-12 hidden-xs ">
                        <div class="t3-module module " id="Mod93">
                            <div class="module-inner">
                                <h3 class="module-title ">
                                    <span>Patients &amp; Visitors</span>
                                </h3>
                                <div class="module-ct">
                                    <ul class="nav  nav-pills nav-stacked ">
                                        <li>Home</li>
                                        <li>Home</li>
                                        <li>Home</li>
                                        <li>Home</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>          
            </div>
   
        </div>
    </div>
    <!-- row-2 -->
    <section class="main-container">
        <hr style="margin-top: 50px;">
        <div class="t3-copyright">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 copyright ">
                    <div class="poweredby text-hide">
                        <a class="t3-logo t3-logo-small t3-logo-light" href="#" title="Powered By T3 Framework" target="_blank">Powered By <strong>T3 Framework</strong></a>
                    </div>
                    <div class="module">
                        <small>Copyright © 2016 JoomlArt Demo Site. All Rights Reserved. Designed by 
                            <a href="#">JoomlArt.com</a>.
                        </small>
                        <small>
                            <a href="3">Joomla!</a> is Free Software released under the 
                            <a href="#">GNU General Public License.</a>
                        </small>
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 pull-right">
                    <div class="acymailing_module">
                        <div class="acymailing_fulldiv row">
                            <form id="formAcymailing44681">
                                <div class="acymailing_module_form">
                                    <table class="acymailing_form">
                                        <tbody>
                                            <tr>
                                                <td class="col-md-8 col-sm-8 col-xs-7">
                                                    <input id="user_email_formAcymailing44681" type="text" class="form-control text-white" placeholder="Enter Email"aria-label="Enter Email">
                                                </td> 

                                                <td class="col-md-4 col-sm-4 col-xs-5">
                                                    <input class="button btn btn-secondary" type="submit" value="Join" name="Submit">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>