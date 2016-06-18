<?php
/**
 * PHP 各版本的新特性总结
 * @authors WuLiang (742673245@qq.com)
 * @date    2016-06-05 10:40:53
 * @version 1.0
 */

// 三元运算符简写支持
$x = 1;
echo $x == 1 ? $x : 'not is 1';
echo "<br/>";
echo $x == 1 ?: 'not is 1';
echo "<hr/>";

// 匿名函数 [函数参数化]
function mod ($arr, $func) {
    foreach ($arr as $k => $v) {
        $arr[$k] = $func($v);
    }
    return $arr;
}
$arr = [1,2,3,4];

// 对数组值进行加1
echo "<pre>";
echo "原数组：";
print_r($arr);
echo "<br/>";

echo "值加1：";
print_r(mod($arr, function ($val) {return $val + 1;}));
echo "<br/>";

// 对数组值进行乘2
echo "值乘2：";
print_r(mod($arr, function ($val) {return $val * 2;}));
echo "<br/>";
