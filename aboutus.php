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
                <a href="https://www.google.nl/maps/place/Koestraat+1,+5223+AG+'s-Hertogenbosch/@51.6973552,5.2935823,15z/data=!4m13!1m7!3m6!1s0x47c6ee66bc48c005:0x4dddc528356e3d4f!2sKoestraat+1,+5223+AG+'s-Hertogenbosch!3b1!8m2!3d51.6973624!4d5.2935999!3m4!1s0x47c6ee66bc48c005:0x4dddc528356e3d4f!8m2!3d51.6973624!4d5.2935999">
                <img src="img/map.PNG" alt="map van den bosch"></a>
            </div>
            <h2>Telefoon: 073-33445566</h2>
            <h2>adres: Koestraat 1 in Den Bosch</h2>
        </div>
    </div>   
    <?php require_once 'footer.php'; ?>
</body>

</html>
