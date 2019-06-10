<?php
/*

spl_autoload_register(function($class){
	require'folderName/'. $class . '.php';
});	
this function used to called the files in one order.

*/


require ('namespace2.php');
require ('namespace3.php');
require ('namespace4.php');
$iphone = new Apple();
$iphone->sayHello();
print_r($iphone);