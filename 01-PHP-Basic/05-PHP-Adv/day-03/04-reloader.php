<?php
    class clsA {
        private static function pri($p1, $p2) {
            echo $p1, '<hr />', $p2, '<hr />';
        }

        /*public function call($name) {
            $this -> $name();
        }*/

        /*public function __call($name, $arr) {
            $this -> $name($arr[0], $arr[1]);
        }*/

        public static function __callstatic($name, $arr) {
            self::$name($arr[0], $arr[1]);
        }
    }

    /*$obj = new clsA();
    $obj -> pri(100, 200);*/

    clsA::pri(100, 200);