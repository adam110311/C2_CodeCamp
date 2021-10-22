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
    require_once '../admin/backend/conn.php';
    $query = "SELECT * FROM drinks WHERE drink_type='soft_drinks'";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $drinks = $stmt->fetchAll(PDO::FETCH_ASSOC);
  ?>
    <?php require_once '../header.php'; ?>
    <div class="main">
      <div class="container_content">        
            <div class="Contentinfo">
              <?php foreach ($drinks as $drink): ?>
                  <h2 class="name"><?php echo $drink['name'];?></h2>
                <?php endforeach; ?>
            </div>      
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
