<?php
include_once 'Observer.php';
include_once 'DisplayElement.php';

class CurrentConditionsDisplay implements Observer, DisplayElement
{
    private $temperature;
    private $humidity;
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
        echo 'Current conditions: ' .$this->temperature. 'F degrees and ' .$this->humidity. '% humidity';
    }
}