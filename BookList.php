<!doctype html>
<html lang="nl">

<head>
    <title>Song Lijst</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@400;600;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/main.css">
    <link rel="icon" href="<?php echo $base_url; ?>/favicon.ico" type="image/x-icon" />
</head>

<body>
    <!--hier begint het query om de data op te roepen-->
    <?php
    require_once 'admin/backend/conn.php';
    $query = "SELECT * FROM books";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $books = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <!--hier eindigt het query om de data op te roepen-->
    <?php require_once 'header.php'; ?>
    <div class="main">
             <!--hier word de data in een leesbaar formaat gezet-->
        <div class="container_content">
            <main>
                <div class="Content">
                <?php foreach ($books as $book){ ?>
                        <div class="Books">
                            <a href="<?php echo $base_url."./boeken/index.php?id=".$book['id']; ?>"><h2 class="name"><?php echo $book['name']; ?></h2></a>
                        </div>
                    <?php } ?>
                </div>
                <p>Een boek in traditionele zin is een samengevoegde hoeveelheid papier met tekst, afbeeldingen of allebei. Daarnaast wordt met de term de betreffende informatie, of een soortgelijke verzameling informatie, aangeduid ('een boek schrijven', 'een boek downloaden').<br> Het woord 'boek' is vermoedelijk afkomstig van het Germaanse woord voor beuk, boche. De omslagen van de eerste boeken werden namelijk gemaakt van een rechthoekig stuk (beuken)hout. Het Griekse woord biblia (boeken) is het meervoud van biblion dat oorspronkelijk 'papyrusje' betekende, het materiaal waarop in de oudheid meestal werd geschreven, en later werd gebruikt als aanduiding van papier, geschrift en boek(rol). </p>
            </main>
            <?php require_once 'footer.php'; ?>
        </div>
        <!--tot hier word de data in een leesbaar formaat gezet-->
    </div>

</body>

</html>
