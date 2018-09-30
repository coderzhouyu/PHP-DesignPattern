<?php
/**
 * 观察者接口
 */
interface Observer
{
    /**
     * 所有的观察者都要实现一个更新数据的方法
     */
    public function update($temperature,$humidity,$pressure); 
}