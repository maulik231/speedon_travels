<?php session_start();  
 if(isset($_SESSION['email'])) {
    if($_SESSION['role']=="admin"){
    include("db.php");
    $email= $_SESSION['email']; ?> 
<?php
	session_start();
	include("db.php");
	$s_station=$_POST['source'];
	$d_station=$_POST['destination'];
	$s_time=$_POST['stime'];
	$d_time=$_POST['dtime'];
	$b_no=$_POST['bno'];
	$b_date=$_POST['bdate'];
	$b_desc=$_POST['description'];
	$t_seat=$_POST['totalseat'];
	$price=$_POST['price'];
	$datetime = Date("Y-m-d H:i:s");
	if(isset($_POST['addbus']))
	{
		$insert="INSERT INTO `bus_detail`( `bus_no`, `source_station`, `destination_station`, `s_time`, `d_time`, `bus_date`, `max_seat`, `price`, `bus_detail`, `datetime`) VALUES ('".$b_no."','".$s_station."','".$d_station."','".$s_time."','".$d_time."','".$b_date."','".$t_seat."','".$price."','".$b_desc."','".$datetime."')";
		
		$user=mysqli_query($con,$insert);
		
		if($user)
		{
			 // header('Location:add_bus.php');

			echo "<script type= \"text/javascript\">
				alert(\"add bus seccessfully....\");
				window.location=(\"add_bus.php\")</script>";

		}
		else{
			echo "<script type= \"text/javascript\">
				alert(\"Record not found...try again.\");
				window.location=(\"add_bus.php\")</script>";
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




