<?php
require_once "__DIR__/../lib/DataBase.php";

class  ModelPage {
    const SQL_SELECT_ALL_QUESTION = 'SELECT q.id num, q."name" question,  true status , q.dt_create, a."comment", u.surname q_user, answ_u.surname a_user
                                       FROM question q, answer a, "user" u, "user" answ_u
                                      WHERE q.id = a.id_question
                                        AND q.id_user  = u.id
                                        AND a.id_user  = answ_u.id ';
    public function getListQuestion()  {
        $db = new DataBase();
        $data = $db->getDataBase(ModelPage::SQL_SELECT_ALL_QUESTION);
    return $data;
    }
    // todo: Делаем модель для получения кол-ва заданных вопросов. Отдаем результат контроллеру
    const SQL_SELECT_COUNT_QUESTION = 'select count(*) cnt from question';
    public function getCounter()  {
        $db = new DataBase();
        $data = $db->getDataBase(ModelPage::SQL_SELECT_COUNT_QUESTION);
        return $data;
    }
}