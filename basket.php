<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Корзина</title>
    <link rel="stylesheet" href="../../css/header_main.css">
    <link rel="stylesheet" href="../../css/nav_main.css">
    <link rel="stylesheet" href="../../css/basket.css">
    <link rel="stylesheet" href="../../css/footer_main.css">
</head>
<body>
    <?php
    include "./header.php";
    include "./nav.php";
    ?>
    <div class="content">
    <div class="text">
        <h1>Ваша корзина пуста..</h1>
    </div>
    <div class="button">
        <a href="../../index.php"><button type="submit">Добавить</button></a>
    </div>
    </div>
    <?php
    include "./footer.php";
    ?>
</body>
</html>