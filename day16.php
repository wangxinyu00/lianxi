<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 2019/5/28
 * Time: 8:55
 */


    $target = 1;
    $array = [[1,2,8,9],[2,4,9,12],[4,7,10,13],[6,8,11,15]];
    $asd = array_merge($array[0],$array[1],$array[2],$array[3]);
    $asdf = count($asd);

    echo in_array($target,$asdf);
