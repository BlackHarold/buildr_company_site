<meta http-equiv='refresh' content='6; url=https://teh-dozor.ru'>
<meta charset="UTF-8" />

<?php

if (!empty($_POST['name'])){
}

if (isset($_POST['name'])) {$name = $_POST['name']; if ($name == '') {unset($name);}}
if (isset($_POST['tel'])) {$tel = $_POST['tel']; if ($tel == '') {unset($tel);}}
 
 
if (isset($name) && isset($tel))){
 
$address = "info@teh-dozor.ru";
$message = "Новый запрос от: \r\nИмя: $name \nТелефон: $tel";
$sub = "Content-type:text/plain; charset = UTF-8\r\nFrom:$name";
$send = mail ($address,$sub, $message);
if ($send == 'true')
{echo "Сообщение отправлено успешно, мы Вам перезвоним"}
else {echo "Ошибка, сообщение не отправлено!";}
}
else
{
echo "Вы заполнили не все поля, вернитесь назад и заполните необходимые поля!";
}
?>