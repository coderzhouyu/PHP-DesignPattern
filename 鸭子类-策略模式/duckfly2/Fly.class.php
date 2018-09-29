<?php
/**
 * 将 Fly 动作做一个接口类，具体的飞行方式由其子类来实现
 */
interface Fly
{
    /**
     * 定义 fly 并且要求继承此类的子类实现 fly 方法
     */
    public function fly();
}

/**
 * 用翅膀飞
 */
class FlyWings implements Fly
{
    /**
     * 用翅膀飞的具体实现
     */
    public function fly()
    {
        echo "用翅膀飞";
    }
} 

class FlyNoWay implements Fly
{
    /**
     * 不会飞
     */
    public function fly()
    {
        echo "不会飞";
    }
}