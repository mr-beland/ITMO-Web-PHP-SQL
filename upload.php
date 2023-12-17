<?php
$uploads_dir = './upload';
var_dump($_FILES);
echo "Загрузка прошла успешно";

move_uploaded_file ( $_FILES['userfile']['tmp_name'] , $uploads_dir . "/" .  $_FILES['user_file']['name']);