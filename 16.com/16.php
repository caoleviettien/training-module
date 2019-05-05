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
        <?php include '16-content.php'; ?>
    </body>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
       <script>
            var galleryThumbs = new Swiper('.gallery-thumbs', {
              spaceBetween: 3,
              slidesPerView: 3,
              freeMode: true,
              watchSlidesVisibility: true,
              watchSlidesProgress: true,
            });
            var galleryTop = new Swiper('.gallery-top', {
              spaceBetween: 3,
              navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
              },
              thumbs: {
                swiper: galleryThumbs
              }
            });
      </script>
</html>