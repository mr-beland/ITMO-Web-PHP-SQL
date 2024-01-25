<?php
require_once '__DIR__/../lib/DataBase.php';

// CRUD, delete, get, put, patch

class ModelPage {

    const SQL_SELECT_ALL_QESTION =  'SELECT a. "comment", u."surname"
                                        FROM question q, answer a, "user" u, "user" answ_u 
                                        WHERE  q.id = a.id_question
                                        AND  q.id_user = u.id
                                        AND  a.id_user  = answ_u.id ';

    public function getListQuestion () {
        $db = new DataBase;
        $data = $db -> getDataBase (ModelPage::SQL_SELECT_ALL_QESTION);
        // var_dump ($data);
        return $data;
    }

    public function 
}
