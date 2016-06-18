<?php
/**
 * PHP5.6新特性
 * @authors WuLiang (742673245@qq.com)
 * @date    2016-06-18 20:23:26
 * @version 1.0
 */

// 使用表达式定义常量
define('ONE', 1);
define('TWO', ONE * 2);
echo TWO;

echo "<hr>";
// 使用函数返回值定义常量
function test() {
    return 1;
}
define('VALUE',test());
echo VALUE;

echo "<hr>";
// 定义函数时使用不定长参数
function sum1 (...$free) {
    echo array_sum($free) . "<br/>";
}
sum1(100,10,20,30);

function sum2 () {
    $param = func_get_args();
    echo array_sum($param) . "<br/>";
}
sum2(100,10,20,30);

// 解包不定长参数
function sub ($base, $a,$b,$c) {
    echo $base - $a - $b - $c . "<br/>";
}
$param = [10,20,30];
sub(100, ...$param);

// 新增运算符 **
echo 2**3;
echo 2^3;
echo 1<<3;

