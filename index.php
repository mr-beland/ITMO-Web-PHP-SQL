<?php
//echo 'your request: ' . $_SERVER['REQUEST_URI'];

define('ROOT', dirname(__FILE__));
require_once(ROOT . '/components/Router.php');

$router = new Router();
$router->run();

exit;






require_once("__DIR__/../model/ModelIndex.php");
require_once("__DIR__/../controllers/IndexController.php");
//require_once("__DIR__/../controllers/LoginController.php");
require_once("__DIR__/../controllers/UploadController.php");
require_once("__DIR__/../controllers/PageController.php");


try {
    $action = isset($_GET['action']) ? $_GET['action'] : 'controllerPage';
    $action();
} catch (Exception $e) {
    echo "Не задан ";  // уровень отладки кода
}