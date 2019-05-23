<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 2019/5/23
 * Time: 8:44
 */

$n = 1;
$m = 5;
function jia($n,$m)
{
    $res = range($n,$m);
    $xin = array_sum($res);
    return $xin;
}
var_dump(jia($n,$m));


























