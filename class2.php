<?php
class MailManager
{
	public $email;
	public $students;
	
	function setData(string $email, Students $students) {$this->email=$email;}
	
	
	function getThis(){var_dump($this->students->getStudentThis());}
	
	
	
	
	
}
class Students
{
	
	function getStudentThis(){var_dump($this);}
	
	
	
	
}
$mailManager=new mailManager();
$students=new Students();


$students->getStudentThis();
$mailManager->setData('pupkin@com.uf', $students);
$mailManager->getThis();

?>