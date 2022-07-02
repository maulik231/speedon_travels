<?php
include("db.php");
if(isset($_POST['update']))
{
	$s_station=$_POST['esource'];
	$d_station=$_POST['edestination'];
	$s_time=$_POST['estime'];
	$d_time=$_POST['edtime'];
	$b_no=$_POST['ebno'];
	$b_date=$_POST['ebdate'];
	$b_desc=$_POST['edescription'];
	$t_seat=$_POST['etotalseat'];
	$id=$_POST['id'];

	$q="update bus_detail set bus_no='{$b_no}',source_station='{$s_station}',destination_station='{$d_station}',s_time='{$s_time}',d_time='{$d_time}',bus_date='{$b_date}',max_seat='{$t_seat}',bus_detail='{$b_desc}' where bus_id='{$id}'";
	$update=mysqli_query($con,$q);
	if($update)
	{
		echo "<script type= \"text/javascript\">
				alert(\"Update seccessfully....\");
				window.location=(\"display_allbus.php\")</script>";;
	}
	else
	{
		echo "<script type= \"text/javascript\">
				alert(\"Record not found...\");
				window.location=(\"edit_bus_detail.php\")</script>";
	}





}






?>