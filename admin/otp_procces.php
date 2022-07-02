<?php
	session_start();
	require("db.php");
	$email= $_SESSION['admin_email'];
	$otp=$_POST['otp'];
     $i = 0;
    $sql = "SELECT * FROM `admin` where email = '$email' and otp = '$otp'";
    $result = mysqli_query($con,$sql);
    while ($row = mysqli_fetch_array($result)) 
    { 
      $i++;
       $otp=0;
       $query = "UPDATE `admin` SET `otp`='$otp' WHERE email = '$email'";
   	   $result = mysqli_query($con,$query);
   	   $name =$row['name'];
   	   $photo =$row['photo'];
   	   $phone =$row['phone'];

   	   $_SESSION["admin_name"]=$name;
		$_SESSION["admin_phone"]=$phone;
		$_SESSION["admin_photo"]=$photo;
   	  
    }
     if ($i != 0) 
    {
    	$con->close();
		header('Location:ad_index.php');
    }
    else
    {
    	$con->close();
		$_SESSION["otp_error"]="Invalid otp";
    	header('Location:ad_otp.php');
    }
    
    

?>