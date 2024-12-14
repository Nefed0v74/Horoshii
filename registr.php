<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход/Регистрация</title>
    <link rel="stylesheet" href="../../css/header_main.css">
    <link rel="stylesheet" href="../../css/nav_main.css">
    <link rel="stylesheet" href="../../css/registr.css">
    <link rel="stylesheet" href="../../css/footer_main.css">
</head>
<body>
    <?php
    include "./header.php";
    include "./nav.php";
    ?>
<main class="container_registr">
    <div class="avatar">
        <img src='../../img/account/avatar.png' alt="">
    </div>
    <form action="./personal_account.php" method="GET">
        <div class="content">
            <div class="name">
                <input type="text" placeholder="Введите имя" />
            </div>
            <div class="last_name">
                <input type="text" placeholder="Введите фамилию" />
            </div>
            <div class="e-mail">
                <input type="text" placeholder="Введите адрес электронной почты" />
            </div>
            <div class="number">
                <input type="text" placeholder="Введите номер телефона" />
            </div>
            <div class="password">
                <input type="password" placeholder="Придумайте пароль" />
            </div>

            <div class="id">
                Идентификационный номер
            </div>
            <div class="confirmation">
                <button type="submit">Регистрация</button>
            </div>
        </div>
    </form>
</main>
<?php
include "./footer.php"
?>
</body>
</html>