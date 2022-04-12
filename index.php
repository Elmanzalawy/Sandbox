<?php

class Bird{

    /**
     * Code executed when a class object is constructed, typically used to initialize the properties of an object
     */
    public function __construct()
    {
        echo "New Bird! 🐣".PHP_EOL;
    }

    /**
     * Code executed when a class object is destroyed
     */
    public function __destruct()
    {
        echo "RIP Bird 💀 :(".PHP_EOL;
    }
}

$bird = new Bird;