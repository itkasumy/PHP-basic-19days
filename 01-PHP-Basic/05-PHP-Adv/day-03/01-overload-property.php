<?php
    class clsA {
        public $pub = 'public';
        private $pri = 'private';
        private $priA = 'private';
        private $priB = 'private';
        protected $pro = 'protected';

        public function getValue($name) {
            return $this -> $name;
        }

        public function setValue($name, $value) {
            $this -> $name = $value;
        }

        public function __get($name) {
            return $this -> $name;
        }

        public function __set($name, $value) {
            $allow = array('name', 'age', 'sex');
            if(in_array($name, $allow)) {
                 $this -> $name = $value;
            }           
        }
    }

    $obj = new clsA();

    /*echo $obj -> getValue('pri'), '<hr />';

    $obj -> setValue('priA', 'privateA');
    echo $obj -> getValue('priA'), '<hr />';

    echo '<pre>';
    var_dump($obj);*/

    echo $obj -> pri, '<hr />';

    $obj -> priA = 'privateA';
    echo $obj -> priA, '<hr />';

    $obj -> nianliang = 18;
    $obj -> age = 18;

    echo '<pre>';
    var_dump($obj);