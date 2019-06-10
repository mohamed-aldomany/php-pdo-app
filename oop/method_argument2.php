<?php
	

class AppleDevice{
	//properites:
	public $ram;
	public $inch;
	public $size;
	public $price;
	public $color;
	public function setValues($r,$inc,$s,$pr,$col){
		$this-> ram   = $r;
		$this-> inch  = $inc;
		$this-> size  = $s;
		$this-> price = $pr;
		$this-> color = $col;
	}
}

//new product from AppleDevice:

$iphone = new AppleDevice();
$iphone -> setValues("2GB","5 INCH","32GB","13000","SILVER");
echo "<pre>";
var_dump($iphone);
echo "</pre>";

//another one from AppleDevice:
$ipad = new AppleDevice();
$ipad -> setValues("4GB","5.5 INCH","16GB","18000","WHITE");
echo "<pre>";
var_dump($ipad);
echo "</pre>";


?>