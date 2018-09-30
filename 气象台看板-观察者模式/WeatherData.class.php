<?php
require_once "Subject.interface.php";
/**
 * 气象台数据类
 */
class WeatherData implements Subject
{
    /**
     * 所有观察者对象存放的数组
     */
    protected $observers = [];
    /**
     * 气温
     */
    protected $temperature;
    /**
     * 湿度
     */
    protected $humidity;
    /**
     * 气压
     */
    protected $pressure;
    
    protected function measurementsChanged()
    {
        $this->notifyObserver();
    }
    
    public function setWeatherData($data=[])
    {
        $this->temperature = $data['temperature'];
        $this->humidity    = $data['humidity'];
        $this->pressure    = $data['pressure'];
        $this->measurementsChanged();
    }

    public function registerObserver(Observer $obj)
    {
        if( !in_array($obj,$this->observers) )
        {
            array_push($this->observers,$obj);
        }
    }

    public function removeObserver(Observer $obj)
    {
        if( in_array($obj,$this->observers,true) )
        {
           foreach ($this->observers as $k=>$o)
           {
               if($o === $obj){
                   unset($this->observers[$k]);
               }
           }
        }
    }
    
    public function notifyObserver()
    {
        foreach ($this->observers as $obj)
        {
            $temperature = $this->getTemperature();
            $humidity    = $this->getHumidity();
            $pressure    = $this->getPressure();

            $obj->update($temperature,$humidity,$pressure);
        }
    }

    /**
     * 获取气温
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * 获取湿度
     */
    public function getHumidity()
    {
        return $this->humidity;
    }

    /**
     * 获取气压
     */
    public function getPressure()
    {   
        return $this->pressure;
    }

}