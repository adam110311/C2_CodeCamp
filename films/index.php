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
    <div class="container_content">
        <main <?php if($contents['colorcode']) echo "style='background: " . str_replace("\'", "\\\'", str_replace('\"', "\\\"", $contents['colorcode'])) . ";'"; ?>>
            <div class="Contentinfo">
                <?php echo "<h1 class='title'>".$contents['name']."</h1>";
                echo $contents['description[songtekst]'];//ik vind het nog steeds stom dat het zo heet
                if($contents['actors']){
                  echo "<ul>";
                  foreach(explode(", ", $contents['actors']) as $actor){?>
                  <?php 
                  $query = "SELECT * FROM content WHERE id = :id";
                  $statement = $conn->prepare($query);
                  $statement->execute([":id" => $actor]);
                  $contents = $statement->fetch(PDO::FETCH_ASSOC);
                  ?>
                    <li><a href="<?php echo($base_url."/films/acteur.php?id=".$actor) ?>"><?php echo($contents['name']); ?></a></li>
                  <?php } ?>
                  </ul>
                <?php } ?>
            </div>
        </main>
        <?php require_once '../footer.php'; ?>
    </div>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
