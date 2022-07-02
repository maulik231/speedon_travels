
<?php session_start();  
 if(isset($_SESSION['email'])) {
    if($_SESSION['role']=="admin"){
    include("db.php");
    $email= $_SESSION['email']; ?> 
<?php
	session_start();
	include("db.php");
	$city=$_POST['city_nm'];
	$datetime = Date("Y-m-d H:i:s");
	
	if(isset($_POST['addcity']))
	{
		



		$insert="INSERT INTO `city_master` VALUES('','".$city."','".$datetime."')";
		
		$user=mysqli_query($con,$insert);
		
		if($user)
		{
			 // header('Location:add_bus.php');

			echo "<script type= \"text/javascript\">
				alert(\"add city seccessfully....\");
				window.location=(\"add_city.php\")</script>";

		}
		else{
			echo "<script type= \"text/javascript\">
				alert(\"Record not found...try again.\");
				window.location=(\"add_city.php\")</script>";
		}

	}
	else
	{
			if(isset($_POST['cancel']))
			{
				echo "<script type= \"text/javascript\">
				window.location=(\"ad_index.php\")</script>";

			}
	}






?>
<?php 

    }
    else
    {
         header('location:../index.php');
    }

}
    ?>
