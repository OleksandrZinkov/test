<?php
function minarray($a=[10,8,5,6,8,1])
{ 
$mn=$a[0]; 

    
	for($i = 1;$i < count($a); $i++)
                    		{
		                    if ($a[$i]<$mn)  
							{$mn=$a[$i];}  
							//else {$mn=$mn;}
							} 
		return($mn);     
}

$tt=minarray( [10,9,8,7,6,4,3,2,1]);
echo $tt;
?>
<?php
function minarray1($a=[10,8,5,6,8,1])
{ 
$mn=$a[0]; 
$n=count($a);
    
	for($i = 1;$i <= $n; $i++)
                    		{
		                    if ($a[$i]<$mn)  
							{$mn=$a[$i];}  
							else {$mn=$mn;}
							} 
		return($mn);     
}

$tt1=minarray1( [10,9,8,7,6,-5,4,3,2,1]);
echo $tt1;






?>