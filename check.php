<?php
  
  $Email=$_POST['Email'];
  $message=$_POST['message'];
  $error='';
  if(trim($Email)=='')
    $error='Введите ваш email';
  else if(trim($message) == '')
    $error='Введите ваш вопрос';
  if($error != '') {
    echo $error;
    exit;
  }
  $subject = "=?utf-8?B?".base64_encode("Вопрос")."?=";
  $headers = "From: $Email\r\nReply-to: $Email\r\nContent-type: text/html; charset=utf-8\r\n";
  mail('alexsander.golubnik@gmail.com', $subject, $message, $headers);
  header('Location: /about.php');
?>
