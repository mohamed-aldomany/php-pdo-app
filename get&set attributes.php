<?php


require('connect.php');


/* getAttribute parameters:

PDO::ATTR_AUTOCOMMIT
PDO::ATTR_CASE
PDO::ATTR_CLIENT_VERSION
PDO::ATTR_CONNECTION_STATUS
PDO::ATTR_DRIVER_NAME
PDO::ATTR_ERRMODE
PDO::ATTR_ORACLE_NULLS
PDO::ATTR_PERSISTENT
PDO::ATTR_PREFETCH
PDO::ATTR_SERVER_INFO
PDO::ATTR_SERVER_VERSION
PDO::ATTR_TIMEOUT


*/

echo $db->getAttribute(PDO::ATTR_DRIVER_NAME);


/*
setAttribute parameters: used to sets the value that come from db
*/

echo "<br>";
echo $db->setAttribute(PDO::ATTR_CASE,PDO::CASE_UPPER);



/* 

getAvailableDrivers() ==> return all database that allowed to used in PDO

 */

$ad = $db->getAvailableDrivers();

 print_r($ad);













?>