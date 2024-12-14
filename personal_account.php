<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="../../css/header_main.css">
    <link rel="stylesheet" href="../../css/nav_main.css">
    <link rel="stylesheet" href="../../css/personal_account.css">
    <link rel="stylesheet" href="../../css/footer_main.css">
</head>
<body>
    <?php
    include "./header.php";
    include "./nav.php";
    ?>
    <main class="container_account">
    <div class="avatar">
        <img src='../../img/account/avatar.png' alt="">
    </div>
    <div class="content">
        <div class="name_1">
            <p>Ваше имя:</p>
        </div>
        <div class="e-mail">
            <p>Ваш e-mail:</p>
        </div>
        <div class="number">
            Ваш номер:
        </div>
        <div class="id">
            Идентификационный номер
        </div>
    </div>
</main> 
    <?php
    include "./footer.php";
    ?>
</body>
</html>