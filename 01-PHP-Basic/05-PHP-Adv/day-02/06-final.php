<?php
    final class B {
        public $name = 'public';
        public function __construct() {}

        final function pub() {}
    }

    $b = new B;

    /*class C extends B {

    }*/