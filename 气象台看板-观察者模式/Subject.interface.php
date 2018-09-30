<?php

interface Subject
{
    /**
     * 添加一个观察者
     */
    public function registerObserver(Observer $Obersver);
    
    /**
     * 删除一个观察者
     */
    public function removeObserver(Observer $Obersver);

    /**
     * 通知所有在列表中的观察者
     */
    public function notifyObserver();
}