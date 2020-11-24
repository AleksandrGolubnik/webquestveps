<?php
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

$pass = md5($pass."fsdfds");
$mysql = new mysqli('localhost', 'root', '94Baksizu-', 'register-bd');
$result = $mysql -> query("SELECT * FROM `users` WHERE `login` = '$login' AND  `pass` = '$pass'");
$user = $result->fetch_assoc();
if(count($user) == 0) {
  echo "Неверный логин или пароль";
  exit();
}

setcookie('user', $user['team'], time() + 3600, "/");
$mysql->close();

header('Location: /');
?>
