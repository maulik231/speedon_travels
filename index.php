<!DOCTYPE html>
<html>
<head>
<title>bus reservation system</title>
<!-- Custom Theme files -->

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
 <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
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
				
			</div>

			<?php
			session_start();
				if(!isset($_SESSION['email']))
				{
			?>

				<div class="top-nav"> 
				</div>
				<div class="dropdown-grids">
						<div id="loginContainer"><a href="#" id="loginButton"><span>Login</span></a>
							<div id="loginBox"> 
							<form id="loginForm" method="POST" action="login_proccess.php">
									<div class="login-grids">
										<div class="login-grid-left">
											<fieldset id="body">
												<fieldset>
													<label for="email">Email Address</label>
													<input type="text" name="email" value="<?php if(isset($_COOKIE['user_login'])){echo $_COOKIE['user_login'];}?>" id="email">
												</fieldset>
												<fieldset>
													<label for="password">Password</label>
													<input type="password" name="password">
												</fieldset>
												
												<label for="checkbox"><input type="checkbox" name="remember" id="checkbox"> <i>Remember me</i></label>
												<br><br>
												<input type="submit" id="login" name="done" value="Sign in">
											</fieldset>

											
											
											
												<div class="button-bottom">
													<p>New account? <a href="registration.php">Signup</a></p>
												</div>
											</div>
										</div>
									</div>
								</form>               
								
													<?php
									}
									else{
										?>
											
											
											<div class="top-nav"> 
				</div>
				<div class="dropdown-grids">
						<div id="loginContainer"><a href="#" id="loginButton"><span>View Profile/LogOut</span></a>
							<div id="loginBox"> 
							<form id="loginForm" method="POST" action="./loguot.php">
									<div class="login-grids">
										<div class="login-grid-left">
											<fieldset>
												
												<div id="loginContainer" style="text-align: center"><a href="profile.php" id=""><span>Profile</span></a></div>
												<br/><br/>
												<div id="loginContainer" style="text-align: center"><a href="./logout.php" id=""><span>logout</span></a></div>
											
											</fieldset>

											
											
											
												
											</div>
										</div>
									</div>
								</form>             
								<?php
									}

									?>	

									



								
							</div>
						</div>
				</div>
				

					<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//header-->
	<!-- banner -->
<div class="banner bus-banner">
		<!-- container -->
		<div class="container">
			<div class="col-md-4 banner-left">
				<section class="slider2">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="slider-info">
									<img src="images/5.jpg" alt="">
								</div>
							</li>
							<li>
								<div class="slider-info">
									<img src="images/6.jpg" alt="">
								</div>
							</li>
							<li>	
								<div class="slider-info">
									<img src="images/7.jpg" alt="">
								</div>
							</li>
							<li>	
								<div class="slider-info">
									<img src="images/8.jpg" alt="">
								</div>
							</li>
							<li>	
								<div class="slider-info">
									<img src="images/6.jpg" alt="">
								</div>
							</li>
						</ul>
					</div>
				</section>
				<!--FlexSlider-->
			</div>
			<div class="col-md-8 banner-right">
				<div class="sap_tabs">	
					<div class="booking-info about-booking-info">
						<h2>Book Bus Tickets Online</h2>
					</div>
					<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">	
						  <!---->		  	 
									<div class="facts about-facts">
										<div class="booking-form">
										<link rel="stylesheet" href="css/jquery-ui.css" />
											<!---strat-date-piker---->
											<script>
												$(function() {
													$( "#datepicker,#datepicker1" ).datepicker();
												});
											</script>
											<!---/End-date-piker---->
											<!-- Set here the key for your domain in order to hide the watermark on the web server -->
											
											<div class="online_reservation">
												<div class="b_room">
															<div class="booking_room">
																<div class="reservation">
																
																	<ul>
																		<li class="span1_of_1 desti">
																		<form method="POST" action="search_bus.php"> 
																			 <h5>From</h5>
																			 <div class="book_date">
																			 	<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
																			 	<select name="from" required style="width:100%;" >
																						<option>surat</option>
																						<option>rajkot</option>
																						<option>junaghadh</option>
																				</select>
																			</div>
																

																			</li>
																			<li class="span1_of_1 desti">
																			 <h5>To</h5>
																			<div class="book_date">
																			 	<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
																			 	<select name="to" required style="width:100%;" >
																						<option>surat</option>
																						<option>rajkot</option>
																						<option>junaghadh</option>
																				</select>
																			</div>
																			</li>
																		<!-- </ul>
																		<ul> -->&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
																			<li class="span1_of_1">
																			 <h5>Date</h5>
																			  <div class="book_date">
																			 <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
																			<input type="date" required dateformat="dd-mm-yyyy" name="date" style="height: 31px ;">
																		</div>
																			</li>
																			 	<li> 
																			 			<input type="submit" name="search"  value="search for bus..." style=" text-transform: capitalize;
																									background: #283593;
																									color: #FFFFFF;
																									padding: .5em 1em;
																									border: none;
																									font-size: 1em;
																									outline: none;">
																			 		
																			 	</li>
																			 	
																		</ul>
																	</form>
																</div>
															</div>
															<div class="clearfix"></div>
												</div>
											</div>
											<!---->
										</div>	
									</div>
					</div>	
				</div>
			</div>
			<!-- <div class="clearfix"> </div> -->
		</div>
		<!-- //container -->
	</div>
	<!-- //banner -->

	<!-- banner-bottom -->
	<div class="banner-bottom">
		
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //banner-bottom -->
	<!-- popular-grids -->
	<div class="popular-grids">
		<!-- container -->
		<div class="container">
			<div class="popular-info">
				<h3>Popular Places</h3>
			</div>
			<!-- slider -->
			<div class="slider">
				<div class="arrival-grids">			 
					 <ul id="flexiselDemo1">
						 <li>
							 <a href="#"><img src="images/junagadh.jpg" alt=""/></a>
							 
						 </li>
						 <li>
							 <a href="#"><img src="images/ahemdabad.jpg" alt=""/></a>
							 
						 </li>
						

						 <li>
							 <a href="#"><img src="images/surat.jpg" alt=""/></a>
							 
						 </li>
						 <li>
							 <a href="#"><img src="images/rajkot.jpg" alt=""/></a>
							 
						 </li>
						 <li>
							 <a href="#"><img src="images/bhavanagar.jpg" alt=""/></a>
							 
						 </li>
						</ul>
						<script type="text/javascript">
						 $(window).load(function() {			
						  $("#flexiselDemo1").flexisel({
							visibleItems: 4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover:true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems: 2
								},
								tablet: { 
									changePoint:768,
									visibleItems: 3
								}
							}
						});
						});
						</script>
						<script type="text/javascript" src="js/jquery.flexisel.js"></script>			 
				</div>
			</div>
			<!-- //slider -->
		</div>
		<!-- //container -->
	</div>
	<!-- popular-grids -->
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
	
	</div>
	<script defer src="js/jquery.flexslider.js"></script>
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript">
		$(function(){
			SyntaxHighlighter.all();
			});
			$(window).load(function(){
			$('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			$('body').removeClass('loading');
			}
			});
		});
	</script>		
</body>
</html>