<?php
include_once 'MallardDuck.php';
include_once 'ModelDuck.php';
include_once 'FlyRocketPowered.php';

$mallard = new MallardDuck();
$mallard->performFly();
$mallard->performQuack();

$model = new ModelDuck();
$model->performFly();
$model->setFlyBehavior(new FlyRocketPowered());
$model->performFly();
