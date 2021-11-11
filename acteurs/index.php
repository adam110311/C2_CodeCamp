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
  <?php include_once "../backend/config.php";?>
  <link rel="stylesheet" href="<?php echo $baseurl; ?>css/normalize.css">
  <link rel="stylesheet" href="<?php echo $baseurl; ?>css/main.css">

  <meta name="theme-color" content="#fafafa">
</head>

<body>


  <!-- Add your site or application content here -->

  <?php
    $id = $_GET['id'];
    require_once '../admin/backend/conn.php';
    $query = "SELECT * FROM content WHERE id = :id";
    $statement = $conn->prepare($query);
    $statement->execute([":id" => $id]);
    $contents = $statement->fetch(PDO::FETCH_ASSOC);
  ?>
    <?php require_once '../header.php'; ?>
    <div class="main">      
      <p class="kruimelpad">home/films/acteurs</p>
      <div class="container_content">
          <main >
              <div class="Contentinfo"> 
                  <?php echo "<h1 class='title'>".$contents['name']."</h1>";
                  echo '<img src="../img/'.$_GET['id'].'-content.jpg" />';
                  echo $contents['description[songtekst]'];?>
              </div>
              <div class ="kleur_aanpassen">
              <?php if (isset($_SESSION['admin']) && $_SESSION['admin']){ ?>
                <a href="../admin/edit.php?id=<?php echo $id; ?>">Kleur aanpassen</a>
              </div>
              <?php } ?>
          </main>
          <?php require_once '../footer.php'; ?>
      </div>
      <div class="websites">
        <a href="https://www.imdb.com/?ref_=nv_home"><h2>imdb</h2></a>
        <a href="https://www.themovies.nl/"><h2>movies.nl</h2></a>
        <a href="https://www.videoland.com/nl/"><h2>videoland</h2></a>
      </div>
    </div>
    <?php require_once '../footer.php'; ?>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
