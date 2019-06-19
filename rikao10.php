<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 2019/6/19
 * Time: 8:43
 */

$array = [2,4,3,6,3,2,5,5];

function FindNumsAppearOnce($array){

    $count = array_count_values($array);

    foreach ($count as $k => $v){
        if ($v == 1){
            $new_arr[] = $k;
        }
    }
    return $new_arr;
}
echo json_encode(FindNumsAppearOnce($array));