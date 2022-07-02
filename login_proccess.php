<?php

	session_start();
	
	if(isset($_POST['done']))
	{
		if(empty($_POST['email'])&&empty($_POST['password']))
		{
			
			echo "<script language='javascript'>alert('Please Enter Value...')</script>";
		}
		else{
		$email=$_POST['email'];
		$password=$_POST['password'];
		include("db.php");
		// $conn=mysqli_connect("localhost", "root", "", "bus");
		// if (!$conn) 
		// 			{
		// 				die("Connection failed: " . $conn->connect_error);
		// 			} 

		$email = stripslashes($email);
		$password = stripslashes($password);
		$email = mysqli_real_escape_string($con,$email);
		$password = mysqli_real_escape_string($con,$password);
		$query="select * from customer where email='$email' and password='$password'";
		$result=mysqli_query($con,$query);
		$rows = mysqli_num_rows($result);
					if ($rows==1)
					{
						$_SESSION['email']=$email;
					
						
						// echo "<script type= \"text/javascript\">
						// 		alert(\"Connection Successfully....\");</script>";
						while($row=mysqli_fetch_array($result))
						{
							if(isset($_POST['remember']))	
							{
								setcookie("user_login",$_POST['email'],time()+ (60*60*24*30));
								// setcookie("user_password",$_POST['password'],time()+ (60*60*24*30));
							}
							else
							{
								setcookie("user_login",'',time()- (60*60*24*30));
								setcookie("user_password",'',time()- (60*60*24*30));
							}
							$_SESSION['name']=$row['name'];
							$_SESSION['role']=$row['role'];
							$role=$row['role'];
							if($role=="admin")
							{
								echo "<script type= \"text/javascript\">
										alert(\"Admin Login Successfully....\");
										window.location=(\"admin/ad_index.php\")</script>";
							}
							else
							{
								echo "<script type= \"text/javascript\">
										alert(\"User Login Successfully...\");
										window.location=(\"index.php\")</script>";
							}
						}
					}				
					else
					{
						echo "<script type= \"text/javascript\">
										alert(\"Invalid Username OR Password....\");
										window.location=(\"index.php\")</script>";
					}
		mysqli_close($conn); 
	}
	}

?>