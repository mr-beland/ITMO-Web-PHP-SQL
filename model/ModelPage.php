<?php

require_once "__DIR__/../lib/DataBase.php";

class ModelPage
{
    const SQL_SELECT_ALL_QUESTIONS = 'SELECT q.id num, q."name" question,  true status , q.dt_create, a."comment", u.surname q_user, answ_u.surname a_user
                                      FROM question q, answer a, "user" u, "user" answ_u
                                     WHERE q.id = a.id_question
                                      AND q.id_user  = u.id
                                      AND a.id_user  = answ_u.id';

    const SQL_COUNT_ALL_QUESTIONS = 'SELECT count(*) cnt
                                        FROM question ';

    public function getAllQuestions() {
        $db = new DataBase();
        $res = $db->getDataBase(ModelPage::SQL_COUNT_ALL_QUESTIONS);
        return $res;
    }

    public function getListOfQuestions() {
        $db = new DataBase();
        $res = $db->getDataBase(ModelPage::SQL_SELECT_ALL_QUESTIONS);
        return $res;
    }
}