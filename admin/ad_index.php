<?php session_start();  
 if(isset($_SESSION['email'])) {
    if($_SESSION['role']=="admin"){
    include("db.php");
    $email= $_SESSION['email'];
 ?> 
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themedesigner.in/demo/admin-press/main/form-layout.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Jul 2018 16:46:20 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="admin_static/images/favicon.png">
    <title>Admin_index</title>
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
    <!-- Custom CSS -->
   
</head>

<body class="fix-header card-no-border">
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
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="admin_static/images/2.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="admin_static/images/2.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="admin_static/images/21.png" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->    
                         <img src="admin_static/images/21.png" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                       

                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                       
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="flag-icon flag-icon-in"></i></a>
                           
                        </li>
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="admin_static/images/users/profile.png" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="admin_static/images/users/profile.png" alt="user"></div>
                                            <div class="u-text">
                                                <h4><?php print_r($_SESSION['name']); ?></h4>
                                                <p class="text-muted"><?php print_r($_SESSION['email']); ?></p><a href="#" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                   
                                   <!--  -->
                                    <li role="separator" class="divider"></li>
                                    <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="admin_static/images/users/profile.png" alt="user" />
                        <!-- this is blinking heartbit-->
                        <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
                    </div>
                    <!-- User profile text-->
                    <div class="profile-text">
                        <h5><?php print_r($_SESSION['name']); ?></h5>
                        <p class="text-muted"><?php print_r($_SESSION['email']); ?></p>
                        
                        <!-- <a href="app-email.html" class="" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a> -->
                        
                        <div class="dropdown-menu animated flipInY">
                            <!-- text-->
                          
                            <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                            <!-- text-->
                            <div class="dropdown-divider"></div>
                            <!-- text-->
                            <a href="logout.php" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                            <!-- text-->
                        </div>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
               <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-small-cap">PERSONAL</li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Admin </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="display_user.php">Display Users</a></li>
                                <!-- <li><a href="#">Analytical</a></li>
                                <li><a href="#">Demographical</a></li>
                                <li><a href="#">Modern</a></li> -->
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Manage Bus</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="add_bus.php">Add Bus</a></li>
                                <li><a href="display_allbus.php">Display All Bus</a></li>
                                <li><a href="add_city.php">Add city</a></li>
                                <li><a href="add_pickuppoint.php">Add PickupPoint</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
           
           <h4>Welcome to Admin Panal</h4> <h1><?php print_r($_SESSION['name']); ?></h1>    

       </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
     <footer class="footer">
                SpeeOn Travels
            </footer>
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
    <?php 

    }
    else
    {
         header('location:index.php');
    }

}
    ?>
</body>


</html>