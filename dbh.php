<?php

$conn = mysqli_connect("localhost","root","","fifa");

if(!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}
?>
