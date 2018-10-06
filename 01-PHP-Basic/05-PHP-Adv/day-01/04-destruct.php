<?php
    class Person {
        public function __destruct() {
            echo __METHOD__, '<hr />';
        }
    }

    $p1 = new Person;

    $p2 = $p1;
    unset($p1); // 对比有无销毁动作

    echo 'abcd', '<hr />';