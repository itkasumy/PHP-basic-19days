<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./BootStrap/bootstrap/css/bootstrap.min.css">
    <script src="./BootStrap/bootstrap/js/jquery-3.0.0.min.js"></script>
    <script src="./BootStrap/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <?php
            header('Content-type:text/html;charset=utf-8');
            $i = 1;
            $strTab = "<table class='table table-striped'>";
            $strTab .= "<tr><td>#</td><td>商品名</td><td>价格</td><td>库存</td><td>操作</td></tr>";
            while($i<10){
                $strTab .= "<tr>";
                $strTab .="<td>$i</td><td></td><td></td><td></td><td><a href='#'><span class='glyphicon glyphicon-remove' onclick='confirm('')'></span></a> | <a href='#'><span class='glyphicon glyphicon-edit'></span></a></td>";
                $strTab .="</tr>";
                $i++;
            }
            $strTab .= "</table>";

            echo $strTab;
        ?>
    </div>
</body>
</html>