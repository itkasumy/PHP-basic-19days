<?php
    /*$str = '深圳php';
    $len = strlen($str);
    $num = mb_strlen($str, 'UTF-8');
    echo $len, '<br />';
    echo $num, '<br />';*/

    /*$v = 100;
    echo sprintf('%d, %b', $v, $v);*/

    /*$str = 'dsldjsfaldgjjdaldjlkfdjjdlkashdsldaaa';
    echo $str, '<hr />';

     echo str_replace('a', 'H', $str);*/

     /*$str = __FILE__;
     $search = "\\";
     $replace = "/";
     echo str_replace($search, $replace, $str);*/

     /*$str = '&nbsp;';
     echo '=>'.str_repeat($str, 10).'<=';*/

     /*$str = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
     echo strtolower($str), '<hr />';
     $s = __DIR__;
     echo $s, '<hr />';
     echo strtolower($s), '<hr />';
     echo strtoupper($s), '<hr />';
     echo ucfirst($s), '<hr />';
     echo ucwords($s), '<hr />';*/

     /*$str = __FILE__;
     $arr = explode('\\', $str);
     echo '<pre>';
     var_dump($arr);*/

     /*$arr = array(1, 2, 3, 4, 5, 6);
     var_dump(implode(',', $arr));*/

     /*$str = "abcdefghijklmnopqrstuvwxyz";
     $arr = str_split($str, 5);
     echo '<pre>';

     var_dump($arr);*/
     
     /*$str = "abcdefghijklmnopqrstiuvwxyz";
    //  echo strpos($str, 'i');
     echo strrpos($str, 'i');*/

     /*$url = "http://www.itcast.cn/admin/login.html";

     /*$strA = substr($url, 5, 10);
     echo $strA;

    //  $strB = strstr($url, '/');
    //  $strB = strchr($url, '/');
    //  echo $strB;
     $strC = strrchr($url, '/');
     echo $strC;*/

     /*$str = "abcdefghijklmnopqrstuvwxyz";
     $res = str_shuffle($str);
     echo $res;*/

     /*$file = "http://www.itcast.cn/image/game.jpg";
     echo trim(strrchr($file, '/'), '/');*/

     $path = "http://www.itcast.cn/image/game.jpg";
    //  $info = pathinfo($path);
     $dir = pathinfo($path, PATHINFO_DIRNAME);
     $base = pathinfo($path, PATHINFO_BASENAME);
     $file = pathinfo($path, PATHINFO_FILENAME);
     $ext = pathinfo($path, PATHINFO_EXTENSION);
     echo $dir, '<br>';
     echo $base, '<br>';
     echo $file, '<br>';
     echo $ext, '<br>';
    //  echo '<pre>';
    //  var_dump($info);