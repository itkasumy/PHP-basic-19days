<?php
    /*class A {
        protected static $pro = 'A_Protected';
        public function showInfo() {
            echo self::$pro;
        }
    }

    class B extends A {
        protected static $pro = 'B_Protected';
    }

    $obj = new B;
    $obj -> showInfo();*/



    class A {
        protected static $pro = 'A_Protected';
        public function showInfo() {
            echo static::$pro;
        }
    }

    class B extends A {
        protected static $pro = 'B_Protected';
    }

    $obj = new B;
    $obj -> showInfo();