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
<title>bus reservation system</title>
<!-- Custom Theme files -->

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
<!-- //fonts -->	
<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});
	</script>
<!--pop-up-->
<script src="js/menu_jquery.js"></script>
<!--//pop-up-->	
</head>
<body>
	<!--header-->
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
				<!--navbar-header-->
				
				<!-- <div class="clearfix"> </div> -->
			</div>
			<!-- <div class="nav-top"> -->
				
				<div class="top-nav">
					
					<ul class="nav1">
						<li class="active"><a href="index.php">Home</a></li>
						
					</ul>
				</div>
					
					
							
						<!-- /script-for-menu -->
			
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//header-->
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<!-- container -->
		<div class="container">
			<div class="faqs-top-grids">
				<div class="book-grids">
					<!-- <div class="col-md-6 book-left"> -->
						<div class="book-left-info">
							<h3>Feedback</h3>
						</div>
						<div class="book-left-form">
							<form method="post" action="feedback_pro.php">
								<div class="grid-contact">
									<div class="col-md-6 contact-grid">
										<p>Name</p>		
										<input type="text" name="fnm" required="">						
										</div>
									
								</div>
								<div class="grid-contact">
									<div class="col-md-6 contact-grid">
									<p>Email</p>						
										<input type="text" name="email" required="">							
									</div>
									<div class="col-md-6 contact-grid">						
									<p>Phone</p>						
										<input type="text" name="phone" required="">							
										</div>
									<div class="clearfix"> </div>
								</div>
									<p class="your-para">Message</p>
									<textarea cols="63" rows="6" name="message" required=""></textarea>
										<div class="send">
											<input type="submit" value="Send" name="send">
										</div>
							</form>
							
							
						</div>
						
					</div>
					
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //banner-bottom -->
	<!-- footer -->
	<div class="footer">
		<!-- container -->
		<div class="container">
			<div class="footer-top-grids">
				<div class="footer-grids">
					<div class="col-md-3 footer-grid">
						<h4>Company</h4>
						<ul>
							<li><a href="about.php">About Us</a></li>
							
							<li><a href="terms.php">Terms &amp; Conditions</a></li>
							<li><a href="privacy.php">Privacy </a></li>
							<li><a href="contact.php">Contact Us</a></li>
							
							<li><a href="blog.php">Blog</a></li>
							<li><a href="booking1.php">Feedback</a></li>
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
		<!-- //container -->
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
    	echo "<script type= \"text/javascript\">
										alert(\"Login please...\");
										window.location=(\"index.php\")</script>";
    	
    }
 ?>