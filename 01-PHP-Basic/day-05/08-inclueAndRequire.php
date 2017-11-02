<?php
    header("Content-type:text/html;charset=utf-8");

    echo "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt voluptatem natus commodi sed quod fugit accusantium officiis laudantium iure tempore quis voluptatibus soluta placeat voluptates quaerat, fuga facere repudiandae! Vero quos aperiam beatae eum earum assumenda. Enim, est qui obcaecati inventore delectus accusamus ipsam architecto modi incidunt repellendus sint voluptate doloribus odit nesciunt atque necessitatibus nostrum officiis quaerat impedit quo, perferendis excepturi amet? Impedit totam facere maiores dolorum, dolore perferendis dolores quod reiciendis provident voluptates deleniti laboriosam! Possimus cupiditate, deserunt repudiandae ratione ipsa veritatis excepturi delectus consectetur, qui suscipit dolor modi placeat enim cum quisquam, earum totam officiis adipisci quibusdam? <hr>";

    include "03-for.php";
    echo "<hr>";
    require "07-sleep.php";

    echo "<hr> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt voluptatem natus commodi sed quod fugit accusantium officiis laudantium iure tempore quis voluptatibus soluta placeat voluptates quaerat, fuga facere repudiandae! Vero quos aperiam beatae eum earum assumenda. Enim, est qui obcaecati inventore delectus accusamus ipsam architecto modi incidunt repellendus sint voluptate doloribus odit nesciunt atque necessitatibus nostrum officiis quaerat impedit quo, perferendis excepturi amet? Impedit totam facere maiores dolorum, dolore perferendis dolores quod reiciendis provident voluptates deleniti laboriosam! Possimus cupiditate, deserunt repudiandae ratione ipsa veritatis excepturi delectus consectetur, qui suscipit dolor modi placeat enim cum quisquam, earum totam officiis adipisci quibusdam? <br />";

    // include: 将一个文件的代码包到当前文件中执行，若包含文件不存在，报一个警告错误(E_WARNING)，脚本会继续向下执行
    // require: 将一个文件的代码包到当前文件中执行，若包含文件不存在，报一个致命错误(E_ERROR)，脚本会终止执行

    include_once "09-dingyihanshu.php";
    include_once "09-dingyihanshu.php";
    
?>