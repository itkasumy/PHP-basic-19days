<?php
    class MySQL {
        public $host;
        public $port;
        public $user;
        public $pwd;
        public $db;
        public $charset;
        public function __construct($config = array()) {
            $this -> host = isset($config['host']) ? $config['host'] : 'localhost';
            $this -> port = isset($config['port']) ? $config['port'] : '3306';
            $this -> user = isset($config['user']) ? $config['user'] : 'root';
            $this -> pwd = isset($config['pwd']) ? $config['pwd'] : 'root';
            $this -> db = isset($config['db']) ? $config['db'] : '';
            $this -> charset = isset($config['charset']) ? $config['charset'] : 'utf-8';

            $this -> connect();
            $this -> setChar();
            $this -> useDb();
        }

        public function connect() {
            mysql_connect($this -> host . ':' . $this -> port, $this -> user, $this -> pwd);
        }

        public function setChar() {
            echo $this -> charset;
            mysql_query("set names " . $this -> charset);
        }

        public function useDb() {
            mysql_query("use " . $this -> db);
        }

        public function exec($sql) {
            $res = mysql_query($sql);
            if(!$res) {
                echo 'SQL语法错误，错误信息如下：<br />';
                echo '错误编码：', mysql_errno(), '<br />';
                echo '错误信息：', mysql_error();
            } else {
                return $res;
            }            
        }
    }

    $config = array('host' => 'localhost', 'user' => 'root', 'pwd' => 'root', 'db' => 'xiaomiserver');
    $mysql = new MySQL($config);

    $sql = "select * from goods";
    $result = $mysql -> exec($sql);
    var_dump($result);