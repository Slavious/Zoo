<?php require 'Animal.php';

class Cat extends Animal
{
    public function __construct($name)
    {
        parent::setName($name);
    }

    public function meow()
    {
        return 'Cat ' . parent::getName() . ' is sayig meow';
    }
}
