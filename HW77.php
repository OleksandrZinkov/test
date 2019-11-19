<?php

	function getNumbers($string2){
	
	$ar[]=null;
	
	{
		for($i = 0;$i <=count($string2)-1 ; $i++)
{
	if (gettype ($string2[$i])==='integer')   {$ar[$i]=$string2[$i];} 
	else                     {$ar[$i]=0;}
echo $ar[$i];
echo "<br>";

}
	}
	var_dump($ar);
	}
	
	
	getNumbers(['f', 2, 't', 7, 2, 'k']);
	echo "<br>";
	$a=2;
	echo  gettype($a);
	echo "<br>";
	$d='ghhj';
	echo  gettype($d);
	echo "<br>";
	
	