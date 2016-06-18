<?php
/**
 * PHP5.4新特性
 * @authors WuLiang (742673245@qq.com)
 * @date    2016-06-18 17:43:14
 * @version 1.0
 */

// 短数组语法
$arr    = [1,2,3,4];
$people = ['name' => '张三', 'age' => 29];
echo "<pre>";

echo "短语法定义索引数组:<br/>";
print_r($arr);

echo "短语法定义关联数组:<br/>";
print_r($people);


echo "<hr/>";
// 支持函数返回数组的立即调用
function arr () {
    return ['a', 'b', 'c', 'd'];
}
print_r(arr()[2]);


echo "<hr/>";
// 实例化对象时立调用对象成员
class People {
    private $name = '张三';
    public function getName () {
        return $this->name;
    }
}
print((new People())->getName());


echo "<hr/>";
// 萃取 trait 方法实现类的多继承
trait Stu {
    public function study () {
        echo "学生的职责是学习!<br/>";
    }
}

trait Child {
    public function enjoy () {
        echo "小孩的天性是贪玩!<br/>";
    }
}

class Human  {
    use Stu, Child;
}
(new Human())->study();
(new Human())->enjoy();


