<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>c2_campcode</title>
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

<!-- using header from header.php -->
<body>
    <?php require_once 'header.php'; ?>
    <div class="main">
      <?php
      require_once 'admin/backend/config.php';
      ?>

      <!-- zorgt dat de klok refreshed -->
      <script type="text/javascript">
        function display_c() {
          var refresh = 1000; // zorgt dat die elke milli seconde refreshed
          mytime = setTimeout('display_ct()', refresh)
        }

// script voor de klok
    function display_ct() {
      var x = new Date()
      var x1 = x.getDate() + "/" + (x.getMonth() + 1) + "/" + x.getFullYear();
      x1 = x1 + " - " + x.getHours() + ":" + x.getMinutes() + ":" + x.getSeconds();
      document.getElementById('ct').innerHTML = x1;
      display_c();
    }
  </script>
  <!-- laat de klok op de pagina zien -->
  <div class="tijd">
    <body onload=display_ct();>
      <span id='ct'></span>
  </div>
  <!-- Add your site or application content here -->

  <!-- img met links naar hun pagina's-->
  <div class="Home-links">
    <div class="links">
      <a href="SongList.php"><img src="img/songs.jpeg" alt="liedjes"><p>Liedjes</p></a>
    </div>
    <div class="links">
      <a href="ToolList.php"><img src="img/tools.jpeg" alt="gereedschap"><p>Gereedschap</p></a>
    </div>
    <div class="links">
      <a href="FilmList.php"><img src="img/films.jpeg" alt="films"><p>Films</p></a>
    </div>
    <div class="links">
      <a href="BookList.php"><img src="img/book.jpeg" alt="boeken"><p>Boeken</p></a>
      </div>
      <div class="links">
      <a href="ActorList.php"><img src="img/actors.jpg" alt="acteurs"><p>Acteurs</p></a>
    </div>
    <div class="links">
      <a href="Drinks.php"><img src="img/drinks.jpeg" alt="drinks"><p>Dranken</p></a>
    </div>
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
    </div>
    <!-- roept naar footer.php -->
    <?php include_once 'footer.php'; ?>

</body>

</html>
