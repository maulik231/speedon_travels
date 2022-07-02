<?php 
session_start();  
 if(isset($_SESSION['email'])) 
 {
    if($_SESSION['role']!="customer")
    {
    
         header('location:index.php');
   	}
    else
    {
    	include("db.php");
    	$email= $_SESSION['email']; 
?> 

<!DOCTYPE html>
<html>
<head>
<title>search_bus</title>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Govihar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link type="text/css" rel="stylesheet" href="css/JFFormStyle-1.css" />
<!-- js -->
<script src="js/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!-- //js -->
<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,700,500italic,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

<script src="js/menu_jquery.js"></script>


</head>
<body>
	
	<div class="header">
		<div class="container">
			<div class="header-grids">
				<div class="logo">
					<table>
						<tr>
							<td><img src="images/header-text.png" class="img">
							</td>
							<td><h1><a  href="index.php"><span>SpeedOn</span>Travels</a></h1>
							</td>
						</tr>
					</table>
				</div>
				
				
				<div class="clearfix"> </div>
			</div>
			<div class="nav-top">
				
				
		</div>
	</div>
				



				<?php

						session_start();
						include("db.php");
							$seatno=$_POST['seat'];
                            $cust_id=$_POST['cust_id'];
                            $bus_id=$_POST['bus_id'];	




						$from=$_SESSION['source'];
						$to=$_SESSION['destination'];
					
					
					
						$query="select * from city_master where city=('".$from."')";
						$result=mysqli_query($con,$query);
						
						$row=mysqli_fetch_row($result);
						$sourc_id= $row[0];
										
					
						$q="select * from city_master where city=('".$to."')";
						$r=mysqli_query($con,$q);
						$ro=mysqli_fetch_row($r);
						
						$desti_id=$ro[0];
						
						$select="SELECT * from pickup_point_master where city_id=('".$sourc_id."')";
						$re=mysqli_query($con,$select);
						// $rows = mysqli_fetch_row($re);
						// 		echo $rows[0];
				
					?>
					<form method="post" action="billing_proccess.php">

	<div class="footer">
		
		<div class="container">
			<div class="footer-top-grids">
				<div class="footer-grids">
					
					
					<h3><font color="blue">Select PickupPoint:</font></h3>
					<table>
						<tr>
							<select name="pickup"  style="width: 50%; height: 50px; text-align: center; font-size: 20px;">
									<?php
										$n=mysqli_num_rows($re);
										if($n)
										{
											for($i=0;$i<$n;$i++)
											{
												$rows = mysqli_fetch_row($re);
												?>

														
																
																<option><?php echo $rows[1];?></option>
																
																
													
									
											
									<?php
											}
										}
								?>	
							</select>
							
											
						</tr>
						</table>
					<div class="clearfix"> </div>
				<hr>
					
	<?php

						$se="SELECT * from pickup_point_master where city_id=('".$desti_id."')";
						$resu=mysqli_query($con,$se);
						
						?>


					
					<h3><font color="blue">Select DropPoint:</font></h3>
					<table>
						
						<tr>
							<select name="drop" style="width: 50%; text-align: center; font-size: 20px;">
								<?php
									$no=mysqli_num_rows($resu);
									if($no)
									{
										for($j=0;$j<$no;$j++)
										{
											$rowses = mysqli_fetch_row($resu);
											?>

													
																<option><?php echo $rowses[1];?></option>
											<?php
										}
									}

								?>	
						</select>

												
											
											</tr>
										</table>
										<center>
											<hr>
											<br/>
										<input class="btn btn-success" type="submit" name="select" value="NEXT">
									</center><br/>
					<div class="clearfix"> </div>

				</div>
				
			</div>

		</div>
		</div>

		<div style="margin-left: 45%;">
			<input type="hidden" name="bus_id" value="<?php echo $bus_id; ?>">
			<input type="hidden" name="seat" value="<?php echo $seatno; ?>">
			<input type="hidden" name="cust_id" value="<?php echo $cust_id; ?>">

		
		</div>

</form>
	
		

	<div class="footer">
		
		<div class="container">
			<div class="footer-top-grids">
				<div class="footer-grids">
					
					<div class="col-md-3 footer-grid">
						<h4>Company</h4>
						<ul>
							<li><a href="about.html">About Us</a></li>
							
							<li><a href="terms.html">Terms &amp; Conditions</a></li>
							<li><a href="privacy.html">Privacy </a></li>
							<li><a href="contact.html">Contact Us</a></li>
						
							<li><a href="blog.html">Blog</a></li>
							<li><a href="booking.html">Feedback</a></li>
						</ul>
					</div>
					<div class="col-md-4 footer-bottom-left">
						<h4>Follow Us</h4>
						<div class="social">
							<ul>
								<li><a href="#" class="facebook"> </a></li>
								<li><a href="#" class="facebook twitter"> </a></li>
								<li><a href="#" class="facebook chrome"> </a></li>
								<li><a href="#" class="facebook dribbble"> </a></li>
							</ul>
						</div>
					</div>
					
					<div class="clearfix"> </div>
				</div>
				
			</div>
		</div>
		
	</div>



	<!-- //footer -->
	
	<script defer src="js/jquery.flexslider.js"></script>
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

</body>

</html>











<?php 

    }

}
 else
    {
    	 header('location:index.php');
    }
 ?>