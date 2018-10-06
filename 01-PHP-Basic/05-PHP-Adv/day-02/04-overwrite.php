<?php
    class A {
        public $pub = 'A';
        protected $pro = 'A';
    }
    class B extends A {
        public $pro = 'B';
        protected $pub = 'B';
    }