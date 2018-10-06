<?php
    $goods = [
        [1, 'apple', '$4999', '4G'],    
        [1, 'apple', '$4999', '4G'],    
        [1, 'apple', '$4999', '4G'],    
        [1, 'apple', '$4999', '4G']
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>#</td>
            <td>goodsName</td>
            <td>Price</td>
            <td>Chnnel</td>
        </tr>
        <?php foreach($goods as $v) { ?>
        <tr>
            <td><?php echo $v[0] ?></td>
            <td><?php echo $v[1] ?></td>
            <td><?php echo $v[2] ?></td>
            <td><?php echo $v[3] ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>