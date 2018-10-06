<?php
    class FctySingle {
        private static $arr = array();
        public static function getInstance($class) {
            if(!array_key_exists($class, self::$arr)) {
                self::$arr[$class] = new $class();
            }
            return self::$arr[$class];
        }
    }

    class A {}

    $objA = FctySingle::getInstance('A');
    $objB = FctySingle::getInstance('A');

    var_dump($objA == $objB);