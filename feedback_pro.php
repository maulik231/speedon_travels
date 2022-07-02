<?php
							
							session_start();
							include("db.php");
							if(isset($_POST['send']))
							{
								$name=$_POST['fnm'];
								$email=$_POST['email'];
								$phone=$_POST['phone'];
								$message=$_POST['message'];
								$datetime = Date("Y-m-d H:i:s");

	if(preg_match("/^[a-zA-Z]+$/", $name))
	{

		if(filter_var($email,FILTER_VALIDATE_EMAIL))
			{	
					if(preg_match("/^[0-9]{10}+$/",$phone))
					{

			  	 	
			  	 	$insert="INSERT INTO `feedback` values('','".$name."','".$email."','".$phone."','".$message."','".$datetime."')";

					 	
					  	$user = mysqli_query($con,$insert);
					   		if($user) 
					   		{       
				   			// echo "<script language='javascript'>alert('successfully registr...')</script>";
					      			echo "<script type= \"text/javascript\">
										alert(\"Feedback Send Successfully....\");
										window.location=(\"index.php\")</script>";
					     	 }

							else
							{
								
								 echo "<script type= \"text/javascript\">
										alert(\"Feedback not send somethig is wrong...\");
										window.location=(\"booking1.php\")</script>";
							}
					}
					else
					{
					 echo "<script type= \"text/javascript\">
										alert(\"phone must be ten number...\");
										window.location=(\"booking1.php\")</script>";
					}

				
				}
				else
				{
					 echo "<script type= \"text/javascript\">
										alert(\"Invalid email...\");
										window.location=(\"booking1.php\")</script>";
				}
			}
			else
			{
				 echo "<script type= \"text/javascript\">
										alert(\"name is allow only character...\");
										window.location=(\"booking1.php\")</script>";
			}

}

?>