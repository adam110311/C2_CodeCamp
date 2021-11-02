<!doctype html>
<html lang="nl">

<head>
    <title>over ons</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <?php require_once "backend/config.php"; ?>
    <link rel="stylesheet" href="<?php echo $baseurl; ?>css/normalize.css">
    <link rel="stylesheet" href="<?php echo $baseurl; ?>css/main.css">
    <link rel="icon" href="<?php echo $baseurl; ?>/favicon.ico" type="image/x-icon" />
</head>

<body>
    <?php require_once 'header.php'; ?>
    <div class="main">
        <div class="overons">
            <h1>over ons</h1>
            <div class="map">
                <a href="https://www.google.nl/maps/place/''s-Hertogenbosch'/@51.7107226,5.2640718,12.26z/data=!4m5!3m4!1s0x47c6ee37ad3edd37:0x400de5a8d1e7c50!8m2!3d51.6978162!4d5.3036748">
                <img src="img/map.PNG" alt="map van den bosch"></a>
            </div>
            <h2>Telefoon: 073-33445566</h2>
            <h2>adres: 's-Hertogenbosch</h2>
        </div>
    </div>   
    <?php require_once 'footer.php'; ?>
</body>

</html>
