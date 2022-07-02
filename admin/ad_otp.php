 <?php session_start();  
 if(!isset($_SESSION['admin_email'])){
    header('Location:ad_login.php');
    ?>
 <?php }else{
    include("db.php");
    $email= $_SESSION['admin_email'];
} ?> 
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themedesigner.in/demo/admin-press/main/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Jul 2018 16:44:13 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="admin_static/images/favicon.png">
    <title>bus-Admin</title>
    <!-- Bootstrap Core CSS -->
    <link href="admin_static/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="admin_static/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="admin_static/css/colors/blue.css" id="theme" rel="stylesheet">
     <link href="admin_static/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->

     <link href="admin_static/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="admin_static/plugins/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="admin_static/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
    <!--alerts CSS -->
    <link href="admin_static/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper">
        <div class="login-register" style="background-image:url(admin_static/images/background/login-register.jpg);">
            <div class="login-box card">
                <div class="card-body">
                    
                    <form class="form-horizontal" action="otp_procces.php" method="post">
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <h3>OTP</h3>
                                <p class="text-muted">Enter your OTP and instructions will be sent to you! </p>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" name="otp" placeholder="OTP"> </div>
                        </div>
                        <?php
                if(isset($_SESSION["otp_error"]))
                {?><h5 style="color: red">
                   <?php echo $_SESSION["otp_error"];?>
                   </h5>
                   <?php unset($_SESSION["otp_error"]);
                }
            ?>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="admin_static/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="admin_static/plugins/bootstrap/js/popper.min.js"></script>
    <script src="admin_static/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="admin_static/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="admin_static/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="admin_static/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="admin_static/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="admin_static/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="admin_static/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="admin_static/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>


<!-- Mirrored from themedesigner.in/demo/admin-press/main/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Jul 2018 16:44:14 GMT -->
</html>