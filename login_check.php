<?php
/* 
 * Copyright2014 - Anurag Meena (ianuragit@gmail.com)
 * AM  * 
 */

include 'connection.php'; //connect the connection page

if(empty($_SESSION)) // if the session not yet started 
   session_start();

if(!isset($_SESSION['SESS_FIRST_NAME'])) { //if not yet logged in
   header("Location: login.php");// send to login page
   exit;
} 
 ?>