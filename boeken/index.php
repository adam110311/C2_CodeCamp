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

  <?php
  $id = $_GET['id'];
  require_once '../admin/backend/conn.php';
  $query = "SELECT * FROM content WHERE id = $id";
  $statement = $conn->prepare($query);
  $statement->execute();
  $contents = $statement->fetch(PDO::FETCH_ASSOC);
  ?>
  <style>
    .main{
      background: <?php echo str_replace("\'", "\\\'", str_replace('\"', "\\\"", $contents['colorcode'])) ?>;
    }
  </style>
</head>

<body>


  <!-- Add your site or application content here -->
  <!--hier eindigt het query om de data op te roepen-->
  <!-- dit roept de header.php op -->
    <?php require_once '../header.php'; ?>
    <div class="main">
      <p class="kruimelpad">home/boeken</p>
      <div class="container_content">

        <main>
          <!-- laat de content uit de database zien -->
          <div class="Contentinfo">
              <?php echo "<h1 class='title'>".$books['name']."</h1>";
              echo '<img src="../img/'.$_GET['id'].'-book.jpg" />';
              echo "<h3>".$books['description']."</h3>";
              echo "<h4>".$books['page_count']."</h4>";
              echo $books['author'];?>
          </div>
          <!-- met deze lijn code word de achtergrond kleur aangepast als je admin bent  -->
          <div class ="kleur_aanpassen">
          <?php if (isset($_SESSION['admin']) && $_SESSION['admin']){ ?>
            <a href="../admin/edit.php?id=<?php echo $ID; ?>">Kleur aanpassen</a>
          </div>

          <!-- hier onder staat een form om de beschrijving van de boeken aan te passen -->
            <form action="../admin/backend/descriptionController.php" method="POST">
              <div class="form-group">
                <textarea name="description" placeholder="nieuwe descriptie hier"></textarea>
              </div>
                <input type="hidden" name="action" value="update">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="submit" value="aanpassen">
            </form>
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
