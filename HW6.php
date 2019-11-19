<?php


abstract class User
{
	abstract function getRole();
	
}
class Admin extends User

{    public $role;

	public function getRole(){
		$this->role=__CLASS__;
		echo __CLASS__;
		
}
}
class Viewer extends User

{    public $role;

	public function getRole(){
		$this->role=__CLASS__;
		echo __CLASS__;
}
}		
class Moderator extends User

{    public $role;

	public function getRole(){
		$this->role=__CLASS__;
		echo __CLASS__;

}
}
$admin=new Admin;
$admin->getrole();
echo '<br>';
var_dump($admin);
echo '<br>';
$viewer=new Viewer;
$viewer->getrole();
echo '<br>';
var_dump($viewer);
echo '<br>';
$moderator=new Moderator;
$moderator->getrole();
echo '<br>';
var_dump($moderator);


abstract class Wagen
{
	abstract function itsWagen();
}

    abstract class Speed
{
	public function accelerate($value)
	{
		
	}
	
	public function decelerate($value)
	{
		
	}
}
interface moveable
{
	public function getMotorType();
}
interface haveable
{
	public function getDoorsCount();
	public function getWheelCount();
}
interface fireable
{
	public function fire();
	
}
class Car extends Speed implements moveable, haveable 
{
	public $speed=0;
	
	public function accelerate($value)
	{
		$this->speed=$value;
		//echo $speed;
	}
	
	public function decelerate($value2)
	{ 
		$this->speed=$this->speed-$value2;
		//return $speed;
	}
	
	public function getMotorType(){echo 'motor';}
	
	public function getWheelCount() {echo ' 4 wheels';}
	public function getDoorsCount()  {echo '4 doors';}
} 

class Bike extends Speed implements moveable, haveable 
{
	public $speed=0;
	
	public function accelerate($value)
	{
		$this->speed=$value;
		//echo $speed;
	}
	
	public function decelerate($value2)
	{ 
		$this->speed=$this->speed-$value2;
		//return $speed;
	}
	
	public function getMotorType(){echo 'muskul';}
	
	public function getWheelCount() {echo '2 wheels';}
	public function getDoorsCount()  {echo 'not doors';}
} 
class Panzerkampfwagen extends Speed implements moveable, haveable, fireable 
{
	public $speed=0;
	
	public function accelerate($value)
	{
		$this->speed=$value;
		//echo $speed;
	}
	
	public function decelerate($value2)
	{ 
		$this->speed=$this->speed-$value2;
		//return $speed;
	}
	
	public function getMotorType(){echo 'motor';}
	
	public function getWheelCount() {echo 'not wheels';}
	public function getDoorsCount()  {echo '3 Lukes';}
     public function fire(){echo 'FIRE!!!!';}
public function getСaterpillar(){echo '2 tracks';}
}

echo '<br>';
$car=new Car;

echo '<br>';

echo $car->getWheelCount(); //вернет количество колес
echo '<br>';
echo $car->getDoorsCount(); // вернет количество дверей
echo '<br>';
echo $car->getMotorType(); // вернет тип двигателя: мотор или мускулы
echo '<br>';
echo $car->accelerate(100); // установить скорость 10 км/ч
echo '<br>';
echo $car->decelerate(5); 
echo '<br>';
var_dump ($car);
echo '<br>';
$bike = new Bike();
echo '<br>';
echo $bike->getWheelCount(); //вернет количество колес
echo '<br>';
echo $bike->getMotorType(); // вернет тип двигателя: мотор или мускулы
echo '<br>';
echo $bike->accelerate(50); // установить скорость 10 км/ч
echo '<br>';
echo $bike->decelerate(15); // уменьшить скорость до 5 км/ч
echo '<br>';
var_dump ($bike);
echo '<br>';

$tank = new Panzerkampfwagen();
echo '<br>';
echo $tank->getСaterpillar(); //вернет количество траков гусеницы
echo '<br>';
echo $tank->getMotorType(); // вернет тип двигателя: мотор или мускулы
echo '<br>';
echo $tank->accelerate(10); // установить скорость 10 км/ч
echo '<br>';
echo $tank->decelerate(5); // уменьшить скорость до 5 км/ч
echo '<br>';
echo $tank->fire(); // сделать выстрел, "Бах"
echo '<br>';
var_dump ($tank);