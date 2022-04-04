<?php
    function foo (&$arg){
        $z = $arg;
        $arg ++;
        return $z;
    }

    $x = 3;
    $y = foo($x);
    echo $x.", ".$y; //4, 3
?>