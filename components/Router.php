<?php

//autoloader
spl_autoload_register('catch_class');
$arrInclude = [""];

function catch_class($name_class) {
//    $path = str_replace('\\' , '/', $name_class);
    $controllerFile = ROOT . '/controllers/' . $name_class . '.php';
    if (file_exists($controllerFile)) {
        include_once($controllerFile);
    }
}

class Router
{
// массив маршрутов
    private $routes;

    public function __construct() {
        $this->routes = array
        (
            'news' => 'news/index', // actionIndex в NewsController
            'products' => 'product/list', // actionList в ProductController
            'page' => 'page/index',
            'counter' => 'page/counter',
        );
    }

// метод будет принимать управление от фронтконтроллера
    public function run() {
        $uri = $this->getURI();
// 2. Ищем строку запроса($uri) в наших маршрутах в цикле foreach:
        foreach ($this->routes as $uriPattern => $path) {
            if (preg_match("~$uriPattern~", $uri)) {
// 3. определяем какой контроллер и action обрабатывают запрос
                $segments = explode('/', $path);
                $controllerName = ucfirst(array_shift($segments) . 'Controller');
                $actionName = 'action' . ucfirst(array_shift($segments));

                // 5. Создаем объект и вызваем метод (т.е. action)
                $controllerObject = new $controllerName;
                $result = $controllerObject->$actionName();
            }
        }
    }

    private function getURI() {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }
}