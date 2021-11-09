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
  <!--hier begint het query om de data op te roepen-->

  <?php
    $id = $_GET['id'];
    require_once '../admin/backend/conn.php';
    $query = "SELECT * FROM content WHERE id = :id";
    $statement = $conn->prepare($query);
    $statement->execute([":id" => $id]);
    $contents = $statement->fetch(PDO::FETCH_ASSOC);
  ?>
  <!--hier eindigt het query om de data op te roepen-->
  <!-- dit roept de header.php op -->
    <?php require_once '../header.php'; ?>
    <div class="main">
      <p class="kruimelpad">home/tools</p>
      <div class="container_content">
        <!-- met deze lijn code word de achtergrond kleur aangepast als je admin bent  -->
          <main <?php if($contents['colorcode']) echo "style='background: " . str_replace("\'", "\\\'", str_replace('\"', "\\\"", $contents['colorcode'])) . ";'"; ?>>
              <div class="Contentinfo">
                <!-- laat de content uit de database zien -->
                <?php echo "<h1 class='title'>".$contents['name']."</h1>";
                echo '<img src="../img/'.$_GET['id'].'-content.jpg" />';
                  echo "<p>".nl2br( $contents['description[songtekst]'])."</p>";?><!---->
                <?php
                // zorgt er voor dat er regels tussen komen
                if($contents['actors']){
                  echo "<ul>";
                  foreach(explode(", ", $contents['actors']) as $actor){
                  $query = "SELECT * FROM content WHERE id = :id";
                  $statement = $conn->prepare($query);
                  $statement->execute([":id" => $actor]);
                  $contents = $statement->fetch(PDO::FETCH_ASSOC);
                  }}?>
              </div>
              <!-- met deze lijn code word de achtergrond kleur aangepast als je admin bent  -->
              <?php if (isset($_SESSION['admin']) && $_SESSION['admin']){ ?>
                <a href="../admin/edit.php?id=<?php echo $id; ?>">Kleur aanpassen</a>
              <?php } ?>
          </main>
          <!-- roept de footer.php op -->
          <?php require_once '../footer.php'; ?>
      </div>
    </div>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
