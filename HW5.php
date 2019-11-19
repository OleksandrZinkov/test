<?php
class Into 
{
	//public $name;
	//public $email;
	
	public function getClassName()
	{
		
		echo __CLASS__;
	}
}	
	$I=new Into;
	$I->getClassName();
	var_dump($I);
	
	
	//public function renderAccount()
	//{
	//	echo $this->name,' ', $this->email;
	//}



class Math{
	
	public $n;
	public $nn;
	
	public function calcFactorial($value=5)
	{
		//$m=$this->n;
		if (gettype($value)=="integer" and $value>=0)
			{
	
	            $y=1;
	
	            for ($i = 1; $i <= $value; $i++) {$y=$y*$i;}
	
	return ($y);
	}
	
	
	else {$y="ANTICORRECT DATA";  }
		
		
		return ($y);
       }
	   
	  public function Rechner($a="sum",$b=1,$c=1)
{
       
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
	   
	   
	   
	   
   }
echo '<br>';
$number1=new Math;
$number2=new Math;
$number3=new Math;
$number4=new Math;
$number5=new Math;
$number6=new Math;
$number7=new Math;
echo '<br>';
$number1->n=5.5;
echo '<br>';
echo $number1->calcFactorial(-1);
echo '<br>';
var_dump($number1);
echo '<br>';
echo $number2->Rechner("sum",10,10), '<br>';
echo $number3->Rechner("subtract",7,2),'<br>';
echo $number4->Rechner("divide",5.5,3.2),'<br>';
echo $number5->Rechner("multiply",3,2),'<br>';
echo $number6->Rechner("divide",4,0),'<br>';
echo $number7->Rechner(),'<br>';

class Massiv
{
	public $assortvalue;
	public $sortvalue;
	
	public function setArray($value1)
	{
		$this->assortvalue=$value1;
		$this->sortvalue=sort($this->assortvalue);
		
	}
	
	public function getArray()
	{
		
		
		
		print_r($this->assortvalue);
		
	}
	
}
$a=[1,6,4,8,9,4,2,0,3,6,4,9];
$tab=new Massiv;
$tab->setArray($a);
echo '<br>';
$tab->getArray();
echo '<br>';
//$b= sort($a);
//print_r( $a);
//var_dump($b);
//var_dump($tab->value);








