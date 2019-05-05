<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="stylesheet" href="fonts/icomoon/style.css""/>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-26.less', 'css/type-26.css');
        ?>
        <link href="css/type-26.css" rel="stylesheet" type="text/css" />
    </head>
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
        <?php include '26-content.php' ?>

        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="js/26.js" type="text/javascript"></script>    
    </body>
</html>