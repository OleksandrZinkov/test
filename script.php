<?php
       $Name= "Zinkovskyi Oleksandr";
       
      
       echo "$Name \n";
      // echo '$Name \n'
	  //echo '<br>';
?>
<?php
      // $a= 1;
	  // $b= 2;
	  // $c= 1;
      // $D=$b*$b-4*$a*$c;
     // if ($D==0) {echo (-$b+sqrt($D))/2/$a ;}
     // elseif ($D>0) { echo (-$b+sqrt($D))/$a ;}
	 // else {echo 'NOT solution';}
       
?>

<?php
     // function sqeq1($a,$b,$c)
//{
      // $D=$b*$b-4*$a*$c;
     // if ($a!==0) {
	//	                        $x1=(-$b+sqrt($D))/2/$a ; return($x1);
	//	                       }
                   //elseif ($D>0) {
					  // echo 'x1=',(-$b+sqrt($D))/$a ; echo '<br>','x2=',(-$b-sqrt($D))/$a ;
	//				              }
	               //else {
					//   echo 'NOT solution';
					//   }
			       
       //else {echo "This is not square equation";}
//}
       
?>
<?php
function sqeq($a,$b,$c)
{
       $D=$b*$b-4*$a*$c;
      if ($a!==0) {if ($D==0) {
		                        $x1=(-$b+sqrt($D))/2/$a ; return($x1); return($x2);
		                       }
                   elseif ($D>0) {
					   $x1=(-$b+sqrt($D))/2/$a ; $x2=(-$b-sqrt($D))/2/$a ; return($x1); return($x2);
					              }
	               else {
					   echo 'NOT solution';
					   }
			       }

       else {echo "This is not square equation";}
}
?>
<?php
for ($i = 1; $i <= 100; $i++) {
  echo sqeq(mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10));
 echo '<br>'; ;
}
echo sqeq(mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10));       
?>



<?php
//if ($a > $b) {
   // echo "a больше, чем b";
//} elseif ($a == $b) {
  //  echo "a равен b";
//} else {
 //   echo "a меньше, чем b";
//}
?>
<?php
       $a= 1;
	   $b= 2;
	   $c= 1;
       $D=$b*$b-4*$a*$c;
      if ($a!==0) {if ($D==0) {echo 'x1=x2=',(-$b+sqrt($D))/2/$a ;}
      elseif ($D>0) { echo 'x1=',(-$b+sqrt($D))/$a ; echo '<br>','x2=',(-$b-sqrt($D))/$a ;}
	  else {echo 'NOT solution';}}

	  else {echo "This is not square equation";}
		  
		  
		  
		  
		  
		  
		  //if ($D<0) 
		 // echo "$a"
			  
			 // else 
				 // echo "1"
				// echo '<br>'; 
				// echo $D+1; 
       //else 
		   
	   //echo 'С”С‚Рѕ РЅРµ РєРІР°РґСЂР°С‚РЅРѕРµ СѓСЂР°РІРЅРµРЅРёРµ'



      //'x=(-$b+sqrt($D))/2/$a'
       
      // $d=sqrt(4);
       
      // echo "$d";
?>