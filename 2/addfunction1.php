
<?php
//рандомно заповнюємо масив з 10 елементів та шукаємо номер елемента, що дорівнює "3", якщо такого нема виводимо відповідне повідомлення
$v=range(1,10);

echo $v[9], '<br>';


for ($i=0;$i<=9;$i++)
{$v[$i]=rand(1,5); echo $v[$i], '<br>';}
$vv=3;

for ($i=0;$i<=9;$i++)
{if ($v[$i]==$vv){$y=$i; break;} else {$y="NOT ELEMENT";} }

echo 'INDEX OF NUMBER=',$y,'<br>';

?>
<?php
//function minarray2($aray2)
//{ 
//$min=0; $n=count($aray2);
   // foreach($array2 as $value) {$min=$min+$value;}
		                   
	//	return($min);     
//}
//$tt=minarray2($v);
//$t=count($v);
//echo $tt;
?>




<?php
function minarray($a=[10,8,5,6,8,1])
{ 
$mn=$a[0]; 
$n=count($a);
    
	for($i = 1;$i < 10; $i++)
                    		{
		                    if ($a[$i]<$mn)  
							{$mn=$a[$i];}  
							else {$mn=$mn;}
							} 
		return($mn);     
}



?>
<?php

//$zzz=range(1,10);

$tt=minarray( [10,9,8,7,6,-5,4,3,2,1]);
//$t=count($v);
//echo $t;

echo $tt;

?>
<?php
function minarray1($a=[8,10,5,6,8,1])
{ 
$mn=$a[0]; $n=count($a);
    
	$i = 1;
while ($i <= 10) {
      
                    		
		                    if ($a[$i]<$mn)  
							{$mn=$a[$i];}  
							else {$mn=$mn;}
							$i++;
		    
}
return($mn); }


$tttt=minarray1( );
//$t=count($v);
//echo $t;

echo $tttt,'<br>';



?>
<?php
function maxarray1($a=[1,3,5,6,8,19])
{ 
$mx=$a[0]; $n=count($a);
    
	$i = 1;
while ($i <=11) {
      
                    		
		                    if ($a[$i]>$mx)  
							{$mx=$a[$i];}  
							else {$mx=$mx;}
							$i++;
	     
}

return($mx); }


$ttttt=maxarray1([100,50,70,23,200] );
//$t=count($v);
//echo $t;

echo $ttttt,'<br>';



?>


<?php
$af='шалаш';
$gg='монтаж';

$ff=$af.$gg;
echo $ff;

?>