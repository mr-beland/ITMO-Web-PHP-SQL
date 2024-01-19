<?php
//todo: include
require_once '../model/ModelIndex.php';

class ControllerUpload {

    public function renderForm (){
        $md = new ModelIndex;
        $res = $md -> model ();
        $v = view($res, 'upload_form.tpl');
        render($v);
    }

}

