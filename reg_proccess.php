 <?php
 
include("db.php");
	$name = $_POST['nm'];
	$phone=$_POST['phone'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
   	$gender=$_POST['gender'];
   	$add=$_POST['add'];
	$datetime = Date("Y-m-d H:i:s");

	if(preg_match("/^[a-zA-Z]+$/", $name))
	{

		// if((strlen($pass)>=4) || (strlen($pass)<=6))
		// {
			if(filter_var($email,FILTER_VALIDATE_EMAIL))
			{	
				if(preg_match("/^[0-9]{10}+$/",$phone))
				{

			  	 	if($pass == $cpass) 
			    	{
				       	//$options = ['cost' => 6,];
						 //$pass = password_hash($pass, PASSWORD_BCRYPT, $options);

					 	$insert="INSERT INTO `customer`( `name`, `phone`, `email`, `password`, `gender`, `address`, `date_time`) VALUES ('".$name."','".$phone."','".$email."','".$pass."','".$gender."','".$add."','".$datetime."')";
					 	
					  	$user = mysqli_query($con,$insert);
					   		if($user) 
					   		{       
				   		
					      			 echo "<script type= \"text/javascript\">
										alert(\"Ragistration Successfully....\");
										window.location=(\"index.php\")</script>";
					     	 }

							else
							{
								
								 header('location:registration.php');
							}
					}
				}
				else
				{
					echo "invalid mobile no..";
				}
			}
			else
			{
				echo "invalid email...";
			}
		
		// else
		// {
		// 	echo "password must have atlist 4 characte...";
		// }
	}
	else
	{
		echo "user name must be string..";
	}

  

?> 

