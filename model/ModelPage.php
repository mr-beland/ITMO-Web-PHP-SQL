<?php

function modelPage()
{
    //todo: читает файл в массив
    $data = array(
        array('num' => 1,
            'question' => 'Что такое array?',
            'status' => true
        ),
        array('num' => 2,
            'question' => 'Что такое echo?',
            'status' => true
        ),
        array('num' => 3,
            'question' => 'Что такое print_r?',
            'status' => true
        ),
    );
    return $data;
}