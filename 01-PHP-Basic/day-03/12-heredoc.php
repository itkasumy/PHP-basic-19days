<?php
    header("Content-type:text/html;charset=utf-8");

    $title = "定界字符串";

$str = <<<heredoc
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>$title</title>
        <script type="text/javascript">
            window.onload = function() {
                document.body.style.backgroundColor = "#058";
                console.log(111111);
            }
        </script>
    </head>
    <body>
        <h2 align="left" style="color: red">$title</h2>
    </body>
    </html>
heredoc;

    echo $str;

?>