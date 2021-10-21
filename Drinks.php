<!doctype html>
<html lang="nl">

<head>
    <title>Song Lijst</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <?php require_once "backend/config.php"; ?>
    <link rel="stylesheet" href="<?php echo $baseurl; ?>css/normalize.css">
    <link rel="stylesheet" href="<?php echo $baseurl; ?>css/main.css">
    <link rel="icon" href="<?php echo $baseurl; ?>/favicon.ico" type="image/x-icon" />
</head>

<body>
    <!--hier begint het query om de data op te roepen-->

    <?php
    require_once 'admin/backend/conn.php';
    $query = "SELECT * FROM drinks";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $drinks = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <!--hier eindigt het query om de data op te roepen-->
    <?php require_once 'header.php'; ?>
    <!--hier word de data in een leesbaar formaat gezet-->
    <div class="container_content">
        <main>
            <div class="Content">
                <?php foreach ($drinks as $drink): ?>
                <div class="SongTexts">
                    <?php if($drink['name'] == "koffee"){
                        ?><a href="ActorList.php"><h2 class="name"><?php echo $drink['name'];?></h2></a><?php     
                    } else{ 
                        ?><h2 class="name"><?php echo $drink['name'];?></h2><?php
                    }?>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="drinks">
                <a href="drinks/WarmDrinks.php"><h2>warme dranken</h2></a>
                <a href="drinks/SoftDrinks.php"><h2>frisdranks</h2></a>
            </div>
        </main>

    </div>
    <!--tot hier word de data in een leesbaar formaat gezet-->
    <?php require_once 'footer.php'; ?>
</body>

</html>