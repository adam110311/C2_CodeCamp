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
<body>
    <?php require_once 'header.php'; ?>
    <div class="main">
        <p class="kruimelpad">home/login</p>
        <div class="login">
            <section class="signup-form">
                <h2>registreren</h2>
                <form action="admin/backend/signupController.php" method="POST">
                    <div class="form-group">
                        <label for="username">Gebruikersnaam:</label>
                        <input type="text" name="username" placeholder="username">
                    </div>
                    <div class="form-group">
                        <label for="email">email:</label>
                        <input type="text" name="email" placeholder="email">
                    </div>
                    <div class="form-group">
                        <label for="wachtwoord">wachtwoord:</label>
                        <input type="password" name="password" placeholder="password">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit">registreer</button>
                    </div>                
                </form>
            </section>
        </div>
    </div>
        <?php require_once 'footer.php'; ?>
</body>