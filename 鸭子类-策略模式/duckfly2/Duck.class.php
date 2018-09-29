<?php
require 'Fly.class.php';
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
    
    public function fly(Fly $fly)
    {
        $fly->fly();
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
/**
 * 在此处传递具体用哪种方式飞
 */
echo $MallarrDuck->fly(new FlyWings());

$ReadHeadDuck = new RedHeadDuck();
echo $ReadHeadDuck->display();
echo $ReadHeadDuck->fly(new FlyNoWay());

/**
 * 这种设计虽然解决了给指定的鸭子添加 Fly 的动作，但是需要在所有要 Fly 的鸭子类中使用 Trait 如果鸭子类特别多需要调整的位置相应的也很多。
 * 显然这种方法不太合理。
 */