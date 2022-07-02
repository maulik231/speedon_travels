<?php 
session_start();  
 if(isset($_SESSION['email'])) 
 {
    if($_SESSION['role']!="customer")
    {
    
    	echo "<script type= \"text/javascript\">
										alert(\"Login Please...\");
										window.location=(\"index.php\")</script>";
         
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
				
			
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	
	<?php 

		session_start();
		include "db.php";
		if(isset($_POST['search']))
		{
				$from=$_POST['from'];
				$to=$_POST['to'];
				$date=$_POST['date'];

				$_SESSION['source']=$from;
				$_SESSION['destination']=$to;
				if($from==$to)
				{
					echo "<script type= \"text/javascript\">
										alert(\"Source and Destination must be different...\");
										window.location=(\"index.php\")</script>";
				}
				else
				{


				//echo $from;
				$select_query="SELECT * FROM bus_detail where source_station = '$from' && destination_station= '$to' && bus_date= '$date' ";
				$query=mysqli_query($con,$select_query);
				$n=mysqli_num_rows($query);
				if($n)
				{
					for($i=0;$i<$n;$i++)
					{
					
						$row  = mysqli_fetch_row($query);

						$price=$row[8];
						$_SESSION['pc']=$price;

					?>

					 <div class="footer">
		
							<div class="container">
								<div class="footer-top-grids">
									<div class="footer-grids">
										<table>
											<tr>
												
												<td><font color="red"><b><?php echo $row[2]?></b></font></td>
												<td><font color="blue">To</font></td>
												<td><font color="red"><b><?php echo $row[3];?></b></font></td>				
																			
											</tr>
											<tr>
												<td><b><u><font color="blue">Source Time:</font></u></b></td>
												<td><?php echo $row[4]; ?></td>
											</tr>
											<tr>
												<td><b><u><font color="blue">Destination Time:</font></u></b></td>
												<td><?php echo $row[5]; ?></td>
											</tr>
											<tr>
												<td><b><u><font color="blue">Bus Date:</font></u></b></td>
												<td><?php echo $row[6]; ?></td>
											</tr>
											<tr>
												<td><b><u><font color="blue">Price:</font></u></b></td>
												<td><?php echo $price ?></td>
											</tr>
											<tr>
												<td><b><u><font color="blue">Available Seats:</font></u></b></td>
												<td><?php echo $row[7]; ?></td>
											</tr>
											<tr>
												<td><b><u><font color="blue">Othere Ditails About Bus:</font></u></b></td>
												<td><?php echo $row[9]; ?></td>
											</tr>
										</table>
										<table style="float: right; padding-bottom: 20px;">
											<tr>
												<td align="center">
													 <form method="get">
													 	 <?php	echo "<a href='booknow.php?id=" .$row[0]."'>BOOK NOW</a>"?>
													</form>
												</td>
											</tr>
										</table>
										
										
										
										<div class="clearfix"> </div>
									</div>
									
								</div>
							</div>
							
					</div>
	<?php
						

						
					}
				}
				else
				{
					echo "<script type= \"text/javascript\">
										alert(\"Bus Not Found...\");
										window.location=(\"index.php\")</script>";
				}
		}
		}	
	 ?>
	

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


<?php 

    }

}
 else
    {
    	echo "<script type= \"text/javascript\">
										alert(\"Login Please Successfully...\");
										window.location=(\"index.php\")</script>";
    }
 ?>
</html>