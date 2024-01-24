<?php
    $path = './session';
    session_save_path($path);
    session_start();

    require_once "config.php";
    require_once "./lib/DataBase.php";
    require_once "./model/ModelIndex.php";

    if ($_POST['email']) {
        auth();
    }

    function auth() {
        if (!isUserExists($_POST['email'])) {
            register();
            echo "You are registered!";
        } else print_r("Welcome, " . $_POST['email'] . "!");
    }

    function isUserExists($login) {
        $someVar = new ModelLogin();
        $user = $someVar->findUser($login);
        return $user;
    }

    function register() {
        $someVar = new ModelLogin();
        $someVar->registerNewUser();
    }