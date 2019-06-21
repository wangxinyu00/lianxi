<?php 

$n = 1;
$m = 5;
function jia($n,$m)
{
	$res = range($n,$m);
	$xin = array_sum($res);
	return $xin;
}
echo json_encode(jia($n,$m));




 ?>