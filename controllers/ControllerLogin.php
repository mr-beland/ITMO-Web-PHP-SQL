<?php
require_once "__DIR__/../model/ModelIndex.php";
require_once "__DIR__/../view/View.php";

class ControllerLogin {
    public function renderForm () {
        $md = new ModelIndex;
        $res = $md -> model ();
        echo render($res, 'form_login.tpl');
    }
}


    