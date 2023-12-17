<?php
//todo: include
function controllerUpload(){
    $res = model();
    $v = view($res, 'upload_form.tpl');
    render($v);
}
