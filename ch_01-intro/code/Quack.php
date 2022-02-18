<?php
include_once 'QuackBehavior.php';

class Quack implements QuackBehavior
{

    public function quack()
    {
        echo 'Quack!';
        echo "<br>";
    }
}