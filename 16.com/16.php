<!DOCTYPE html>

<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/swiper.min.css" rel="stylesheet" type="text/css" />
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/swiper.min.js" type="text/javascript"></script>

    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/type-16.less', 'css/type-16.css');
    ?>
    <link href="css/type-16.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <body>
        <?php include 'demo.php'; ?>
    </body>
   <script>
        var swiper = $('.reviews-section');
        $swiper.each(function(){
            var $this = $(this);
            $this.swiper(
              //options here
            );
        })
  </script>
</html>