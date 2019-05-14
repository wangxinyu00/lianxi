<?php 

function qaing($num){
    if($num==1){
        return 1;
    }else if($num==2){
        return 2;
    }else{
        return qaing($num-1)+qaing($num-2);
    }
}
echo "青蛙跳上一个 N 级的台阶 共有 ". qaing(10) ." 种跳法";


echo "</br>";
echo "</br>";
echo "</br>";

echo  "这里的 N 用具体的数字来表示 , 现在所得结果是 青蛙跳 十级 台阶所得";







 ?>