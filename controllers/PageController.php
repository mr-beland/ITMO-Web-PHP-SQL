<?php
//session_start();
//if (isset($_SESSION['is_auth'])  &&  $_SESSION['is_auth'] ) {
//    controllerPage();
//} else {
//    echo "Вы не зарегистрированы!";
//    // пауза
//    // отправляем на форму login
//}
require_once "__DIR__/../model/ModelPage.php";
require_once "__DIR__/../view/View.php";
class PageController {
    public function actionIndex() {
        $mdl = new ModelPage();
        $res = $mdl->getListQuestion();
        $res = Array('result' => $res);
        echo render($res, 'question.tpl');
    }

    //todo: Контроллер реализован для отдачи json в app.js
    public function actionCounter() {
        $mdl = new ModelPage();
        $res = $mdl->getCounter();
        echo json_encode($res);
    }
}




