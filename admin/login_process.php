<?php
session_start();
require("db.php");
	$email = $_POST['email'];
    $pass = $_POST['pass'];
    // print_r("sadhsagdk");
    $i = 0;
    $sql = "SELECT * FROM `admin` where email = '$email' and password = '$pass' ";
    $result = mysqli_query($con,$sql);
    while ($row = mysqli_fetch_array($result)) 
    { 
      $i++;
      $otp = rand(0000,9990);
      $query = "UPDATE `admin` SET `otp`='$otp' WHERE email = '$email'";
   	  $result = mysqli_query($con,$query);
       
    }
    if ($i != 0) 
    {
    	$con->close();
		$_SESSION["admin_email"]=$email;
    	header('Location:ad_otp.php');
    }
    else
    {
    	$con->close();
		$_SESSION["msg"]="Invalid Username / Password";
    	header('Location:ad_login.php');
    }

?>