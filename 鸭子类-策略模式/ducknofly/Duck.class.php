<?php

/**
 * 定义一个抽象的鸭子类
 */
abstract class Duck
{
    
    /**
     * 所有的鸭子都会呱呱叫
     */
    public function quack()
    {
        echo "呱呱叫";
    }

    /**
     * 所有的鸭子都会游泳
     */
    public function swim()
    {
        echo "游泳";
    }
    
    /**
     * 鸭子的外观必须由继承此抽象类的子类自行完成
     */
    abstract public function display();

}

/**
 * 绿头鸭
 */
class MallarrDuck extends Duck
{
    public function display()
    {
        echo "头是绿色的";
    }
}


/**
 * 红头鸭
 */
class RedHeadDuck extends Duck
{
    public function display()
    {
        echo "头是红色的";
    }
}


$MallarrDuck = new MallarrDuck();
echo $MallarrDuck->display();

$ReadHeadDuck = new RedHeadDuck();
echo $ReadHeadDuck->display();