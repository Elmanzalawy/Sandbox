<?php


abstract class Animal
{
    abstract function move();
}

class Cat extends Animal{
    function move()
    {
        echo "Cat runs".PHP_EOL;
    }
}

class Bird extends Animal{
    function move()
    {
        echo "Bird flies".PHP_EOL;
    }
}

class Fish extends Animal{
    function move()
    {
        echo "Fish swim".PHP_EOL;
    }
}

$cat = new Cat;
$bird = new Bird;
$fish = new Fish;

$cat->move();
$bird->move();
$fish->move();