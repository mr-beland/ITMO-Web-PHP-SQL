<?php
require_once "__DIR__/../view/View.php";

class AddQuestionController {

    public function actionIndex () {
        // var_dump('Your question') ;
        $res = [];
        echo render ($res, 'question.tpl');
    }

    public function addQuestion () {
        var_dump($_POST['question']);
        // $_POST['question']
    }
}