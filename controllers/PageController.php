<?php

    session_start();

//if (isset($_SESSION['is_auth']) && $_SESSION['is_auth'] == True) {
//    controllerPage();
//} else {
//    echo "Вы не зарегестрированы!";
//    // Пауза
//    // Редирект на логин
//}

    require_once "__DIR__/../model/ModelPage.php";
    require_once "__DIR__/../view/View.php";
    require_once "__DIR__/../controllers/PageController.php";

    class PageController {
        public function actionIndex() {
            $mdl = new ModelPage();
            $res = $mdl->getListOfQuestions();
            $res = array('result' => $res);
            echo render($res, 'page.tpl');
        }

        public function actionCounter() {
            $mdl = new ModelPage();
            $res = $mdl->getAllQuestions();
            echo json_encode($res);
        }

    }




