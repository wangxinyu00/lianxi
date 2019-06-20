<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 2019/6/20
 * Time: 8:43
 */
function ReverseSentence(){
    $str = "student. a am I";

    $arr = explode(' ',$str);

    $arr = array_reverse($arr);

    $res = implode(' ',$arr);

    print_r($res);
}
return ReverseSentence();

