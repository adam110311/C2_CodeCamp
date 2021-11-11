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
    <!--hier word de data in een leesbaar formaat gezet-->
    <?php
    require_once '../admin/backend/conn.php';
    $query = "SELECT * FROM `content` WHERE contenttype='zaag'";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $contents = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <!--hier eindigt het query om de data op te roepen-->
    <!-- dit roept de header.php op -->
    <?php require_once '../header.php'; ?>
    <div class="main">
        <p class="kruimelpad">home/tools</p>
        <!--hier word de data in een leesbaar formaat gezet-->
        <div class="container_content">
            <main>
                <div class="Content">
                    <?php foreach ($contents as $content){ ?>
                        <div class="Tools">
                            <a href="<?php echo $base_url."/index.php?id=".$content['id']; ?>"><h2 class="name"><?php echo $content['name']; ?></h2></a>
                        </div>
                    <?php } ?>
                </div>
            </main>
            <!-- dit roept footer.php op -->
            <?php require_once '../footer.php'; ?>
        </div>
        <!--tot hier word de data in een leesbaar formaat gezet-->
    </div>
</body>

</html>
