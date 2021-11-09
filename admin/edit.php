<!doctype html>

<?php
require_once 'backend/config.php';
?>
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

  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../css/main.css">

  <meta name="theme-color" content="#fafafa">


</head>
<body>
    <?php require_once '../header.php';

    $id = $_GET['id'];
    require_once 'backend/conn.php';
    $query = "SELECT * FROM content WHERE id = :id";
    $statement = $conn->prepare($query);
    $statement->execute([":id" => $id]);
    $contents = $statement->fetch(PDO::FETCH_ASSOC);
    if(isset($_GET['msg']))
    {
        echo "<div class='msg'>" . $_GET['msg'] . "</div>";
    }
    ?>
    <div class="login">
        <section class="login-form">
            <h2><?php echo $contents['name']; ?></h2><!--laat de naam zien van de post-->
            <form action="backend/setcolorcode.php" method="POST">
                <div class="form-group">
                    <label for="color">Kleur:</label>
                    <input type="text" name="color" placeholder="color" value="<?php echo $contents['colorcode']; ?>"><!--kleur aanpas textblok-->
                </div>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="form-group">
                    <input type="submit" value="Kleur aanpassen">
                </div>

            </form>
        </section>
    </div>
    <?php require_once '../footer.php'; ?>
</body>
