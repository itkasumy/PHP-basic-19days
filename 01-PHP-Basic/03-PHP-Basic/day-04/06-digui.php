<?php
    function recursion($n) {
        return $n == 1 ? 1 : $n * recursion($n - 1);
    }

    echo recursion(5);