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
				
			
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	
	<?php
	session_start();
	include "db.php";

	$id=$_GET['id'];


	?>


	<div class="footer">
		
		<div class="container">
			<div class="footer-top-grids">
				<div class="footer-grids">
					<form method="post" action="billing.php">
					<table>
						<tr>
						<th>Select How Many Seats You Want to book... </th>
						
						
							<td>
								<select name="seat" required style="width:100%;" >

									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
									<option>9</option>
									<option>10</option>
									

								</select>
							</td>
						</tr>
						<tr>
							<td><input type="submit" name="seat_save" value="submit"></td>
						</tr>

					</table>
					<?php
					$query="select * from customer where email=('".$email."')";
	$result=mysqli_query($con,$query);
	if($row=mysqli_fetch_row($result))
	{
		
		?>
		<input type="hidden" name="cust_id" value="<?php echo $row[0]; ?>">
		<input type="hidden" name="nm" value="<?php echo $row[1]; ?>">
		<input type="hidden" name="em" value="<?php echo $row[2]; ?>">
		<input type="hidden" name="ph" value="<?php echo $row[4]; ?>">
		<input type="hidden" name="ge" value="<?php echo $row[5]; ?>">
		<input type="hidden" name="add" value="<?php echo $row[6]; ?>">
		
					<?php
					$q="select * from bus_detail where bus_id=('".$id."')";
					$r=mysqli_query($con,$q);
					if($ro=mysqli_fetch_row($r))
					{
						?>
						<input type="hidden" name="bus_id" value="<?php echo $ro[0];?>">
						<?php
					}
					?>
					</form>

					










					<div class="clearfix"> </div>
				</div>
				
			</div>
		</div>
		
	</div>





		<?php
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
    	 header('location:index.php');
    }
 ?>
</html>