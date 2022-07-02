<?php
error_reporting(0);
date_default_timezone_set("Asia/Kolkata");
$con = mysqli_connect("localhost","root","","ticket_booking");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 


?>
