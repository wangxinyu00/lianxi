<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 2019/5/22
 * Time: 8:44
 */
$str = "student. a am I";
ReverseSentence($str);   // 函数定义
function ReverseSentence($str)  // 方法实现
{
    $arr = explode(" ",$str);
    $arr = array_reverse($arr);
    $res = implode(" ",$arr);
    echo $res;  // 返回值
}
































