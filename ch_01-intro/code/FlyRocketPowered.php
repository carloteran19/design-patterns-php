<?php
include_once 'FlyBehavior.php';

class FlyRocketPowered implements FlyBehavior
{

    public function fly()
    {
        echo 'I am flying with a rocket';
        echo "<br>";
    }
}