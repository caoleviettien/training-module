<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gentelella Alela! | </title>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/glyphicons.less', 'css/glyphicons.css');
        ?>
        <link rel="stylesheet" href="css/glyphicons.css">
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/back-to-top.js" type="text/javascript"></script>
        <script src="js/sidebar-left.js" type="text/javascript"></script>
        <script src="js/collapse-close.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="glyphicons">
            <div class="container-fluid">
                <div class="row"> 
                    <div class="col-md-2 left_col">
                        <div class="nav-sidemenu">
                            <div class="navbar nav_logo">
                                <a href="../dashboard2/index.php" class="site_title">
                                    <i class="fa fa-paw"></i>
                                    <span>Gentelella Alela!</span>
                                </a>
                            </div>
                            <div class="clearfix"></div>
                            <div class="nav_profile clearfix">
                                <div class="profile_pic">
                                    <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                                </div>
                                <div class="profile_info">
                                    <span>Welcome,</span>
                                    <h2>John Doe</h2>
                                </div>
                            </div>
                            <div class="nav_mainmenu">
                                <div class="menu-list">
                                    <h3>General</h3>
                                    <ul class="nav side-menu panel-group" id="collapsed">
                                        <li class="panel panel-default">
                                            <a data-toggle="collapse" data-parent="#collapsed" href="#nav-home">
                                                <i class="fa fa-home"></i> Home 
                                                <i class="down fa fa-chevron-down"></i></a>
                                            <ul class="nav child_menu collapse" id="nav-home">
                                                <li><a href="#">Dashboard</a></li>
                                                <li><a href="../dashboard2/index.php">Dashboard2</a></li>
                                                <li><a href="../dashboard3/index2.php">Dashboard3</a></li>
                                            </ul>
                                        </li>
                                        <li class="panel panel-default">
                                            <a data-toggle="collapse" data-parent="#collapsed" href="#nav-forms">
                                                <i class="fa fa-edit"></i>
                                                Forms
                                                <i class="down fa fa-chevron-down"></i>
                                            </a>
                                            <ul class="nav child_menu collapse" id="nav-forms">
                                                <li><a href="#">General Form</a></li>
                                                <li><a href="#">Advanced Components</a></li>
                                                <li><a href="#">Form Validation</a></li>
                                                <li><a href="#">Form Wizard</a></li>
                                                <li><a href="#">Form Upload</a></li>
                                                <li><a href="#">Form Buttons</a></li>
                                            </ul>
                                        </li>
                                        <li class="panel panel-default">
                                            <a data-toggle="collapse" data-parent="#collapsed" href="#nav-ui">
                                                <i class="fa fa-desktop"></i> UI Elements 
                                                <i class="down fa fa-chevron-down"></i>
                                            </a>
                                            <ul class="nav child_menu collapse" id="nav-ui">
                                                <li><a href="#">General Elements</a></li>
                                                <li><a href="#">Media Gallery</a></li>
                                                <li><a href="#">Typography</a></li>
                                                <li><a href="#">Icons</a></li>
                                                <li><a href="glyphicons.php">Glyphicons</a></li>
                                                <li><a href="#">Widgets</a></li>
                                                <li><a href="../invoice/invoice.php">Invoice</a></li>
                                                <li><a href="#">Inbox</a></li>
                                                <li><a href="#">Calendar</a></li>
                                            </ul>
                                        </li>
                                        <li class="panel panel-default">
                                            <a data-toggle="collapse" data-parent="#collapsed" href="#nav-tables">
                                                <i class="fa fa-table"></i> Tables
                                                <i class="down fa fa-chevron-down"></i>
                                            </a>
                                            <ul class="nav child_menu collapse" id="nav-tables">
                                                <li><a href="../tables/tables.php">Tables</a></li>
                                                <li><a href="../tables_dynamic/tables_dynamic.php">Table Dynamic</a></li>
                                            </ul>
                                        </li>
                                        <li class="panel panel-default">
                                            <a data-toggle="collapse" data-parent="#collapsed" href="#nav-data">
                                                <i class="fa fa-bar-chart-o"></i> Data Presentation
                                                <i class="down fa fa-chevron-down"></i>
                                            </a>
                                            <ul class="nav child_menu collapse" id="nav-data">
                                                <li><a href="#">Chart JS</a></li>
                                                <li><a href="#">Chart JS2</a></li>
                                                <li><a href="#">Moris JS</a></li>
                                                <li><a href="#">ECharts</a></li>
                                                <li><a href="#">Other Charts</a></li>
                                            </ul>
                                        </li>
                                        <li class="panel panel-default">
                                            <a data-toggle="collapse" data-parent="#collapsed" href="#nav-layouts">
                                                <i class="fa fa-clone"></i>Layouts 
                                                <i class="down fa fa-chevron-down"></i>
                                            </a>
                                            <ul class="nav child_menu collapse" id="nav-layouts">
                                                <li><a href="#">Fixed Sidebar</a></li>
                                                <li><a href="#">Fixed Footer</a></li>
                                            </ul>
                                        </li>
                                        <h3 class="live-on">Live On</h3>
                                        <li class="panel panel-default">
                                            <a data-toggle="collapse" data-parent="#collapsed" href="#nav-pages">
                                                <i class="fa fa-bug"></i> Additional Pages 
                                                <i class="down fa fa-chevron-down"></i>
                                            </a>
                                            <ul class="nav child_menu collapse" id="nav-pages">
                                                <li><a href="../e_commerce/e_commerce.php">E-commerce</a></li>
                                                <li><a href="../projects/projects.php">Projects</a></li>
                                                <li><a href="../project_detail/project_detail.php">Project Detail</a></li>
                                                <li><a href="../contacts/contacts.php">Contacts</a></li>
                                                <li><a href="../profile/profile.php">Profile</a></li>
                                            </ul>
                                        </li>
                                        <li class="panel panel-default">
                                            <a data-toggle="collapse" data-parent="#collapsed" href="#nav-ex">
                                                <i class="fa fa-windows"></i> Extras
                                                <i class="down fa fa-chevron-down"></i>
                                            </a>
                                            <ul class="nav child_menu collapse" id="nav-ex">
                                                <li><a href="#">403 Error</a></li>
                                                <li><a href="#">404 Error</a></li>
                                                <li><a href="#">500 Error</a></li>
                                                <li><a href="#">Plain Page</a></li>
                                                <li><a href="../login/login.php">Login Page</a></li>
                                                <li><a href="../pricing_tables/pricing_tables.php">Pricing Tables</a></li>
                                            </ul>
                                        </li>
                                        <li class="panel panel-default">
                                            <a data-toggle="collapse" data-parent="#collapsed" href="#nav-multilevel">
                                                <i class="fa fa-sitemap"></i> Multilevel Menu
                                                <i class="down fa fa-chevron-down"></i>
                                            </a>
                                            <ul class="nav child_menu collapse" id="nav-multilevel">
                                                <li>
                                                    <a href="#level1_1">Level One</a>
                                                </li>
                                                <li>
                                                    <a data-toggle="collapse" href="#nav-levelOne">
                                                        Level One<span class="fa fa-chevron-down"></span>
                                                    </a>
                                                    <ul class="nav child_menu collapse" id="nav-levelOne">
                                                        <li><a href="#">Level Two</a></li>
                                                        <li><a href="#">Level Two</a></li>
                                                        <li><a href="#">Level Two</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Level One</a></li>
                                            </ul>
                                        </li>                  
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-laptop"></i> Landing Page 
                                                <span class="label label-success pull-right">Coming Soon</span>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </div><!-- End Sidebar Menu -->
                            <div class="nav_footer hidden-small">
                                <a href="#">
                                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                                </a>
                                <a href="#">
                                    <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                                </a>
                                <a href="#">
                                    <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                                </a>
                                <a href="#">
                                    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                                </a>
                            </div>
                        </div>
                        <div class="nav_response">
                            <div class="logo-res">
                                <a href="../dashboard2/index.php"><i class="fa fa-paw"></i></a>
                            </div>
                            <nav class="menu-res">
                                <ul>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-home"></i><h5>Home</h5>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Dashboard</a></li>
                                            <li><a href="../dashboard2/index.php">Dashboard2</a></li>
                                            <li><a href="../dashboard3/index2.php">Dashboard3</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-edit"></i><h5>Form</h5>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">General Form</a></li>
                                            <li><a href="#">Advanced Components</a></li>
                                            <li><a href="#">Form Validation</a></li>
                                            <li><a href="#">Form Wizard</a></li>
                                            <li><a href="#">Form Upload</a></li>
                                            <li><a href="#">Form Buttons</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-laptop"></i><h5>UI Elements</h5>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">General Elements</a></li>
                                            <li><a href="#">Media Gallery</a></li>
                                            <li><a href="#">Typography</a></li>
                                            <li><a href="#">Icons</a></li>
                                            <li><a href="glyphicons.php">Glyphicons</a></li>
                                            <li><a href="#">Widgets</a></li>
                                            <li><a href="../invoice/invoice.php">Invoice</a></li>
                                            <li><a href="#">Inbox</a></li>
                                            <li><a href="#">Calendar</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-table"></i><h5>Tables</h5>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="../tables/tables.php">Tables</a></li>
                                            <li><a href="../tables_dynamic/tables_dynamic.php">Table Dynamic</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-bar-chart-o"></i><h5>Data Present</h5>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Chart JS</a></li>
                                            <li><a href="#">Chart JS2</a></li>
                                            <li><a href="#">Moris JS</a></li>
                                            <li><a href="#">Echarts</a></li>
                                            <li><a href="#">Other Charts</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-clone"></i><h5>Layouts</h5>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Fixed Sidebar</a></li>
                                            <li><a href="#">Fixed Footer</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-bug"></i><h5>Add Pages</h5>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="../e_commerce/e_commerce.php">E-commerce</a></li>
                                            <li><a href="../projects/projects.php">Projects</a></li>
                                            <li><a href="../project_detail/project_detail.php">Project Detail</a></li>                                    
                                            <li><a href="../contacts/contacts.php">Contacts</a></li>
                                            <li><a href="../profile/profile.php">Profile</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-windows"></i><h5>Extras</h5>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">403 Error</a></li>
                                            <li><a href="#">404 Error</a></li>
                                            <li><a href="#">500 Error</a></li>                                    
                                            <li><a href="#">Plain Page</a></li>
                                            <li><a href="../login/login.php">Login Page</a></li>
                                            <li><a href="../pricing_tables/pricing_tables.php">Pricing Tables</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-sitemap"></i><h5>Mullevel Menu</h5>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Level One</a></li>
                                            <li><a href="#">Level One</a></li>
                                            <li><a href="#">Level One</a></li>    
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">
                                            <i class="fa fa-laptop"></i><h5>Landing page</h5>
                                        </a>
                                        <span class="label label-success pull-right">Comming Soon</span>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-10 right_col">
                        <div class="top-nav">
                            <div class="nav_menu">
                                <nav>
                                    <a href="#menu-toggle" id="menu-toggle" class="btn btn-default toggled"><i class="fa fa-bars"></i></a>
                                    <ul class="nav navbar-right">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <img src="images/img.jpg" alt="">John Doe
                                                <i class="fa fa-angle-down"></i>
                                            </a>


                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#">Profile</a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span>Settings</span>
                                                        <span class="badge">50%</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">Help</a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Logout<i class="fa fa-sign-out"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-toggle info-number" data-toggle="dropdown">
                                                <i class="fa fa-envelope-o"></i>
                                                <span class="badge">6</span>
                                            </a>

                                            <ul class="dropdown-menu msg_list">
                                                <li>
                                                    <a>
                                                        <span class="image">
                                                            <img src="images/img.jpg" alt="Profile image">
                                                        </span>
                                                        <span>
                                                            <span class="name">John Smith</span>
                                                            <span class="time">3 mins ago</span>
                                                        </span>
                                                        <span class="msg">
                                                            Film festivals used to be do-or-die moments for movie makers. They were where...
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a>
                                                        <span class="image">
                                                            <img src="images/img.jpg" alt="Profile image">
                                                        </span>
                                                        <span>
                                                            <span class="name">John Smith</span>
                                                            <span class="time">3 mins ago</span>
                                                        </span>
                                                        <span class="msg">
                                                            Film festivals used to be do-or-die moments for movie makers. They were where...
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a>
                                                        <span class="image">
                                                            <img src="images/img.jpg" alt="Profile image">
                                                        </span>
                                                        <span>
                                                            <span class="name">John Smith</span>
                                                            <span class="time">3 mins ago</span>
                                                        </span>
                                                        <span class="msg">
                                                            Film festivals used to be do-or-die moments for movie makers. They were where...
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="text-center">
                                                        <a href="#">
                                                            <strong>See All Alerts</strong>
                                                            <i class="fa fa-angle-right"></i>
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="main-content">
                            <div class="content">
                                <div class="row">
                                    <div class="content-left col-md-6 col-sm-6 col-xs-6">
                                        <h3>Glyphicons Icons</h3>
                                    </div>
                                    <div class="content-right col-md-6 col-sm-6 col-xs-6">
                                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search for...">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-default" type="button">Go!</button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>  
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="admin-panel">
                                        <div class="admin-title">
                                            <h3>
                                                Glyphicons <small>different icon design elements</small>
                                            </h3>
                                            <ul class="items">
                                                <li>
                                                    <a class="collapse-link">
                                                        <i class="fa fa-chevron-up"></i>
                                                    </a>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-wrench"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Settings 1</a></li>
                                                        <li><a href="#">Settings 2</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a class="close-link">
                                                        <i class="fa fa-close"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="admin-content">
                                            <h2>Glyphicons</h2>

                                            <h4>
                                                Available glyphs
                                            </h4>

                                            <p>Includes 260 glyphs in font format from the Glyphicon Halflings set. Glyphicons Halflings are normally not available for free, but their creator has made them available for Bootstrap free of cost. As a thank you, we only ask that you include a link back to Glyphicons whenever possible.</p>
                                            <div class="row">
                                                <div class="col-md-custom col-sm-3 col-xs-6">
                                                    <div class="content-glyphicon">
                                                        <i class="glyphicon glyphicon-asterisk"></i>
                                                        <span>glyphicon glyphicon-asterisk</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-custom col-sm-3 col-xs-6">
                                                    <div class="content-glyphicon">
                                                        <i class="glyphicon glyphicon-plus"></i>
                                                        <span>glyphicon glyphicon-plus</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-custom col-sm-3 col-xs-6">
                                                    <div class="content-glyphicon">
                                                        <i class="glyphicon glyphicon-euro"></i>
                                                        <span>glyphicon glyphicon-euro</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-custom col-sm-3 col-xs-6">
                                                    <div class="content-glyphicon">
                                                        <i class="glyphicon glyphicon-glass"></i>
                                                        <span>glyphicon glyphicon-glass</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-custom col-sm-3 col-xs-6">
                                                    <div class="content-glyphicon">
                                                        <i class="glyphicon glyphicon-minus"></i>
                                                        <span>glyphicon glyphicon-minus</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-custom col-sm-3 col-xs-6">
                                                    <div class="content-glyphicon">
                                                        <i class="glyphicon glyphicon-cloud"></i>
                                                        <span>glyphicon glyphicon-cloud</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-custom col-sm-3 col-xs-6">
                                                    <div class="content-glyphicon">
                                                        <i class="glyphicon glyphicon-pencil"></i>
                                                        <span>glyphicon glyphicon-pencil</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-custom col-sm-3 col-xs-6">
                                                    <div class="content-glyphicon">
                                                        <i class="glyphicon glyphicon-music"></i>
                                                        <span>glyphicon glyphicon-music</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-custom col-sm-3 col-xs-6">
                                                    <div class="content-glyphicon">
                                                        <i class="glyphicon glyphicon-search"></i>
                                                        <span>glyphicon glyphicon-search</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-custom col-sm-3 col-xs-6">
                                                    <div class="content-glyphicon">
                                                        <i class="glyphicon glyphicon-heart"></i>
                                                        <span>glyphicon glyphicon-heart</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-custom col-sm-3 col-xs-6">
                                                    <div class="content-glyphicon">
                                                        <i class="glyphicon glyphicon-star"></i>
                                                        <span>glyphicon glyphicon-star</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-custom col-sm-3 col-xs-6">
                                                    <div class="content-glyphicon">
                                                        <i class="glyphicon glyphicon-user"></i>
                                                        <span>glyphicon glyphicon-user</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-custom col-sm-3 col-xs-6">
                                                    <div class="content-glyphicon">
                                                        <i class="glyphicon glyphicon-film"></i>
                                                        <span>glyphicon glyphicon-film</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-custom col-sm-3 col-xs-6">
                                                    <div class="content-glyphicon">
                                                        <i class="glyphicon glyphicon-th-large"></i>
                                                        <span>glyphicon glyphicon-th-large</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-custom col-sm-3 col-xs-6">
                                                    <div class="content-glyphicon">
                                                        <i class="glyphicon glyphicon-th"></i>
                                                        <span>glyphicon glyphicon-th</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-custom col-sm-3 col-xs-6">
                                                    <div class="content-glyphicon">
                                                        <i class="glyphicon glyphicon-th-list"></i>
                                                        <span>glyphicon glyphicon-th-list</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-custom col-sm-3 col-xs-6">
                                                    <div class="content-glyphicon">
                                                        <i class="glyphicon glyphicon-ok"></i>
                                                        <span>glyphicon glyphicon-ok</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-custom col-sm-3 col-xs-6">
                                                    <div class="content-glyphicon">
                                                        <i class="glyphicon glyphicon-remove"></i>
                                                        <span>glyphicon glyphicon-remove</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-custom col-sm-3 col-xs-6">
                                                    <div class="content-glyphicon">
                                                        <i class="glyphicon glyphicon-zoom-in"></i>
                                                        <span>glyphicon glyphicon-zoom-in</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-custom col-sm-3 col-xs-6">
                                                    <div class="content-glyphicon">
                                                        <i class="glyphicon glyphicon-off"></i>
                                                        <span>glyphicon glyphicon-off</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-custom col-sm-3 col-xs-6">
                                                    <div class="content-glyphicon">
                                                        <i class="glyphicon glyphicon-signal"></i>
                                                        <span>glyphicon glyphicon-signal</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-custom col-sm-3 col-xs-6">
                                                    <div class="content-glyphicon">
                                                        <i class="glyphicon glyphicon-cog"></i>
                                                        <span>glyphicon glyphicon-cog</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-custom col-sm-3 col-xs-6">
                                                    <div class="content-glyphicon">
                                                        <i class="glyphicon glyphicon-trash"></i>
                                                        <span>glyphicon glyphicon-trash</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-custom col-sm-3 col-xs-6">
                                                    <div class="content-glyphicon">
                                                        <i class="glyphicon glyphicon-home"></i>
                                                        <span>glyphicon glyphicon-home</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-custom col-sm-3 col-xs-6">
                                                    <div class="content-glyphicon">
                                                        <i class="glyphicon glyphicon-file"></i>
                                                        <span>glyphicon glyphicon-file</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-custom col-sm-3 col-xs-6">
                                                    <div class="content-glyphicon">
                                                        <i class="glyphicon glyphicon-time"></i>
                                                        <span>glyphicon glyphicon-time</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-custom col-sm-3 col-xs-6">
                                                    <div class="content-glyphicon">
                                                        <i class="glyphicon glyphicon-road"></i>
                                                        <span>glyphicon glyphicon-road</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-custom col-sm-3 col-xs-6">
                                                    <div class="content-glyphicon">
                                                        <i class="glyphicon glyphicon-upload"></i>
                                                        <span>glyphicon glyphicon-upload</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-custom col-sm-3 col-xs-6">
                                                    <div class="content-glyphicon">
                                                        <i class="glyphicon glyphicon-inbox"></i>
                                                        <span>glyphicon glyphicon-inbox</span>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="description-info">
                                                    <h4>How to use</h4>
                                                    <p>For performance reasons, all icons require a base class and individual icon class. To use, place the following code just about anywhere. Be sure to leave a space between the icon and text for proper padding.</p>
                                                    <h4>Don't mix with other components</h4>
                                                    <p>Icon classes cannot be directly combined with other components. They should not be used along with other classes on the same element. Instead, add a nested <code>&lt;span&gt;</code> and apply the icon classes to the <code>&lt;span&gt;</code>.</p>
                                                    <h4>Only for use on empty elements</h4>
                                                    <p>Icon classes should only be used on elements that contain no text content and have no child elements.</p>
                                                    <h4>Changing the icon font location</h4>
                                                    <p>Bootstrap assumes icon font files will be located in the <code>../fonts/</code> directory, relative to the compiled CSS files. Moving or renaming those font files means updating the CSS in one of three ways:</p>
                                                    <ul>
                                                        <li>Change the <code>@icon-font-path</code> and/or <code>@icon-font-name</code> variables in the source Less files.</li>
                                                        <li>Utilize the relative URLs option provided by the Less compiler.</li>
                                                        <li>Change the <code>url()</code> paths in the compiled CSS.</li>
                                                    </ul>
                                                    Use whatever option best suits your specific development setup.
                                                    <h4>Accessible icons</h4>
                                                    <p>Modern versions of assistive technologies will announce CSS generated content, as well as specific Unicode characters. To avoid unintended and confusing output in screen readers (particularly when icons are used purely for decoration), we hide them with the <code>aria-hidden="true"</code>attribute.</p>
                                                    <p>If you're using an icon to convey meaning (rather than only as a decorative element), ensure that this meaning is also conveyed to assistive technologies – for instance, include additional content, visually hidden with the <code>.sr-only</code> class.</p>
                                                    <p>If you're creating controls with no other text (such as a<code>&lt;button&gt;</code> that only contains an icon), you should always provide alternative content to identify the purpose of the control, so that it will make sense to users of assistive technologies. In this case, you could add an <code>aria-label</code> attribute on the control itself.</p>
                                                    Copy
                                                    <div class="frame-copy">
                                                        <span>&lt;span class="glyphicon glyphicon-search"aria-hidden="true"&gt;&lt;/span&gt;</span>
                                                    </div>
                                                    <h4>Example</h4>
                                                    <p>Use them in buttons, button groups for a toolbar, navigation, or prepended form inputs</p>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default" aria-label="Left Align"><i class="glyphicon glyphicon-align-left" aria-hidden="true"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-default" aria-label="Center Align"><i class="glyphicon glyphicon-align-center" aria-hidden="true"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-default" aria-label="Right Align"><i class="glyphicon glyphicon-align-right" aria-hidden="true"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-default" aria-label="Justify"><i class="glyphicon glyphicon-align-justify" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                    <div class="btn-toolbar">
                                                        <button type="button" class="btn btn-default btn-lg"><i class="glyphicon glyphicon-star" aria-hidden="true"></i> Star</button>
                                                        <button type="button" class="btn btn-default"><i class="glyphicon glyphicon-star" aria-hidden="true"></i> Star</button>
                                                        <button type="button" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-star" aria-hidden="true"></i> Star</button>
                                                        <button type="button" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-star" aria-hidden="true"></i> Star</button>
                                                    </div>
                                                    Copy
                                                    <div class="frame-copy">
                                                        <span>&lt;button type="button" class="btn btn-default" aria-label="Left Align"&gt;<br>
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span class="glyphicon glyphicon-align-left" aria-hidden="true"&gt;&lt;/span>
                                                            <br>&lt;button&gt;<br><br>
                                                            &lt;button type="button" class="btn btn-default btn-lg"&gt;<br>
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span class="glyphicon glyphicon-star" aria-hidden="true"&gt;&lt;/span> Star
                                                            <br>&lt;button&gt;
                                                        </span>
                                                    </div>
                                                    <p style="margin: 10px 0;">An icon used in an alert to convey that it's an error message, with additional .sr-only text to convey this hint to users of assistive technologies.</p>
                                                    <div class="alert error-message">
                                                        <i class="glyphicon glyphicon-exclamation-sign"></i> Enter a valid email address
                                                    </div>
                                                    Copy
                                                    <div class="frame-copy">
                                                        <span>&lt;div class="alert alert-danger" role="alert"&gt;<br>
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"&gt;&lt;/span><br>
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span class="sr-only">Error:&lt;/span> Star<br>
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter a valid email address
                                                            <br>&lt;/div&gt;
                                                        </span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <footer>
                        Gentelella - Bootstrap Admin Template by
                        <a href="#"> Colorlib</a>
                    </footer>
                </div>
                <div id="back-to-top"><i class="fa fa-chevron-up"></i></div>
            </div>
        </div>
    </body>
</html>