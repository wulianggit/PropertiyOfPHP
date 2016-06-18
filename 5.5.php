<?php
/**
 * PHP5.5新特性
 * @authors WuLiang (742673245@qq.com)
 * @date    2016-06-18 19:23:00
 * @version 1.0
 */

// 生成器
function getAll () {
    $i = 0;
    while ( ++$i < 4 ) {
        yield '键'.$i => '值'.$i;
    }
}

foreach (getAll() as $key => $val) {
    echo $key .' <=> '. $val ."<br/>";
}

echo "<hr/>";

function test () {
    $i = 0;
    while ( ++$i < 3 ) {
        echo "第{$i}次调用getData函数:<br/>";
        yield from getData();
    }
}

function getData () {
    yield 'yield';
    echo "<br/>";
}

foreach (test() as $value) {
    echo $value;
}

$i = 0;
var_dump(empty($i)); // true
var_dump(empty($i + 1)); // false

echo "<hr>";
$arr = [['a','b','c'] , ['e','f','g']];
foreach ($arr as list($x, $y, $z)) {
    echo $x,' ',$y,' ',$z,' ', "<br>";
}

echo "<hr/>";
class Cat {
    public static function getClassName () {
        echo self::class;  // echo __CLASS__;
    }
}
Cat::getClassName();

