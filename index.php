<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">

  <meta name="theme-color" content="#fafafa">
</head>

<body>
<?php require_once 'header.php'; ?>

<?php
$date = date("Y-m-d H:i:s");
echo $date;
?>

  <!-- Add your site or application content here -->
  <div class="content">
    <a href="SongList.php"><img src="img/BingBong_Theurum.PNG" alt="bing bong theurum"></a>
    <a href="ToolList.php"><img src="img/BingBong_Theurum.PNG" alt="bing bong theurum"></a>
    <a href="FilmList.php"><img src="img/BingBong_Theurum.PNG" alt="bing bong theurum"></a>
    <a href="BookList.php"><img src="img/BingBong_Theurum.PNG" alt="bing bong theurum"></a>
  </div>
  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
  <?php include_once 'footer.php'; ?>
</body>

</html>
