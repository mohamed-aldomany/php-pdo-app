<?php
require 'connect.php';

/*


1) query():
$id=12;
$stmt = $db->query("DELETE FROM guest WHERE id=$id");


2)prepare():
$id=10;
$stmt = $db->prepare("DELETE FROM guest WHERE id=:id");
$stmt->bindParam(':id',$id);
$stmt->execute();
*/