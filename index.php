<?php
$path = './session';
session_save_path($path);
session_start();
require_once "./model/ModelIndex.php";
//require_once "./controller/ControllerLogin.php";
require_once "./controller/ControllerPage.php";

echo "Stage1";

try {
   $action =  isset($_GET['action'])? $_GET['action']  : 'controllerPage';
   $action();
} catch (Exception $e) {
    echo "Не задан ";  // уровень отладки кода
}

echo "Stage4";  // уровень отладки кода