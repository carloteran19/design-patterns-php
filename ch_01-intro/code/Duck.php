<?php

abstract class Duck
{
    public $flyBehavior;
    public $quackBehavior;

    abstract public function display();

    public function performFly()
    {
        $this->flyBehavior->fly();
    }

    public function performQuack()
    {
        $this->quackBehavior->quack();
    }

    public function setFlyBehavior($fb)
    {
        $this->flyBehavior = $fb;
    }

    public function setQuackBehavior($qb)
    {
        $this->quackBehavior = $qb;
    }

    public function swim()
    {
        echo 'All ducks float, even decoys!';
    }
}