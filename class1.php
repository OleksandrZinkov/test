<?php  

class User{   

function getClassType(string $name){
	
	return __CLASS__ . ' ' .$name;
	
}
function formatResult(string $result){return $result . "\n";}

}

$user = new User();
$result=$user->getClassType('user');

//$user2 = clone User();
//$result=$user2->getClassType('user');

//var_dump($user2); 
$admin= new User();
//$result2=$admin->getClassType('admin');

//echo $result,'<br>';
//echo $result2,'<br>';
$result=$user->formatResult('result');
echo $result,'<br>';
?>

