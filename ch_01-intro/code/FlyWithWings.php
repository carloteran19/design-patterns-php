<?php
include_once 'FlyBehavior.php';

class FlyWithWings implements FlyBehavior
{

    public function fly()
    {
        echo 'I am flying';
        echo "<br>";
    }
}