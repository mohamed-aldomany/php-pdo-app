<?php

$servername = 'localhost';
$username	= 'root';
$password   = '';
$dbname		= "dpo";


try{
	$connect	= new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);

}catch(PDOException $e){

	echo "ERROR : ".$e;
}

include_once 'insert.php';

$person = new person($connect);


?>