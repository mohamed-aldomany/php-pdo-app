<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'book';

try{
	$db = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
}catch(PDOException $e){
	die ("Check Connection To Database");
}




