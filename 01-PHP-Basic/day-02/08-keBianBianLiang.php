<?php
    header("Content-type:text/html;charset=utf-8");

    $abc = "江苏传智播客股份有限公司深圳分公司庭威分部";

    $gs = "abc";

    echo $$gs; //逻辑: $($gs) => $("abc") => $abc => "江苏传智播客股份有限公司深圳分公司庭威分部"
?>