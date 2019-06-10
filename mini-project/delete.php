<?php
require 'connect.php';

if (isset($_GET['id'])) {
	$id=$_GET['id'];
	$stmt = $db->query("DELETE FROM detail WHERE id=$id");
	header('Location:dashboard.php');
		
}

?>