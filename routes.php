<?php
// todo: Добавили роутер counter для вызова контроллера PageController метода actionCounter
return array
(
    'news' => 'news/index',        // actionIndex в NewsController
    'products' => 'product/list',  // actionList в ProductController
    'page' => 'page/index',
    'counter' => 'page/counter'
);