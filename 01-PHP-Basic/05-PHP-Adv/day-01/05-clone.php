<?php
    // class Person {
    //     public $age = 18;
    //     /*function __construct() {
    //         echo __METHOD__, '<hr />';
    //     }*/

    //     /*function __clone() {
    //         echo __METHOD__, '<hr />';
    //     }*/
    //     public $country = 'China';
    //     public function funcA() {}
    //     public function funcB() {}
    // }

    /*$p1 = new Person;
    $p2 = clone($p1);*/

    /*$p2 -> age = 27;
    echo $p1 -> age, '<hr />';
    echo $p2 -> age, '<hr />';

    echo '<pre>';
    var_dump($p1);
    var_dump($p2);
    $p3 = new Person;
    var_dump($p3);*/

    /*$p1 = new Person;
    $p2 = new Person;

    if($p1 == $p2) {
        echo 'true', '<hr />';
    } else {
        echo 'false', '<hr />';
    }

    if($p1 === $p2) {
        echo 'true', '<hr />';
    } else {
        echo 'false', '<hr />';
    }

    echo '<pre>';
    var_dump($p1);
    var_dump($p2);*/

    class A {

    }
    class B {

    }

    $a = new A;
    $b = new B;
    var_dump($a instanceof A);
    var_dump($a instanceof B);