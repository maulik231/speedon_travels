<?php
include("db.php");
$deleteid=$_GET['id'];

$q="delete from bus_detail where bus_id=('".$deleteid."')";
$deleter=mysqli_query($con,$q);
if($deleter)
{
	header("location:display_allbus.php");
}



?>