<?php

	interface dbConnect{
		public function getUser();
		public function getStat();
		public function getInfo();		
	}

	class project implements dbConnect {

		public function getUser() {
			echo "Welcome ya user";
		}
		public function getStat() {
			echo "Welcome ya stats";
		}
		public function getInfo() {
			echo "welcome ya information";
		}	
	}

	$row = new project();
	$row->getUser();
	$row->getStat();
	$row->getInfo();

	echo "<pre>";print_r($row);echo "</pre>";
?>