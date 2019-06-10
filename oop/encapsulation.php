<?php

class encapsulate{
	public $uname;
	public $usalary;
	public $ugender;
	private $upassword;
	public function lockPass($name,$salary,$gender,$pass)
	{
		$this -> uname     = $name;
		$this -> usalary   = $salary;
		$this -> ugender   = $gender;
		$this -> upassword = sha1($pass);
	}
}

$first = new encapsulate();
$first -> lockPass("mohamed",150,"male","mohamed1441997");
echo "<pre>";
var_dump($first);
echo "</pre>";

?>