<?php

class  Singleton {
    static private $instance;
    private function __construct() {  }

    static  public function getInstance(){
        if(!self::$instance){
            self::$instance = new self();
        }
        return  self::$instance;

    }
}

//$obj = new Singleton();
var_dump(Singleton::getInstance());