<?php 

function shu($n,$m)  // 函数定义
{
	$num = 0;

	for ($i=$n; $i <=$m ; $i++)   // 方法实现
	{ 
		$j = $i;
		while ($j) 
		{
			if ($j%10 == 1) 
			{
				$num++;
			}
			$j = floor($j/10);
		}
	}
	return $num;   // 返回值 
}
print_r(shu(1,13));





 ?>