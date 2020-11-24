<header>
  <a href="" class="logo">Web-квест по вепcской культуре</a>
  <nav>
      <ul class="topmenu">
        <li><a href="/">Главная</a></li>
        <li><a href="" class="submenu-link">Задания</a>
          <ul class="submenu">
            <li><a href="/task1.php">Задание 1</a></li>
            <li><a href="/task2.php">Задание 2</a></li>
            <li><a href="/task3.php">Задание 3</a></li>
            <li><a href="/task4.php">Задание 4</a></li>
            <li><a href="/task5.php">Задание 5</a></li>
          </ul>
        </li>
        <li><a href="/kriteri.php">Критерии оценивания</a></li>
        <li><a href="/about.php">Контакты</a></li>
      </ul>
    </nav>

  <?php
  if($_COOKIE['user'] == ''):
   ?>
  <a class="btn btn-outline-primary" href="/authorization.php">Войти</a>
  <a class="btn btn-outline-primary" href="/registration.php">Регистрация</a>
<?php else: ?>
  <p>Привет <?=$_COOKIE['user']?>. Для выхода нажмите на <a class="btn btn-outline-primary" href="/exit.php">Выход</a></p>
<?php endif;?>
</div>
</header>
<br>
