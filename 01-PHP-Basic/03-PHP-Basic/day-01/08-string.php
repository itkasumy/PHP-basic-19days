<?php
    header('Content-type:text/html;charset=utf-8');

    $str1 = 'the \\ King\'s \\ Speech';
    echo $str1;

    echo '<hr />';
    $country = 'the United Kingdom of Great Britain and Northern Irelan';

    $str2 = "\tThe story of King George VI of {$country}d, \n\t his impromptu ascension to the throne and the speech therapist who helped the unsure monarch become worthy of it.";
    echo $str2;
    echo '<hr />';

    $heredoc = <<<abc

        此种方法用于定义大段的字符串，可以理解为PHP中的HTML编译器
        可以书写html标签
        <h3>heredoc</h3>
        还可以书写CSS
        <div style="width:100px; height: 30px; background: #f30;"></div>
        还可以书写js
        <button onclick="alert('Hello')">click</button>
        还可以解析变量的值：$country;

abc;

    echo $heredoc;