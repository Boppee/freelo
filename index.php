<?php
  require_once 'script/php/load.php';
  $loader = new loader();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>

    <link rel="stylesheet" href="css/master.css">

    <title>FREELO - <?php echo ucfirst($loader->page) ?></title>

  </head>
  <?php
    require_once 'script/javascript/load.php';
  ?>
  <body>
    <?php
      require_once 'pages/'.$loader->page.'/index.php';
    ?>
  </body>
</html>
