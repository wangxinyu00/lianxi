<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 2019/5/17
 * Time: 8:46
 */

function UglyNumber($number)
{
    while ($number%2 == 0){
        $number = $number/2;
    }
    while ($number%3 == 0){
        $number = $number/3;
    }
    while ($number%5 == 0){
        $number = $number/5;
    }
    if($number == 1){
        return 1;
    }else{
        return 0;
    }
}

function chou()
{
    $max = 20;
    $number = 0;

    for($i=0;;$i++)
    {
        if($this->UglyNumber($i))
        {
            $number ++;
            if ($number == $max)
            {
                echo "第 ".$number." 位是 ".$i;
                break;
            }
        }
    }

}






























