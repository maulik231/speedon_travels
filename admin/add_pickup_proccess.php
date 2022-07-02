<?php session_start();  
 if(isset($_SESSION['email'])) {
    if($_SESSION['role']=="admin"){
    include("db.php");
    $email= $_SESSION['email']; ?> 


<?php
	session_start();
	include("db.php");
	
	$datetime = Date("Y-m-d H:i:s");

	if(isset($_POST['addpickup']))
	{
		$city=$_POST['city'];
		$pickup=$_POST['pickup'];
	
		$query="select * from city_master where city=('".$city."')";
	$result=mysqli_query($con,$query);
	?>
	<form method="post" action="">
	<?php
	if($row=mysqli_fetch_row($result))
	{
		?>
		<input type="hidden" name="city_id" value="<?php echo $row[0];?>">
		

				<?php
	$city_id=$row[0];
	}
	else{
		echo "erro in select..";
	}
	?>
</form>
	<?php
	//$city_id=$_POST['city_id'];


		$insert="INSERT INTO `pickup_point_master` VALUES('','".$pickup."','".$city_id."')";
		
		$user=mysqli_query($con,$insert);
		
		if($user)
		{
			 // header('Location:add_bus.php');

			
			echo "<script type= \"text/javascript\">
				alert(\"PickupPoint added seccessfully....\");
				window.location=(\"add_pickuppoint.php\")</script>";

		}
		else{
			
			echo "<script type= \"text/javascript\">
				alert(\"Record not found...try again.\");
				window.location=(\"add_pickuppoint.php\")</script>";
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