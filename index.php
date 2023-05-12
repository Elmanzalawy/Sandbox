<?php
interface Animal {
    public function makeSound();
}

class Cat implements Animal{
    public function makeSound(){
        echo 'meow</br>';
    }
}

class Cow implements Animal{
    public function makeSound(){
        echo 'Moo</br>';
    }
}

$cat = new Cat;
$cow = new Cow;

$cat->makeSound();
$cow->makeSound();