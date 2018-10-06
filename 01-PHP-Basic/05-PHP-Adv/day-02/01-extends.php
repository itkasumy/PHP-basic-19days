<?php
    /*class A {
        function fnA() {
            echo 'extends...', '<hr />';
        }
        function fnB() {}
        function fnC() {}
    }

    class B extends A {
        function showInfo() {
            echo 'extends....................................', '<hr />';
        }
    }

    $b = new B;
    $b -> fnA();

    $a = new A;
    $a -> showInfo();*/

    // class Father {
    //     public $lastName = 'Gao';
    //     protected $money = 100;
    //     private $age = 40;

    //     public function pub() {
    //         echo __METHOD__, '<hr />';
    //     }
    //     public function pri() {
    //         echo __METHOD__, '<hr />';
    //     }
    //     public function pro() {
    //         echo __METHOD__, '<hr />';
    //     }
    // }

    // class Son extends Father {
    //     public function showInfo() {
    //         echo $this -> lastName, '<hr />';
    //         echo $this -> money, '<hr />';

    //         $this -> pub();
    //         $this -> pro();
    //         $this -> pri();
    //     }
    // }

    // $s = new Son;
    // /*echo '<pre>';
    // var_dump($s);*/
    // $s -> showInfo();
    // // $s -> pub();


    /*class A {
        public $pubA = 'pubA';
        protected $proA = 'pubA';

        function call() {
            echo $this -> pubA, '<hr />';
            echo $this -> proA, '<hr />';
            echo $this -> pubB, '<hr />';
            echo $this -> proB, '<hr />';
            echo $this -> pubC, '<hr />';
            echo $this -> proC, '<hr />';
        }
    }

    class B extends A {
        public $pubB = 'pubB';
        protected $proB = 'proB';
    }

    class C extends B {
        public $pubC = 'pubC';
        protected $proC = 'proC';

        function call() {
            echo $this -> pubA, '<hr />';
            echo $this -> proA, '<hr />';
            echo $this -> pubB, '<hr />';
            echo $this -> proB, '<hr />';
            echo $this -> pubC, '<hr />';
            echo $this -> proC, '<hr />';
        }
    }

    $obj = new C;
    $obj -> call();*/


    /*class Father {
        public $lastName = 'Gao';
        protected $money = 100;
        private $age = 40;

        private function showFatherAge() {
            echo __METHOD__, '<hr />';
        }

        public function callPri() {
            echo $this -> age, '<hr />';
            $this -> showFatherAge();
        }
    }

    class Son extends Father {
        
    }

    $s = new Son;
    $s -> callPri();*/


    class Father {
        public $lastName = 'Gao';
        protected $money = 100;
        private $age = 40;

        private function showFatherAge() {
            echo __METHOD__, '<hr />';
        }

        protected function callPri() {
            echo $this -> age, '<hr />';
            $this -> showFatherAge();
        }
    }

    class Son extends Father {
        public function callCallPri() {
            $this -> callPri();
        }
    }

    $s = new Son;
    $s -> callCallPri();