<?php

/*$servername = "db5000264470.hosting-data.io";
$dBUsername = "dbu431816";
$dBPassword = "Brodway99!";
$dBName = "dbs258099";*/


$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "noobix";



$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}

?>
