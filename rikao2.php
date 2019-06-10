100 - 10000 之间的 水仙花数
<?php 
$n = 100;
$m = 10000;

function lifang($f)  //  函数定义
{
	return $f*$f*$f;   //  返回值 
}

function flower($f) //  以下是 每一位数字的计算   当中 有 函数调用
{
	$hundreds = floor($f / 100);
	$tens = floor($f / 10) %10;
	$ones = floor($f %10);
	return (bool)(lifang($hundreds)+lifang($tens)+lifang($ones)==$f); //返回值 等于 本身 
}

for ($i=$n; $i < $m; $i++) 
{ 
	if(flower($i))
	{
		echo "</br> </br>". $i;
	}
}



 ?>