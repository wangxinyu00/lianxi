<?php 


$n = 10;
 function jump($num)  // 函数定义 
 {
 	if ($num == 1) {   //  方法实现 
 		return 1;
 	}else if($num == 2){
 		return 2;
 	}else{
 		return jump($num-1)+jump($num-2);  //  返回值 
 	}
 }
 echo "青蛙跳上 ".$n." 节台阶共有 ".jump($n)." 种跳法";





 ?>