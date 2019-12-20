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
	
	public function calcFactorial()
	{
		$m=$this->n;
		if (gettype($m)=="integer" and $m>=0)
			{
	
	            $y=1;
	
	            for ($i = 1; $i <= $m; $i++) {$y=$y*$i;}
	
	//return($y);
	}
	
	
	else {$y="ANTICORRECT DATA";  }
		
		
		$this->nn=$y;
       }
   }

$number1=new Math;
$number1->n=5.5;
$number1->calcFactorial();
var_dump($number1);

