<?php
include_once 'Subject.php';

class WeatherData implements Subject
{
    public $observers = array();
    public $temperature;
    public $humidity;
    public $pressure;


    public function registerObserver($observer)
    {
        array_push($this->observers, $observer);
    }

    public function removeObserver($observer)
    {
        array_splice($this->observers, $observer);
    }

    public function notifyObservers()
    {
        foreach ($this->observers as $observer)
        {
            $observer->update();
        }
    }

    public function measurementsChanged()
    {
        $this->notifyObservers();
    }

    public function setMeasurements($temperature, $humidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }
}