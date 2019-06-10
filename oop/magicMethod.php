<?php
/*
	Magic Methods : Methods with special name start with double underscore then name of method (__NAME_OF_METHOD).

	1-)construct :
		-called when the object is created.
		-can be inherited to another class.
	2-)destruct  :
		-called when the object is destroyed.	
	3-)call 	 :
		-called when method not accessable or not found.
		-accept two arguments ($name,@parameters).
	4-)get  	 :
		-called when property not accessable or not found.
		-accept one argument ($name).
	5-)set 		 :
		-called when setting a value to a property not accessable or not found.
		-accept two arguments ($name,@parameters).			
*/

class iphone{

	public $ram;
	public $name;


    /* *********************************constructor without arguments:*******************************************
    public function __construct(){
		echo "say hello";
	 }*/
	/**********************************constructor with arguments************************************************
	public function __construct($n,$r){
		$this->name = $n;
		$this->ram  = $r;
		echo "Welcome ".$n."Your ram is ".$r." Ram";
	}*/ 
	/*********************************call method******************************************************************
	public function __call($method,$params){
		echo "the function [".$method."]dosent exist";
	}*/
	/*********************************get method******************************************************************
	public function __get($name){
		echo "this property [".$name."] is not found";
	}*/
	/*********************************set method******************************************************************
	public function __set($name,$arg){
		echo "this property [".$name."] is not found<br>"."and this value [".$arg."] not allowed";	
	}*/
	
}

//$mobile = new iphone("mohamed",32);   constructor object function.

/*$mobile = new iphone();               call object function .
$mobile->sayHello();*/

/*$mobile = new iphone();				get object function .
$mobile->memory ; */

/*$mobile = new iphone();					set object function .
$mobile->memory="64GB" ;*/ 



?>