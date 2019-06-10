<?php

/*
	 *class&object :
	
	 -class  = is a blueprint that you can create an object from it .
	 -object = is a member in the main application.
	 -class has properties.
	 -variable inside class is (property).
	 -variable outside class is (variable).
	 -default value : used in properites in class as a default value that uses when there is no update in the token pbject.
	 -self vs $this :
	 	* self : refer to current class  //  not use ($) because it is not variable
	 	* $this : refer to current object  //  use ($) because it is variable

	 **keys :
	 -[class name {}]				 --> used to define a class.
	 -[$objectName = new className] 	 --> used to define an object.
	 -[->]							 --> used to add value to an object.
	 -[$this] pseudo variable used to refer to object property.

	 ***Ex:
	 -web app registeration:
	 -class  		= WebRegisteration
	 -object     	= admin,users,etc........
	 -application	= web app registeration  
*/

class AppleDevice{
	//properites:
	public $ram;
	public $inch;
	public $size;
	public $price;
	public $color;
	public $ownerName;
	public function welcome(){
		if (strlen($this->ownerName)<3) {
			echo "your name is less than 3 character";
		}else{
			echo "welcome in our mobile Apple";
		}
	} 

}
//new product from AppleDevice:
$iphone = new AppleDevice();
$iphone -> ram='2GB';
$iphone -> inch='5 inch';
$iphone -> size='32GB';
$iphone -> price=7500;
$iphone -> color='black';
$iphone -> ownerName='mohamed';
$iphone -> welcome();
echo "<pre>";
var_dump($iphone);
echo "</pre>";

//another one from AppleDevice:
$ipad = new AppleDevice();
$ipad -> ram='4GB';
$ipad -> inch='8 inch';
$ipad -> size='16 GB';
$ipad -> price=12000;
$ipad -> color='white';
$ipad -> ownerName='ahmed';
$ipad -> welcome();
echo "<pre>";
var_dump($ipad);
echo "</pre>";

?>