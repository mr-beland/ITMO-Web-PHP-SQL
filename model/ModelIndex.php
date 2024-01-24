<?php

    require_once "__DIR__/../lib/DataBase.php";
    require_once "__DIR__/../new_auth.php";

    function model() {
        // 1. Получить данные от сервера БД, файла,
        //http , сайта, API
        $arr = ['name' => ""];
        return $arr;
    }


    class ModelLogin {

        const SQL_ADD_NEW_USER = "INSERT INTO auth (email, password)
                                    VALUES (:email, :password)";
        const SQL_CHECK_USER_EXISTANCE = "SELECT * from auth where email = :email";

        public function registerNewUser() {
            $db = new DataBase();
            $db->setBasePrepare(ModelLogin::SQL_ADD_NEW_USER, ['email' => $_POST['email'], 'password' => md5($_POST['password'], false)]);
        }

        public function findUser($login) {
            $db = new DataBase();
            $res = $db->getBasePrepare(ModelLogin::SQL_CHECK_USER_EXISTANCE, ['email' => $login]);
            return $res;
        }

    }