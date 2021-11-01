<!doctype html>

<?php
require_once 'admin/backend/config.php';
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

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">

  <meta name="theme-color" content="#fafafa">


</head>
<body>
    <?php require_once 'header.php';?>
    <div class="main">
        <?php
        if(isset($_GET['msg']))
        {
            echo "<div class='msg'>" . $_GET['msg'] . "</div>";
        }
        ?>
        <div class="login">
            <section class="login-form">
                <h2>inloggen</h2>
                <form action="admin/backend/loginController.php" method="POST">
                    <div class="form-group">
                        <label for="username">Gebruikersnaam:</label>
                        <input type="text" name="username" placeholder="username">
                    </div>
                    <div class="form-group">
                        <label for="username">wachtwoord:</label>
                        <input type="password" name="password" placeholder="password">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Login">
                    </div>
                    <?php
                if(!isset($_SESSION['user_id']))
                {
                  ?>
                  <button href="signup.php">registeer</button>
                  <?php
                }
                ?>
                </form>
            </section>
        </div>
    </div>
    <?php require_once 'footer.php'; ?>
</body>
