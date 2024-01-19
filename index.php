<?php
define('ROOT', dirname(__FILE__));
ini_set('display_errors', 1);
error_reporting(E_ALL);


require_once (ROOT . '/components/Router.php');

// - создаем экземпляр класса Router
$router = new Router();

// и запускаем метод run(), тем самым, передав на него управление
$router->run();


//echo 'your request: ' . $_SERVER['REQUEST_URI'];




exit;






$path = './session';
session_save_path($path);
session_start();
require_once "./model/ModelIndex.php";
//require_once "./controllers/ControllerLogin.php";
require_once "./controllers/PageController.php";

// echo "Stage1";

// try {
//    $action =  isset($_GET['action'])? $_GET['action']  : 'controllerPage';
//    $action();
// } catch (Exception $e) {
//     echo "Не задан ";  // уровень отладки кода
// }

// echo "Stage4";  // уровень отладки кода