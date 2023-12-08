<?php
// Файл аутентификации
//todo: Дописать загрузку пользователей из файла
$filename = 'password.txt';
$_login = 'admin';
$_passwd = '123';
var_dump($_POST['login']);

$login = $_POST['login'] ;
$passwd = $_POST['passwd'];

if ($_login === $login  && $_passwd === $passwd ) {
    echo "Вы прошли аутентификацию!";
}  else {
    header("HTTP/1.1 403 Forbidden ");
}

$content = "$login:" . "$passwd";
file_put_contents($filename, $content);

