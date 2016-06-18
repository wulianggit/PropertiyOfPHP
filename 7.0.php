<?php
/**
 * PHP7的新特性
 * @authors WuLiang (742673245@qq.com)
 * @date    2016-06-18 20:57:29
 * @version 1.0
 */

// 标量类型声明
function sum (int ...$param) {
    echo array_sum($param);
}
sum(1.1,2.2,3.3);

echo "<hr>";
// 返回值类型声明
function sub (float $a, float $b) :int {
    return $a - $b;
}

echo sub(3.5, 2 );

