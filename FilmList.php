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

    <?php
    require_once 'admin/backend/conn.php';
    $query = "SELECT * FROM content WHERE contenttype='movie'";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $contents = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <?php require_once 'header.php'; ?>
    <div class="container_content">
        <main>
            <div class="Content">
                <?php foreach ($contents as $content): ?>
                <div class="Film">
                  <h2 class="naam"><?php echo $content['name']?></h2>
                  <a href="<?php echo $base_url."/FilmList/index.php?id=".$content['id']; ?>">description</a>
                </div>
                <?php endforeach; ?>
            </div>
        </main>
        <?php require_once 'footer.php'; ?>
    </div>

</body>

</html>
