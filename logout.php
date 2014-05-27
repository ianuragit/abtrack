<?php

/* 
 * Copyright2014 - Anurag Meena (ianuragit@gmail.com)
 */

session_start();
unset($_SESSION['username']);
session_destroy();

header("Location: index.php");
exit;

?>