<!DOCTYPE html>
<html lang="en">
<head>
  <title>9</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <script src="js/touchSwipe.min.js" type="text/javascript"></script>
  <script src="js/myjs.js" type="text/javascript"></script>

  <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/type-9.less', 'css/type-9.css');
  ?>

  <link href="css/type-9.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <?php include "9-content.php"; ?>
</body>
</html>