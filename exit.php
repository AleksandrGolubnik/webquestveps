<?php
setcookie('user', $user['team'], time() - 3600, "/");
header('Location: /');

 ?>
