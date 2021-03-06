<?php
include_once 'Duck.php';
include_once 'Quack.php';
include_once 'FlyNoWay.php';

class ModelDuck extends Duck
{
    public function __construct()
    {
        $this->quackBehavior = new Quack();
        $this->flyBehavior = new FlyNoWay();
    }

    public function display()
    {
        echo "I am a model duck";
    }
}