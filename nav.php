<nav>
    <div class="nav conatainer_1">
        <div class="links">
              <nav class='navbar container_1'>
                    <div class='nav'>
                          <div class='nav-item'>
                                <?php
                                if (isset($_SESSION['is_auth'])) {
                                      if ($_SESSION['is_auth']) {
                                            echo "<a href='#'>Личный кабинет</a>";
                                      }
                                } else {
                                      echo "<a href='./registr.php'>Вход/Регистрация</a>";
                                }
                                ?>

                          </div>
                          <div class='nav-item'>
                                <a href='./basket.php'>Корзина</a>
                          </div>
                          <div class='nav-item'>
                                <a href='./history_order.php'>История заказов</a>
                          </div>
                          <div class='nav-item'>
                                <a href='./offers.php'>Скидки и акции</a>
                          </div>
                          <div class='nav-item'>
                                <a href='#'>
                                      <form action="#">
                                            <input type="search" id="search" placeholder="Поиск..." />
                                            <button type="submit">Найти</button>
                                      </form>
                                </a>
                          </div>
                          <div class="nav-item">
                              <a href="../../index.php">Главная страница</a>
                          </div>
                    </div>
              </nav>
        </div>
      </div>
</nav>

