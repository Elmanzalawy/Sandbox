<?php
    /**
     * A PHP reference is an alias, which allows two different variables to write to the same value. In PHP, an object variable doesn't contain the object itself as value. It only contains an object identifier which allows object accessors to find the actual object. When an object is sent by argument, returned or assigned to another variable, the different variables are not aliases: they hold a copy of the identifier, which points to the same object.
     */
    function foo (&$arg){
        $z = $arg;
        $arg ++;
        return $z;
    }

    $x = 3;
    $y = foo($x);
    echo $x.", ".$y; //4, 3
