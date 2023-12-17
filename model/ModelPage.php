<?php

function modelPage(){
    //todo: Читает файл в массив
    $data = Array(
        Array(
              'num' => 1,
              'question' => 'Что такое array?',
              'status' => true
            ),
        Array(
            'num' => 2,
            'question' => 'Что такое echo?',
            'status' => true
        ),
        Array(
            'num' => 3,
            'question' => 'Что такое print_r?',
            'status' => true
        ),
    );
    return $data;
}