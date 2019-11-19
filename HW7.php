<?php



//class StringFormater1{
	
	
//public function __get($name)
//{
	//return (strtoupper($name));
//}
	
//}
//$stringFormater1 = new StringFormater1();

//$stringFormater->name = 'uSeRnaMe';

//echo $stringFormater1->name; 




class StringFormater{
	
	//private $name;
	
	public function __get($name)
{
	return (strtoupper($name));
}
	
public function __set($name,$name1)
{
	echo strtoupper( $name1);
}
	
}

$stringFormater = new StringFormater();

 $stringFormater->name = "uSeRnaMe";

//echo $stringFormater->name; 
echo "<br>";
class Concatenator{


static function 	prepareString($string)
{

$string2=strtolower($string);
echo $string;
echo "<br>";
echo $string2;
echo "<br>";
for($i = 0;$i <= strlen($string)-1; $i++)
{
	if ($string2[$i]==' ')   {$string2[$i]='+';} 
	else                     {$string2[$i]=$string2[$i];}

}
echo $string2;
echo "<br>";	
}	
	

}





$concatenated = Concatenator::prepareString('I Am ConcaTenaTed');

echo $concatenated; // i+am+ConcateNated


class Filter{
	public $string;
	
	function __construct(array $string){$this->string=$string;}
	
	public function getNumbers(){
	$string2=$this->string;
	$ar[]=0;
	
	{
		for($i = 0;$i <=count($string2)-1 ; $i++)
{
	if (gettype($string2[$i])==='INT')   {$ar[$i]=$string2[$i];} 
	else                     {$ar[$i]=0;}
echo $ar[$i];
}
	}
	//public function getStrings()
	//{}
	
	
}





// Напишите класс который будет фильтровать массив путем удаления его элементов. Только с использованием магических методов!. Вызов класса будет такой:

$filter = new Filter(['f', 2, 't', 7, 2, 'k']);

$filter->getNumbers(); //[2,7,2]

//$filter->getStrings(); // ['f', 't', 'k']

var_dump( $filter->string);