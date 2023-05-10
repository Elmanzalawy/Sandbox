<?php

abstract class Car
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function description();
    public function move(): string
    {
        return "$this->name is moving..";
    }
}

// Child classes
class Audi extends Car
{
    public function description(): string
    {
        return "Choose German quality! I'm an $this->name!";
    }
}

class Volvo extends Car
{
    public function description(): string
    {
        return "Proud to be Swedish! I'm a $this->name!";
    }
}


// Create objects from the child classes
$audi = new audi("Audi");
echo $audi->description();
echo "<br>";

$volvo = new volvo("Volvo");
echo $volvo->description();
echo "<br>";
echo $volvo->move();
echo "<br>";