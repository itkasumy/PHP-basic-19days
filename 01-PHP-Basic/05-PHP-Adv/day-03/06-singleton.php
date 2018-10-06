<?php
    class Singletone {
        private static $instance = null;
        private function __construct() {
            
        }
        public static function getInstance() {
            if(!(self::$instance instanceof self)) {
                self::$instance = new self();
            }
            return self::$instance;
        }

        private function __clone() {}
    }
    
    $obj1 = Singletone::getInstance();
    $obj = Singletone::getInstance();

    var_dump($obj1);
    echo '<hr />';
    var_dump($obj);