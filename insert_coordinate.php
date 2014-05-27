<?php

/* 
 * Copyright2014 - Anurag Meena (ianuragit@gmail.com)
 */


require_once('coordinate_db_connection.php');

// escape variables for security
$temp =  $_POST['temp'];
$humidity = $_POST['humidity'];
$lat = $_POST['lat'];
$long = $_POST['long'];

$sql="INSERT INTO `vehicle_1`(`temp`, `humidity`, `lat`, `long`) VALUES ('$temp', '$humidity', '$lat', '$long')";

//INSERT INTO `vehicle_1`(`time`, `temp`, `humidity`, `lat`, `long`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5])

if (!mysql_query($sql)) {
  die('Error: ' . mysql_error($bd));
}
echo "1 record added";

mysql_close($bd);

?>