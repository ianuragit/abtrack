<?php

/* 
 * Copyright2014 - Anurag Meena (ianuragit@gmail.com)
 */
include 'login_check.php';
?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css_header/menu.css">
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyD3pePeI4n7XAAsLCMmkvliS1vALQm11W0&sensor=false">
</script>


<script>
function initialize()
{
var mapProp = {
  center:new google.maps.LatLng(18.9750,72.8258), 
  zoom:10,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };
var map=new google.maps.Map(document.getElementById("googleMap")
  ,mapProp);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>

<body>

 <?php include 'header.php';?> 
    
<div id="googleMap" style="width:700px;height:580px;"></div>

</body>
</html>