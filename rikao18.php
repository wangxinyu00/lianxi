<?php 

function month()
{
	$num = 10;

	$nume = decbin($num);
	echo json_encode($nume);
	echo '</br>';
	echo '</br>';

	echo '</br>';
	

	echo substr_count($nume, '1');

}

return month();





 ?>