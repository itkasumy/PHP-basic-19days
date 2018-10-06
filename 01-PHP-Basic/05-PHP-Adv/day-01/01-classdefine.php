<?php
    class Phone {
        public $name = 'xiaomi';
        public $model = '4G';
        private $color = 'white';
        protected $system = 'Android';

        const sn = '0G0038276';

        public function showInfo() {
            echo self::sn, '<hr />';
            echo $this -> name, '<hr />';
            echo $this -> color, '<hr />';
            echo $this -> system, '<hr />';
        }

        public function call($num) {
            echo "calling $num", '<hr />';
        }

        private function photo() {
            echo __METHOD__, '<hr />';
        }

        protected function play() {
            echo 'avi', '<hr />';
        }
    }

    $name = 'zhangsan';

    $xm6 = new Phone();
    echo $xm6 -> name, '<hr />';

    $xm6 -> name = 'xm';
    echo $xm6 -> name, '<hr />';;

    $xm6 -> price = 3699;
    echo $xm6 -> price, '<hr />';

    // echo '<pre>';
    var_dump($xm6);

    echo '</pre>', '<hr />';

    /*unset($xm6 -> name);
    echo $xm6 -> name, '<hr />';*/

    $xm6 -> call(18500682038);
    /*$xm6 -> photo();
    $xm6 -> play();*/
    
    $xm6 -> showInfo();

    $hw = new Phone();
    
    $hw -> name = 'huawei';
    $hw -> showInfo();

    echo Phone::sn; // 范围解析操作符