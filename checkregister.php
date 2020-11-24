<?php
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
$team = filter_var(trim($_POST['team']), FILTER_SANITIZE_STRING);

if(mb_strlen($login) < 5 || mb_strlen($login) > 90) {
  echo "Недопустимая длина логина";
  exit();
} else if(mb_strlen($team) < 3 || mb_strlen($team) > 1000) {
  echo "Недопустимая длина имени команды";
  exit();
} else if(mb_strlen($pass) < 3 || mb_strlen($pass) > 50) {
  echo "Недопустимая длина пароля (от 3 до 50 символов)";
  exit();
}
$pass = md5($pass."fsdfds");
$mysql = new mysqli('localhost', 'root', '94Baksizu-', 'register-bd');
$mysql -> query("INSERT INTO `users` (`login`, `pass`, `team`) VALUES('$login', '$pass', '$team')");
$mysql->close();

header('Location: /');

?>
