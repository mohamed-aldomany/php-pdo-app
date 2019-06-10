<?php
	/*
		Abstract :
		-cannot be instiated (cannot create an object from it).
		-have methods and properites.
		-made for other classes to inherit properites and method.
		-abstract method doesnt have a body of code. 
	*/
	abstract class mobileDetails{
		 public $ram;
		 public $name;
			abstract public function sayHello();
			abstract public function sayBye($bye);
			} 

		class Apple extends mobileDetails{
			public function sayHello(){
				echo "hello world ";
			}
			public function sayBye($m){
				$this->ka = $m;
				echo "bye ".$m;
			}

		}
			

		$iphone = new Apple();
		$iphone->ram = "6GB";
		$iphone->sayHello();
		$iphone->sayBye("mohamed");
		echo "<pre>"; 
		print_r($iphone) ;
		echo"</pre>";



?>