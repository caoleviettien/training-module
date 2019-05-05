<!DOCTYPE html>
<html style="background-color: #f3f3f4;">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-14.less', 'css/type-14.css');
        ?>
        <link href="css/type-14.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <!-- include content -->
        <?php include '14-content.php'; ?>
        <script src="js/14.js"></script>
    </body>
    
</html>