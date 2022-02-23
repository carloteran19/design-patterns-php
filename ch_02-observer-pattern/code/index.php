<?php
require_once 'WeatherData.php';
require_once 'CurrentConditionsDisplay.php';
require_once 'StatisticsDisplay.php';

$weatherData = new WeatherData();
$currentDisplay = new CurrentConditionsDisplay($weatherData);
$statisticsDisplay = new StatisticsDisplay($weatherData);

$weatherData->setMeasurements(80, 65, 30.4);
