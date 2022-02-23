<?php
include_once 'Observer.php';
include_once 'DisplayElement.php';

class StatisticsDisplay implements Observer, DisplayElement
{
    private $temperature;
    private $humidity;
    private $pressure;
    private $weatherData;

    public function __construct($weatherData)
    {
        $this->weatherData = $weatherData;
        $weatherData->registerObserver($this);
    }

    public function update()
    {
        $this->temperature = $this->weatherData->getTemperature();
        $this->humidity = $this->weatherData->getHumidity();
        $this->display();
    }

    public function display()
    {
        echo 'Current conditions: ' .$this->pressure. 'pressure';
    }
}