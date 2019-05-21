<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 2019/5/21
 * Time: 8:48
 */




$array = [2,3,4,5,2,3,4,6];
function once($array)  //  函数定义
{
    $count = array_count_values($array); // 方法实现
    foreach($count as $k => $v)
    {
        if($v == 1)
        {
            $new_arr[] = $k;
        }
    }
    return $new_arr;   //  返回值
}
var_dump(once($array));



























