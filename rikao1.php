<?php 
  function rikao1()
  {
  	$str = 'Have you ever gone shopping and';
  	$arr = [];

  	for ($i=0; $i <strlen($str) ; $i++) 
  	{ 
  		if (array_key_exists($str[$i],$arr)) 
  		{
  			$arr[$str[$i]]+=1;
  			if ($arr[$str[$i]]==3) 
  			{
  				echo "第一个字母出现三次的是 : ".$str[$i];die;
  			}
  		}
  		else
  		{
  			$arr[$str[$i]]=1;
  		}
  	}
  }

  return rikao1();



 ?>