<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 2019/7/1
 * Time: 8:58
 */

function day20(){
    echo day20_2(1,1);
}
return day20();

function day20_2($x,$y){
    if ($x == 0 && $y == 0){
        return 0;
    }
    if ($x == 0 || $y == 0){
        return 1;
    }
    $total = day20_2($x - 1, $y)+day20_2($x,$y - 1);
    return $total;
}