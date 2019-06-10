0<?php
require 'connect.php';

/*
1)query:

$stmt = $db->query("SELECT * FROM guest");

while ($row = $stmt->fetch()){
	echo $row['id'].'<br>';
}

2)
$stmt = $db->prepare("SELECT * FROM guest");
$stmt->execute();

while ($row = $stmt->fetch()){
	echo $row['message'].'<br>';
}


3) fetchColumn() : return the values without array 

$stmt = $db->prepare("SELECT message FROM guest ");
$stmt->execute();
while($row = $stmt->fetchcolumn()){
echo $row.'<br>';
}
*/
