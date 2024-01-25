<?php

// маршруты
return array
(
    'news' => 'news/index', // actionIndex в NewsController
    'products' => 'product/list', // actionList в ProductController
    '' => 'page/index',
    'counter' => 'page/counter',
    'auth' => 'auth/checkPass',
    'question' => 'addQuestion/index',
    'add-question' => 'addQuestion/add',
);