<?php
$path = './session';
session_save_path($path);
session_start();

$_SESSION['is_auth'] = True;
$_SESSION['passwd'] = 111;
$_SESSION['arr_num'] = [1,2,3,4,3];

if (isset($_GET['logout'])  && $_GET['logout'] == 1 ) {
    logout();
}

function logout() {
    $_SESSION['is_auth'] = False;
}
session_destroy()