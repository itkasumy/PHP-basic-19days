<?php
    class Person {
        public $name = '';
        public $sex = '';
        public $weight = '';
        function __construct($name) {
            $this -> name = $name;
            $this -> sex = mt_rand(0, 1) == 0 ? 'boy' : 'girl';
            echo __METHOD__, '<hr />';
        }

        function Person() {
            echo __METHOD__, '<hr />';
        }

        function showInfo() {
            echo __METHOD__, '<hr />';
        }
    }

    $p1 = new Person("zhangsan");
    $p2 = new Person("lisi");

    echo $p1 -> sex, '<hr />';
    echo $p2 -> sex, '<hr />';

    echo $p1 -> name, '<hr />';
    $p1 -> name = 'zhangsanfeng';
    echo $p1 -> name, '<hr />';