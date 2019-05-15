<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 2019/5/15
 * Time: 8:46
 */


$str = [1,2,3,4,5,6];



function shuzu($array)      //  函数 定义
{
    $arr = [];
    $asd = [];
    foreach($array as $k => $v)  //  方法实现
    {
        if($v%2 == 1)
            $arr[] = $v;
        else if($v%2 == 0)
            $asd[] = $v;
    }
    return json_encode(array_merge($arr,$asd));  // 返回值
}
print_r(shuzu($str));