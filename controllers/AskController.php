<?php

class AskController {
    const SQL_INSERT_QESTION =  'INSERT a. "comment", u."surname"
                                FROM question q, answer a, "user" u, "user" answ_u 
                                WHERE  q.id = a.id_question
                                AND  q.id_user = u.id
                                AND  a.id_user  = answ_u.id ';
    const SQL_INSERT_NAME = "INSERT INTO public.question
                            
                            VALUES(nextval('question_id_seq'::regclass), 0, '" . {$_name} . "', '')";                           

    private $_ask = '';
    private $_name = '';

    public function getAsk () {
        $_ask = $_POST['ask'];
    }

    public function getName () {
        $_name = $_POST['name'];
    }

    public function addAsk () {

    }
}