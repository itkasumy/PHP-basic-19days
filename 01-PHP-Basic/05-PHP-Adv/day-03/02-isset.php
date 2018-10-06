<?php
    class clsA {
        public $pub = 'public';
        private $pri = 'private';
        private $priA = 'private';
        private $priB = 'private';
        protected $pro = 'protected';

        public function __isset($name) {
            return isset($this -> $name);
        }
    }

    $obj = new clsA();
    $res = isset($obj -> pri) ;

    echo '<pre>';
    var_dump($res);