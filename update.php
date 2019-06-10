<?php

require 'connect.php';

$name = 'mostafa';
$message = 'my name is mostafa';
$id = 1;


/*
1) exec :
$db->exec("UPDATE guest SET name='$name',message='$message' WHERE id='$id'");

2) query:
$db->query("UPDATE guest SET name='$name',message='$message' WHERE id='$id'");


3) prepare has two types in  solution
-i) 
$stmt = $db->prepare("UPDATE guest SET name=:name,message=:message WHERE id=:id");
$stmt->execute(array(':id'=>$id,':name'=>$name,':message'=>$message));

-ii)
$stmt = $db->prepare("UPDATE guest SET name=:name,message=:message WHERE id=:id");
$stmt->bindParam(':id',$id);
$stmt->bindParam(':name',$name);
$stmt->bindParam(':message',$message);
$stmt->execute();
*/

