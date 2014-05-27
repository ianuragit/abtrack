<?php

/* 
 * Copyright2014 - Anurag Meena (ianuragit@gmail.com)
 * AM  * 
 */



//require("phpsqlajax_dbinfo.php");
include 'connection.php';
// Start XML file, create parent node

$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);
$database = "mars";

// Set the active MySQL database

$db_selected = mysql_select_db($database, $bd);
if (!$db_selected) {
  die ('Can\'t use db : ' . mysql_error());
}

// Select all the rows in the markers table

$query = "SELECT * FROM vehicle_1 WHERE 1";
$result = mysql_query($query);
if (!$result) {
  die('Invalid query: ' . mysql_error());
}

header("Content-type: text/xml");

// Iterate through the rows, adding XML nodes for each

while ($row = @mysql_fetch_assoc($result)){
  // ADD TO XML DOCUMENT NODE
  $node = $dom->createElement("marker");
  $newnode = $parnode->appendChild($node);
  $newnode->setAttribute("time",$row['time']);
  $newnode->setAttribute("temp", $row['temp']);
  $newnode->setAttribute("humidity", $row['humidity']);
  $newnode->setAttribute("lat", $row['lat']);
  $newnode->setAttribute("long", $row['long']);
}

echo $dom->saveXML();

?>