<?php

    require_once './view/View.php';
    require_once './model/ModelPage.php';

    class AddQuestionController {
        public function actionIndex() {
            echo render(array(), 'question.tpl');
        }

        public function actionAdd() {
            $mdl = new ModelPage();
            $res = $mdl->addQuestion($_POST['question']);
            echo $res;
        }
    }