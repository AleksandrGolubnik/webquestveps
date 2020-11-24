<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="/img/icon.svg">
  <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link href="/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <title>Web-квест по вепсской культуре</title>
</head>
<body>
<?php require "blocks/header.php"?>
<div class="container mt-4">
  <h1>Форма регистрации команды</h1><br>
  <form action="checkregister.php" method="post">
    <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
    <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
    <input type="text" class="form-control" name="team" id="team" placeholder="Введите название команды"><br>
    <button class="btn btn-success" type="submit">Зарегистрировать</button>
  </form>
</div>
<br>
<?php require "blocks/footer.php"?>
</body>
</html>
