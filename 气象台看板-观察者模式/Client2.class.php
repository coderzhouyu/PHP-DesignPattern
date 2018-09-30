<?php

require_once "Observer.interface.php";
require_once "Display.interface.php";
//引入主题
require_once "WeatherData.class.php";

/**
 * 客户端1
 */
class Client2 implements Observer,Display
{
    protected $temperature;
    protected $humidity;
    protected $pressure;

    public function update($temperature,$humidity,$pressure)
    {
        $this->temperature = $temperature;
        $this->humidity    = $humidity;
        $this->pressure    = $pressure;
        $this->display();
    }

    public function display()
    {
        echo "<br />";
        print_r($this->temperature);
        echo "<br />";
    }
}


$clent = new Client2();

$weather = new WeatherData();
$weather->registerObserver($clent);


$weather->setWeatherData([
    'temperature'=>20,
    'humidity' => 50,
    'pressure' =>20
]);

$weather->removeObserver($clent);

$weather->setWeatherData([
    'temperature'=>25,
    'humidity' => 50,
    'pressure' =>20
]);


$weather->registerObserver($clent);


$weather->setWeatherData([
    'temperature'=>250,
    'humidity' => 50,
    'pressure' =>200
]);