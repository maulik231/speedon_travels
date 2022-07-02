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
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
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
			<div class="top-nav">
					
					<ul class="nav1">
						<li class="active"><a href="index.php">Home</a></li>
						
					</ul>
				</div>
				
			
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="container"></div>
					
				
	<div class="footer">
		
		<div class="container">
			<div class="footer-top-grids">
				<div class="footer-grids">
					
					
					<?php

					session_start();
					include("db.php");
					$email=$_SESSION['email'];
					
					$query="select * from customer where email=('".$email."')";
					$result=mysqli_query($con,$query);
					while ($row=mysqli_fetch_row($result)) {
						?>
							<h3 align="center"><u><b>Welcome
						
					<?php
						echo $row[1];
						
					
					?>
				
					</b>
					</u>
					<hr>
					</h3>
					<center>
						<h2>Personal Detail</h2>
					<table class="table table-striped table-hover" style="width: 30%;">
								<?php $c_id=$row[0];?>
								<tr><td><b>Email ID:&nbsp&nbsp&nbsp&nbsp&nbsp</b><?php echo $row[2];?></td></tr>
								<tr><td><b>Phone NO:&nbsp</b><?php echo $row[4];?></td></tr>
								<tr><td><b>Gender:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b><?php echo $row[5];?></td></tr>
								<tr><td><b>Address:&nbsp&nbsp&nbsp&nbsp&nbsp</b><?php echo $row[6];}?></td></tr>
							
					</table>
				</center>
					<hr>
					<center>
					<h2>Booking Detail</h2>
					<table class="table table-striped table-hover">
						<th>BusNo</th>
						<th>SourceStation</th>
						<th>DestinationStation</th>
						<th>PickupTime</th>
						<th>Destinationtime</th>
						<th>JourneyDate</th>
						<th>Price</th>
						<th>Number Of Seat Booked</th>
					
					<?php
					$a="select * from booking where cust_id='".$c_id."'";
					$b=mysqli_query($con,$a);
					while($row=mysqli_fetch_row($b))
					{
						$c_id=$row[1];
						$bus_id=$row[2];
						//echo $bus_id;

						$c="select * from bus_detail where bus_id='".$bus_id."'";
						$d=mysqli_query($con,$c);
						while($e=mysqli_fetch_row($d))
						{
							//echo $e[2];
							?>
							<tr>
								<td><?php echo $e[1];?></td>
								<td><?php echo $e[2];?></td>
								<td><?php echo $e[3];?></td>
								<td><?php echo $e[4];?></td>
								<td><?php echo $e[5];?></td>
								<td><?php echo $e[6];?></td>
								<td><?php echo $row[4];?></td>
								<td><?php echo $row[3];?></td>
							</tr>



							<?php
						}
					}

					?>
					
					</table>

				</center>





					<div class="clearfix"> </div>
				</div>
				
			</div>
		</div>
		
	</div>





	

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
	<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
<?php 

    }

}
 else
    {
    	 header('location:index.php');
    }
 ?>
</html>