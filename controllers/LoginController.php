<?php

//    session_start();

    require_once "__DIR__/../model/ModelIndex.php";
    require_once "__DIR__/../model/ModelPage.php";
    require_once "__DIR__/../view/View.php";

    class LoginController {

        public function actionIndex() {
            //todo: переписать render чтобы параметр $data был опциональным
            echo render(array(), 'form_login.tpl');
        }

    }