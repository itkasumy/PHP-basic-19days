<?php
    class Person {
        public static $name = "lisi";
        private static $age = 18;
        protected static $gender = "male";

        public static function showInfo() {
            echo __METHOD__, '<hr />';
            echo __FUNCTION__, '<hr />';
            echo self::$age, '<hr />';
            echo self::$gender, '<hr />';
            echo self::$name, '<hr />';
            self::setName();
            self::getName();
        }
        private static function setName() {
            echo __METHOD__, '<hr />';
        }
        protected static function getName() {
            echo __METHOD__, '<hr />';
        }
    }

    echo Person::$name, '<hr />';
    echo Person::showInfo();