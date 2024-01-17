<?php

    require_once "__DIR__/../lib/DataBase.php";

    function model() {
        // 1. Получить данные от сервера БД, файла,
        //http , сайта, API
        $arr = ['name' => ""];
        return $arr;
    }


    class ModelLogin {

        const SQL_SELECT_ALL_USERS = 'SELECT * from "user"';

        public function getAllUsers() {
            $db = new DataBase();
            $res = $db->getDataBase(ModelLogin::SQL_SELECT_ALL_USERS);
//            echo "<pre>";
//            print_r(json_encode($res));
//            echo "</pre>";
            return $res;
        }
    }