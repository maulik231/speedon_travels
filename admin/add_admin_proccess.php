<?php
session_start();
require("db.php");
	$name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $phone = $_POST['phone'];
	$datetime = Date("Y-m-d H:i:s");

   // $file = $_FILES['file']['name'];
	//$target_path=$target_path.basename($_FILES['file']['name']

    if ($pass == $cpass) 
    {
    	$options = ['cost' => 6,];
	$pass = password_hash($pass, PASSWORD_BCRYPT, $options);

	$user = mysqli_query($con, "SELECT * from admin where email = '$email'");
	  if (mysqli_num_rows($user) > 0)
	  {
	   $_SESSION["Dmail"]="Invalid Email / Password";
	   header('Location:add_admin.php');
	  }
	  else
	  {
	    //$newfilename= "";
	     $file = $_FILES['photo']['name'];
	    if (!empty($file)) {
	        $target_path = "admin_static/images/users/";
	        $filename = $file;

	        $new = rand(0000,9990);
	        $newfilename = $new.$file;
	        $output = array();

	        $target_path = $target_path . $newfilename;
	        if ($_FILES["file"]["size"] > 500000) {
	            $_SESSION["Dmail"]="Image Size";
	   			header('Location:add_admin.php');
	        }else{
	            move_uploaded_file($_FILES['file']['tmp_name'], $target_path);
	        }
	    }

	    $insert="INSERT INTO `admin`( `name`, `email`, `password`, `phone`,`otp`, `photo`, `status`,`datetime`) VALUES ('$name','$email','$pass','$phone',0,'$newfilename',1,'$datetime')";
	    //print_r($insert);
	    $user = mysqli_query($con,$insert);
	    if($user) {       
	      	$_SESSION["Dmail"]="Sucessfully Added";
	   		//header('Location:add_admin.php');
	    }else{
	      $directory = 'admin_static/images/users/';
	      unlink($directory.DIRECTORY_SEPARATOR.$newfilename);
	    }
	  }

    }
    mysqli_close($con);
?>
