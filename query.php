<?php

include 'connect.php';


$query = $db->query("SELECT * FROM guest");

/* 
FETCH TYPES :

1) fetch() ==> require the data according to the name send in the var $r:

while ($r = $query->fetch()) {
	echo $r['id'].'<br>';
	echo $r['name'].'<br>';
	echo $r['message'].'<br>';
}

2) fetch(PDO::FETCH_BOTH) ==> like the first type of fetch():

while ($r = $query->fetch(PDO::FETCH_BOTH)) {
	echo $r['id'].'<br>';
	echo $r['name'].'<br>';
	echo $r['message'].'<br>';
}

3)fetch(PDO::FETCH_NUM) ==>require the data according to the number send in the var $r:

while ($r = $query->fetch(PDO::FETCH_NUM)) {
	echo $r[0].'<br>';
	echo $r[1].'<br>';
	echo $r[2].'<br>';
}

4) $query->fetch(PDO::FETCH_ASSOC):

while ($r = $query->fetch(PDO::FETCH_ASSOC)) {
	echo $r['id'].'<br>';
	echo $r['name'].'<br>';
	echo $r['message'].'<br>';
}

5)  $query->fetch(PDO::FETCH_OBJ:

while ($r = $query->fetch(PDO::FETCH_OBJ)) {
	echo $r['id'].'<br>';
	echo $r['name'].'<br>';
	echo $r['message'].'<br>';
}

--------------------------------------------------------------------------------

** comparison between fetch and fetchall

$r = $query->fetchall(PDO::FETCH_ASSOC);
echo '<pre>', print_r($r),'</pre>';


$r = $query->fetch(PDO::FETCH_ASSOC);
echo '<pre>', print_r($r),'</pre>';

*/ 

?>
