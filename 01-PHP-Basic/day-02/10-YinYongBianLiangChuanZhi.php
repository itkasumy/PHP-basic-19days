<?php
    $a = 100;
    $b = $a;
    $a = 200;

    echo "\$a=$a; \$b=$b";

    echo "<hr>";

    $c = 300;
    $d = &$c;
    $c = 400;

    echo "\$c=$c; \$d=$d";

    echo "<hr>";
?>

<script>
    var a = 100;
    var b = a;
    a = 200;
    document.write("a=" + a + "b=" + b);
    document.write("<hr>");

    var arr1 = [12, "abc"];
    var arr2 = arr1;
    arr1[0] = 100;
    document.write("arr1=" + arr1 + "<hr>arr2=" + arr2);
</script>