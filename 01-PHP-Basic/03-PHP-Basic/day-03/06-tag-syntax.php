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
        <table class="table table-striped">
            <tr>
                <td>#</td>
                <td>商品名</td>
                <td>价格</td>
                <td>库存</td>
                <td>操作</td> 
            </tr>
            <?php
                $i = 1;
                while($i < 10) { ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                        <a href='#'>
                            <span class='glyphicon glyphicon-remove' onclick='confirm('')'></span>
                        </a>
                        |
                        <a href='#'>
                            <span class='glyphicon glyphicon-edit'></span>
                        </a>
                        </td>
                    </tr>
                <?php 
                    $i++;
                } ?>
            
        </table>
    </div>
</body>
</html>