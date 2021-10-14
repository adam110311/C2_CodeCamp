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

    <section class="signup-form">
        <h2>registreren</h2>
        <form action="admin/backend/signupController.php" method="POST">
            <input type="text" name="username" placeholder="username">
            <input type="text" name="email" placeholder="email">
            <input type="password" name="password" placeholder="password">
            <button type="submit" name="submit">registreer</button>
        </form>
    </section>
    <?php require_once 'footer.php'; ?>
</body>