<?php 

 function month()
 {
	$num = 10;

	$nume = decbin($num);

	echo substr_count($nume,'1');
}
return month();






 ?>