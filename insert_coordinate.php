<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
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