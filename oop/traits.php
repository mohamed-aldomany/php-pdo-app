<?php
trait fingrePrint{
	public function fingreFeature(){
		echo "this allow the fingre feature<br>";
	}
}
trait faceDetect{
	public function faceDetect(){
		echo "this allow the face Detect<br>";
	}
}
trait threeDimenstion{
	public function threeDimensiion(){
		echo "this allow the three Dimensiion<br>";
	}
}
class iphone{
	use fingrePrint;
	use faceDetect;
	use threeDimenstion;
}
class xperia{
	use faceDetect;
}
class j7{
	use fingrePrint;
}

$fmobile = new iphone();
$fmobile->fingreFeature();
$fmobile->threeDimensiion();
$fmobile->faceDetect();
echo "<pre>";print_r($fmobile);echo "</pre>";

$smobile = new xperia();
$smobile->faceDetect();
echo "<pre>";print_r($smobile);echo "</pre>";

$tmobile = new j7();
$tmobile->fingreFeature();
echo "<pre>";print_r($tmobile);echo "</pre>";
?>
