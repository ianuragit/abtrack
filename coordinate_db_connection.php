<?php

/* 
 * Copyright2014 - Anurag Meena (ianuragit@gmail.com)
 */


$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "mars";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");

?>