<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мускатный орех</title>
    <link rel="stylesheet" href="../../css/header_main.css">
    <link rel="stylesheet" href="../../css/nav_main.css">
    <link rel="stylesheet" href="../../css/product_card.css">
    <link rel="stylesheet" href="../../css/footer_main.css">
</head>
<body>
    <?php
    include "./header.php";
    include "./nav.php";
    ?>
    <main>
    <div class="main conatainer_product">
        <div class="img">
            <img src="./img/seasonings/nutmeg_opex.jfif" alt="">
        </div>
        <div class="text">
            <p>
                <h3>Мускатный орех</h3>
            </p>
            <p>
                <h4>Урожай 2015 года<br>
                    Вес 1 кг<br>
                    Производитель: Арава экспорт гроуэрс ЛТД <br>
                    Адрес производителя: Моди'ин ул.Хама айан 2, 7171102, Израиль<br>
                    Экспортер: Арава экспорт гроуэрс ЛТД <br>
                    Импортер: ООО "ТД Хороший" <br>
                    Адрес импортера: Россия, г.Нарьян-Мар, ул. 60 лет СССР, д. <br>
                </h4>
                <h1>1495 р/кг</h1>
            </p>
        </div>
        <div class="col but">
            <input type="text" id="quantity" placeholder="Введите количество">
            <button type="text" id="confirmButton">Подтвердить</button>
        </div>
    </div>
</main>

<div id="myModal" class="modal">
  <div id="myModal-content">
    <span class="close">&times;</span>
    <p>Ваш заказ:</p>
    <p id="orderSummary"></p> <button id="closeModal">Закрыть</button>
  </div>
</div>

<script>
// Получаем элементы
const confirmButton = document.getElementById('confirmButton');
const quantityInput = document.getElementById('quantity');
const modal = document.getElementById("myModal");
const modalContent = document.getElementById("myModal-content");
const closeButton = document.getElementsByClassName("close")[0];
const orderSummary = document.getElementById("orderSummary");
const closeModalButton = document.getElementById("closeModal");


// Функция открытия модального окна
confirmButton.addEventListener('click', () => {
    const quantity = quantityInput.value;
    if (quantity > 0) {
        orderSummary.textContent = `Мускатный орех - ${quantity} кг.  Итого: ${quantity * 1495} руб.  Успешно добавлено в корзину!`;
        modal.style.display = "block";
    } else {
        alert('Введите количество');
    }
});


// Функция закрытия модального окна
closeButton.onclick = function() {
  modal.style.display = "none";
}

closeModalButton.onclick = function() {
  modal.style.display = "none";
}

// Закрытие модального окна при клике вне модального окна
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<?php
include "./footer.php";
?>
</body>
</html>