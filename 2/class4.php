<?php
interface Walkable
{
	public function walk(string $direction=null);
}
interface Huntable
{
	public function ishunt():bool;
}

interface Flying
{
	public function speed(int $vaue);
	public function altitude(int $vaue);
}
class Wolf implements Walkable, Huntable
{
	public function walk(string $direction=null)
	{
		echo 'I am walking in direction   '.$direction;

	}
	
	public function ishunt():bool
	{
		return true;
	}
	
}

class Vogel implements Flying
{
	public function speed(int $value)
	{
		echo $value;
	}
	public function altitude(int $value)
	{
		echo $value;
	}
}

$vogel=new Vogel();

if ($vogel instanceof Walkable)
{echo 'walk';}
elseif ($vogel instanceof Flying) 
{echo 'fly with speed',$vogel->speed(100); $vogel->altitude(500);}
else {echo 'can\'t walk';}

$wolf=new Wolf;
$wolf->walk('top to sky');
echo "<br>";
echo ($wolf->ishunt())? 'yes':'no';
