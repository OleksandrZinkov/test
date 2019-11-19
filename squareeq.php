<?php
       $Name= "Zinkovskyi Oleksandr";
       
      
       echo "$Name \n";
      // echo '$Name \n'
	  //echo '<br>';
?>

<?php
       $Name= "Zinkovskyi Oleksandr";
       
       print "$Name \n";
      // print '$Name \n';
       
?>

<?php
       $Var1= "concatenated";
       
       echo "'This is a $Var1 string' \n";
       
      // echo gettype($Var1);
?>

<?php
       $a= "house";
      echo ' Variale $a is ' ;
     echo  gettype($a); 
     
      $b= 1024;
       echo ' Variale $b is ';
      echo  gettype($b);
       
       $c= true;
        echo ' Variale $c is ';
      echo  gettype($c); 
      
      $d= 3.141592;
       echo ' Variale $d is ';
      echo  gettype($d);
      //не могу их разделить по строкам
?>

<?php
      $words = array('scripting', 'development', 'PHP', 'especially');
       echo "'$words[2] is a popular general-purpose $words[0] language that is $words[3] suited to web $words[1]' \n";
?>
<?php
      $words = [
          0=> 'scripting',
      1=> 'development',
      2=> 'PHP',
      3=> 'especially'
      ];
       echo "'$words[2] is a popular general-purpose $words[0] language that is $words[3] suited to web $words[1]'";
?>
<select>
<?php
     for ($i=1910; $i<=2010; $i++) {echo "<option value=\"$i\">$i</option>";}

?>
<select>
