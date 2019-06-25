<?php 

$str = 'aabbcddeeffgg';
 
function FirstNotRepeatingChar($str){
	$res = -1;
	$arr = str_split($str);
	foreach ($arr as $k => $v) {
		$end = strrpos($str,$v);
		$begin = strrpos($str,$v);
		if ($end == $begin) {
			$res = $k;
			break;
		}
	}
	return $res;
}
echo FirstNotRepeatingChar($str);








 ?>