<?php
include_once 'Duck.php';
include_once 'Quack.php';
include_once 'FlyWithWings.php';

class MallardDuck extends Duck
{
    public function __construct()
    {
        $this->quackBehavior = new Quack();
        $this->flyBehavior = new FlyWithWings();
    }

    public function display()
    {
        echo "I am a real Mallard duck";
    }
}