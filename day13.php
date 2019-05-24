<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 2019/5/24
 * Time: 8:50
 */

function sum($n,$m)  // 函数定义
{
    $arr = [$n,$m];
    $sum = array_sum($arr);
    return $sum;    //  返回值
}
echo sum(10,50);   //  方法实现 