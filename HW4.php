<?php

function faktoriall($n){
	//рахуємо факторіяли
	if (gettype($n)=="integer" and $n>=0) {
	
	$y=1;
	
	for ($i = 1; $i <= $n; $i++) {$y=$y*$i
    ; 
}
	
	return($y);}
	
	
	else {$y="ANTICORRECT DATA"; return($y);}
	
	
	
	
}
$t=1;

echo faktoriall(6.6), '<br>';
echo faktoriall(5), '<br>';
echo faktoriall(-5), '<br>';

echo faktoriall(0), '<br>';

echo faktoriall("text"), '<br>';


?>

<?php
//рандомно заповнюємо масив з 10 елементів та шукаємо номер елемента, що дорівнює "3", якщо такого нема виводимо відповідне повідомлення
$v=range(1,10);

echo $v[9], '<br>';


for ($i=0;$i<=9;$i++)
{$v[$i]=rand(1,5); echo $v[$i], '<br>';}
$vv=3;

for ($i=0;$i<=9;$i++)
{if ($v[$i]==$vv){$y=$i; break;} else {$y="NOT ELEMENT";} }

echo 'INDEX OF NUMBER=',$y,'<br>';

?>

<?php
//тренування
$user1 = [
           0 => 'gfgfg' ,

        1 => 'fdgfghrer',

         2 => 'qweer'

        ];

foreach ($user1 as $index=>$value)

{echo "$index=>$value"; $kkk[][]="$index=>$value";}
echo var_dump($kkk);'<br>';

?>
<?php
//спроба розвязання задачі 2
$user = [
           0 => ['street' => 'Blabla street','house' => 100500],

        'has_trees' => false,

         1 => ['citizen' => 'Jobs','social_id' => 'abc1234']

        ];

foreach ($user as $index=>$valuee){

                                   if (is_array($valuee))
								                        { foreach ($valuee as $key => $value2)    { $ttt[] ='$value2';}
														}
									else { $ttt[] ='$valuee';}
									}					

echo '$ttt'; '<br>';
//var_dump ($ttt);
//foreach ($ttt as $index5=>$value5) {echo $ttt[$index5]; echo '$index5'; echo "$value5"; }
?>

<?php




?>
<?php
//те ще робили на лекції, півкроку до розвязання задачі
$user3 = [
           0 => ['street' => 'Blabla street','house' => 100500],

        'has_trees' => false,

         1 => ['citizen' => 'Jobs','social_id' => 'abc1234']

        ];

foreach ($user3 as $index=>$value){

                                   if (is_array($value))
								                        { foreach ($value as $key => $value2)    {echo "$key => $value2", '<br>';}
														}
									else {echo "$index=>$value",'<br>' ;}
									}					



?>
<?php
$d='b';
echo $$d;
?>
