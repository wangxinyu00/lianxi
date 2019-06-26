<?php 

$target = 7;

$array = [[1,2,8,9],[2,4,9,12],[4,7,10,13],[6,8,11,15]];


$con = array_merge($array[0],$array[1],$array[2],$array[3]);

$count = count($con);


if (in_array($target,$con)) 
{
	echo 'true';
}
else
{
	echo 'false';
}







 ?>