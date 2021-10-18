<?php session_start(); ?>
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

  <!-- Add your site or application content here -->
<header>
    <nav>
        <div class="wrapper">
            <!-- header with link and making sure you can go back using the header-->
            <div class="nav-links">
              <?php require_once "backend/config.php"; ?>
                <a href="<?php echo $baseurl; ?>index.php">Home</a>
                <a href="<?php echo $baseurl; ?>SongList.php">Songs</a>
                <a href="<?php echo $baseurl; ?>FilmList.php">Films</a>
                <a href="<?php echo $baseurl; ?>ToolList.php">Tools</a>
                <a href="<?php echo $baseurl; ?>ActorList.php">Acteurs</a>     
                <a href="<?php echo $baseurl; ?>Drinks.php">Dranken</a>                        
                <?php
                if(isset($_SESSION['user_id']))
                {
                  ?>
                  <a href="<?php echo $baseurl; ?>logout.php">logout</a>
                  <?php
                }
                ?>
                <?php
                if(!isset($_SESSION['user_id']))
                {
                  ?>
                  <a href="<?php echo $baseurl; ?>login.php">login</a>
                  <a href="signup.php">registeer</a>
                  <?php
                }
                ?>
            </div>
        </div>
    </nav>
</header>

  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
