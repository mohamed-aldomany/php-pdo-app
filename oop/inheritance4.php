<?php
	/*
		-inheritance 		: is a mechanism in which one object acquires all the properties and behaviors of parent object.
		-super,parent class : it is class that inherit its properites and methods to another classes.
		-child class   		: it is class that inherit properites and methods of another classes.
		-override  			: If subclass has the same method as declared in the parent class, it is known as method overriding . 
		-final keyword      : The final keyword is used to restrict the user (not extendable). used for : 
								1-variable
    							2-method
    							3-class
    							


	*/

	class mobileDetails{
		public $ram;
		public $memory;
		public $inch;
		public $camera;
		public $initialPrice;
		public $color;
		public $name;
		public function setValue($r,$m,$in,$ca,$ip,$co,$na){
			$this->ram 			= $r;
			$this->memory 		= $m;
			$this->inch 		= $in;
			$this->camera 		= $ca;
			$this->initialPrice = $ip;
			$this->color 		= $co;
			$this->name 		= $na;

		}
		public function sayHello(){
			echo "welcome in our mobile ".$this->name;
		}
	} 

		class Apple extends mobileDetails{
			
			public $lockSecurity;

		}
			
		class Sony extends mobileDetails{
				
			public $cameraProff;
			
		}	

		$iphone = new Apple();
		$iphone->setValue("2GB","32GB","5.5 INCH","25MB","9500","SILVER","iphone");
		$iphone->sayHello();
		echo "<pre>"; 
		print_r($iphone) ;
		echo"</pre>";

		$xperiaz = new Sony();
		$xperiaz->setValue("2GB","32GB","5.5 INCH","25MB","9500","SILVER","Sony");
		$xperiaz->sayHello();
		echo "<pre>"; 
		print_r($xperiaz) ;
		echo"</pre>";


?>