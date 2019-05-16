<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 2019/5/16
 * Time: 8:48
 */

$n = 1;
$m = 13;

function index($x,$y)
{
    $data = [];
    for($i = $x;$i <= $y; $i++)
    {
        $data[] = substr_count($i,1);
    }

echo  "1 出现 ".array_sum($data)." 次";
}
return index($n,$m);
