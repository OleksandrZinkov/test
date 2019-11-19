<?php
function PALINDROM($string2='dogeeseseegod')
{ 
$reverstring=''; 
$nn=strlen($string2);
   
	for($i=$nn;$i==0;$i--) 
	{$reverstring.="$string2[$i]";}
                    		
		                   if ($string2==$reverstring)  
							{$result='yes';}  
							else {$result='not';}
							
		return("$string2"."$reverstring");  
}



echo PALINDROM('mttttyy'),'<br>';
var_dump(PALINDROM('nan'));
//$t='fffffff';
//echo $t[2];

?>
<?php
//$string1='хуй';
//$reverstring=''; 
//$n=strlen($string1);
   
//	for($i=4;$i>=1;$i--)
		
	//{
	//	$reverstring.=$string1[$i]; 
	//	echo $reverstring,'<br>';
//echo $string1;
	//}


//echo "$reverstring[2]",'<br>';
//echo $string1;
?>
<?php
$string1='madamfdgrgtt';
$reverstring=''; 
$n=strlen($string1);
   
	for($i=$n;$i==0;$i--)
		
	{
		$reverstring.=$string1[$i]; 
		echo $reverstring,'<br>';
echo $string1,'<br>';
	}
if ($string1===$reverstring) {$res=true;} else {$res=false;}
echo $res;
var_dump($res);

echo $reverstring,'<br>';

echo $string1;
?>