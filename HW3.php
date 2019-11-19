<?php
function Farengheit($a,$b="F")
{// функция переводит градусы Цельсия в градусы Фаренгейта(по умолчанию) "F" и наоборот "C" либо чтото
       
      if ($b=="F") {$y = ($a * 1.8) + 32;
		                      return($y); }
                   

       else {$y = ($a - 32) * 0.55;
	   return($y);}
}
?>
<?php
echo Farengheit(100,"n");




?>

<?php
function Rechner($a,$b,$c)
{// функция переводит градусы Цельсия в градусы Фаренгейта(по умолчанию) "F" и наоборот "C" либо чтото
       
      if ($a=="sum") {$y = $b+$c;
		                                       return($y); }
         elseif ($a=="subtract")  {$y = $b-$c;
		                                       return($y); }        
         elseif ($a=="divide")  {
			                      if ($c==0) {
									            $y="!!!division by zero!!!"; return($y);
		                                      }   
		                         else {
									     $y = $b/$c;
		                                 return($y); }
							    }
       elseif ($a=="multiply")  {$y = $b*$c;
		                                        return($y); }
	   
	   else {$y = "ANTICORRECT OPETATION";
		                                        return($y); }

}

?>
<?php
echo Rechner("sum",10,10), '<br>';
echo Rechner("subtract",7,2),'<br>';
echo Rechner("divide",5.5,3.2),'<br>';
echo Rechner("multiply",3,2),'<br>';
echo Rechner("divide",4,0),'<br>';
?>

<?php

//Операция - строковое значение (например, 'sum', 'subtract,', 'divide', 'multiply')
///Число1 - любое число типа int или float
///Число2 - любое число типа int или float


?>
<?php
function validate($a,$b,$c){
	if ($c=="lessthan") 
	                     {if (gettype($b)=="integer")   
						                             {if ($b>$a)  {$y=1; $z=(boolean)$y; return($z);} 
												      else{$y=0; $z=(boolean)$y; return(var_dump($z));} 
													  }      
						  else                    { 
						                             {
														 if (strlen($b)>$a) {$y=1; $z=(boolean)$y; return(var_dump($z));} 
						                                 else               {$y=0; $z=(boolean)$y; return(var_dump($z));} 
												      }  
												  }
						}
	elseif ($c=="greaterthan") 
	                        {if (gettype($b)=="integer")   
						                             {if ($b<$a)  {$y=1; $z=(boolean)$y; return(var_dump($z));} 
												      else{$y=0; $z=(boolean)$y; return(var_dump($z));} 
													  }      
						  else                    { 
						                             {
														 if (strlen($b)<$a) {$y=1; $z=(boolean)$y; return(var_dump($z));} 
						                                 else               {$y=0; $z=(boolean)$y; return(var_dump($z));} 
												      }  
												  }
						}
	elseif ($c=="equals") 
	                     {if (gettype($b)=="integer")   
						                             {if ($b==$a)  {$y=1; $z=(boolean)$y; return($z);} 
												      else{$y=0; $z=(boolean)$y; return(var_dump($z));} 
													  }      
						  else                    { 
						                             {
														 if (strlen($b)==$a) {$y=1; $z=(boolean)$y; return(var_dump($z));} 
						                                 else               {$y=0; $z=(boolean)$y; return(var_dump($z));} 
												      }  
												  }
						}
	 
	
	else {$y="ANTICORRECT OPETATION"; return($y);}
	
	
	
}


?>
<?php
echo (bool)validate(1,2,'lessthan'), '<br>';
echo validate(1,2,'greaterthan'), '<br>';
echo validate(4,'test','equals'), '<br>';
echo validate(5,'test','lessthan'), '<br>';
echo validate(5,'test','мммм'), '<br>';
?>
<?php

//3. Написать функцию которая будет валидировать (проверять на правильность) данные.

//Функция должна принимать следующие аргументы:

//Аргумент1 - первый аргумент, может быть числом

//Аргумент2 - второй аргумент, может быть числом или строкой

//Операция - операция проверки, может иметь следующие значения:

//“lessthan’ - проверить что Аргумент1 меньше Аргумент2
//‘greaterthan’ - проверить что Аргумент1 больше Аргумент2
//‘equals’  - проверить что Аргумент1 равен Аргумент2
//Если второй аргумент является строкой, то следует работать только с  его длиной, а не значением, вычислив длину строки в байтах с помощью strlen($arg2). Для определения типа Аргумента2 можете использовать функцию gettype.

//Функция должна возвращать только булево значение: true - если значения Аргумент1 и Аргумента2 удовлетворяют требования Операции или иначе false.

//Примеры вызова функции и результаты:

//validate(1, 2, ‘lessthan’); // должно быть true
//validate(1, 2, ‘greaterthan’); // должно быть false
//validate(4, ‘test’, ‘equals); // должно быть true
//validate(5, ‘test’, ‘lessthan’); //должно быть false


?>