<?php

    require_once "__DIR__/../model/ModelIndex.php";
    require_once "__DIR__/../view/View.php";

    class LoginController {

        public function actionIndex() {
            $mdl = new ModelLogin();
            $res = $mdl->getAllUsers();
            echo render($res, 'form_login.tpl');
        }
    }