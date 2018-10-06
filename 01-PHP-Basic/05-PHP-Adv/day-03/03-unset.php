<?php
    class clsA {
        public $pub = 'public';
        private $pri = 'private';
        private $priA = 'private';
        private $priB = 'private';
        protected $pro = 'protected';

        public function __unset($name) {
            $allow = array('pri', 'priA');
            if(in_array($name, $allow)) {
                unset($this -> $name);
            }
        }
    }

    $obj = new clsA();

    unset($obj -> pri);
    unset($obj -> priA);
    echo '<pre>';
    var_dump($obj);