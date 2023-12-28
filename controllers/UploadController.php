<?php

require_once "__DIR__/../model/ModelIndex.php";
require_once "__DIR__/../view/View.php";
function controllerUpload()
{
    $res = model();
    echo render($res, 'upload_form.tpl');
}