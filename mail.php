<?php
$to = "ya.yarochkin@yandex.ru"; // емайл получателя данных из формы
$tema = "клиент PHDSTD"; // тема полученного емайла
$message = "Ваше имя: ".$_POST['clientname']."<br>";//присвоить переменной значение, полученное из формы name=name
  $message .= "E-mail: ".$_POST['clientmail']."<br>"; //полученное из формы name=email
$message .= "Номер телефона: ".$_POST['clienttelephone']."<br>"; //полученное из формы name=phone
$headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
mail($to, $tema,$message, $headers); //отправляет получателю на емайл значения переменных

?>