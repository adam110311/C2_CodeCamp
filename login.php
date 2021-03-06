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
    <!-- roept naar de header.php toe -->
    <?php require_once 'header.php';?>
    <div class="main">
        <!-- laat kruimelpad zien op de pagina -->
        <p class="kruimelpad">home/</p>

        <?php
        // checkt of het inloggen wel goedgaat
        if(isset($_GET['msg']))
        {
            echo "<div class='msg'>" . $_GET['msg'] . "</div>";
        }
        ?>

        <!-- hij laat nu 3 input types zien voor je gebruikersnaam/wachtwoord/en de registeer knop -->
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
                        <a><button onclick="window.location.href = 'signup.php';return false" style="margin-top: 5px;width: 100%;">Registeer</button></a>
                    </div>
                </form>
            </section>
        </div>
    </div>
    <!-- roept footer.php op -->
    <?php require_once 'footer.php'; ?>
</body>
