<?php
include("db.php");
$deleteid=$_GET['id'];

$q="delete from customer where cust_id=('".$deleteid."')";
$deleter=mysqli_query($con,$q);
if($deleter)
{
	header("location:display_user.php");
}



?>