<?php
    /*function __autoload($class) {
        // echo $class;
        // include_once "./Ctrl/$class.class.php";

        $file = "./Ctrl/$class.class.php";
        if(file_exists($file)) {
            include $file;
        }
    }

    $user = new userCtrl();
    // var_dump($user);*/

    /*class Application {
        function loadUserCtrl($class) {
            $file = "./Ctrl/$class.class.php";
            if(file_exists($file)) {
                include $file;
            }
        }

        function loadModel($class) {
            $file = "./Model/$class.class.php";
            if(file_exists($file)) {
                include $file;
            }
        }
    }

    $obj = new Application();
    // spl_autoload_register('loadUserCtrl');
    // spl_autoload_register('loadModel');
    spl_autoload_register(array($obj, 'loadUserCtrl'));
    spl_autoload_register(array($obj, 'loadModel'));

    $user = new userCtrl;
    $model = new userModel;*/

    /*class Application {
        function loadUserCtrl($class) {
            $file = "./Ctrl/$class.class.php";
            if(file_exists($file)) {
                include $file;
            }
        }

        function loadModel($class) {
            $file = "./Model/$class.class.php";
            if(file_exists($file)) {
                include $file;
            }
        }

        public function autoLoad() {
            spl_autoload_register(array($this, 'loadUserCtrl'));
            spl_autoload_register(array($this, 'loadModel'));
        }
    }

    $obj = new Application();
    $obj -> autoLoad();
    

    $user = new userCtrl;
    $model = new userModel;*/


    class Application {
        private static function loadUserCtrl($class) {
            $file = "./Ctrl/$class.class.php";
            if(file_exists($file)) {
                include $file;
            }
        }

        private static function loadModel($class) {
            $file = "./Model/$class.class.php";
            if(file_exists($file)) {
                include $file;
            }
        }

        public static function autoLoad() {
            spl_autoload_register(array(__CLASS__, 'loadUserCtrl'));
            spl_autoload_register(array(__CLASS__, 'loadModel'));
        }
    }

    Application::autoLoad();

    $user = new userCtrl;
    $model = new userModel;