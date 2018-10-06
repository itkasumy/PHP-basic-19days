<?php
    class Fcty {
        public static function getInstance($class) {
            return new $class();
        }
    }

    class A {}
    class B {}

    $objA = Fcty::getInstance('A');
    var_dump($objA);
    $objB = Fcty::getInstance('B');
    var_dump($objB);