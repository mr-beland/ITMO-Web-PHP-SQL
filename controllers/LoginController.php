<?php

require_once "__DIR__/../model/ModelIndex.php";
require_once "__DIR__/../view/View.php";

function controllerLogin()
{
    $res = model();
    echo render($res, 'form_login.tpl');
}