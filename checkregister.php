<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
$team = filter_var(trim($_POST['team']), FILTER_SANITIZE_STRING);


$pass = md5($pass."fsdfds");
$url=parse_url(getenv("mysql://bdf7379cdd2da2:3225ad60@eu-cdbr-west-03.cleardb.net/heroku_65b88f02bf3374f?reconnect=true"));

$server = $url["eu-cdbr-west-03.cleardb.net"];
$username = $url["bdf7379cdd2da2"];
$password = $url["3225ad60"];
$db = substr($url["heroku_65b88f02bf3374f"],1);

$mysql=new mysqli($server, $username, $password, $db);

$mysql -> query("INSERT INTO `users` (`login`, `pass`, `team`) VALUES('$login', '$pass', '$team')");
$mysql->close();

header('Location: /');

?>
