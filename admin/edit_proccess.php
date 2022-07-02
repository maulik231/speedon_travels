<?php
include("db.php");
if(isset($_POST['update']))
{
	$name=$_POST['enm'];
	$phone=$_POST['ephone'];
	$email=$_POST['eemail'];
	$pass=$_POST['epass'];
	$gender=$_POST['gender'];
	$add=$_POST['eadd'];
	$role=$_POST['erole'];
	$id=$_POST['id'];

	$q="update customer set name='{$name}',email='{$email}',password='{$pass}',phone='{$phone}',gender='{$gender}',address='{$add}',role='{$role}' where cust_id='{$id}'";
	$update=mysqli_query($con,$q);
	if($update)
	{
		echo "<script type= \"text/javascript\">
				alert(\"Update seccessfully....\");
				window.location=(\"display_user.php?id=".$_id."\")</script>";;
	}
	else
	{
		echo "<script type= \"text/javascript\">
				alert(\"Record not found...\");
				window.location=(\"edit_detail.php.php\")</script>";
	}





}






?>