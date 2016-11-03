<?php
/* 单例模式 */
class Single{
    private $name;
    static public $instance;
    private function __construct(){
        echo "这是一个单例模式";
    }
    static public function setinstance(){
        if (!(self::$instance instanceof self)) {
            self::$instance=new self();
        }
        return self::$instance;
    }
    public function setname($name){
        $this->name=$name;
    }
    public function getname(){
        return $this->name;
    }
    public function __clone(){
        echo "单例模式不可克隆";
    }
}
$a=Single::setinstance();
$b=Single::setinstance();
$a->setname("hello Word");
$b->setname("单例模式");
echo $a->getname();
echo $b->getname();
//$c=new Single(); 使用new实例化类的时候出发private 构造函数；
/*单例模式 又称为职责模式，该模式
 * 1.必须有一个私有化的构造函数，防止外部使用new实例化
 * 2.必须有一个静态成员变量承载类的实例化
 * 3.必须有一个静态化成员方法用来实例化类并判断是否实例化过  
 *   */
?>