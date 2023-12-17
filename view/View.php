<?php
function render($data, $tpl){
    extract($data);
    ob_start();
    @include "__DIR__/../template/".$tpl;
    $result = ob_get_contents();
    ob_get_clean();
    return $result;
}