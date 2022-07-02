<?php session_start();  
 if(isset($_SESSION['email'])) 
 {
    if($_SESSION['role']=="admin")
    {
        include("db.php");
        $email= $_SESSION['email']; ?> 
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themedesigner.in/demo/admin-press/main/form-layout.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Jul 2018 16:46:20 GMT -->
<head>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="admin_static/images/favicon.png">
    <title>display_user</title>
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
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        
                        <!-- ============================================================== -->
                        <!-- Language -->
                        <!-- ============================================================== -->
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
                                   
                                    <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
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
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Admin</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="display_user.php">Display User</a></li>
                               <!--  <li><a href="#">Analytical</a></li>
                                <li><a href="#">Demographical</a></li>
                                <li><a href="#">Modern</a></li> -->
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Manage Bus</span></a>
                            <ul aria-expanded="false" class="collapse">
                               <li><a href="add_bus.php">Add Bus</a></li>
                                <li><a href="#">Display All Bus</a></li>
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
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Display Users</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="ad_index.php">Home</a></li>
                        <li class="breadcrumb-item">admin</li>
                        <li class="breadcrumb-item active">display_users</li>
                    </ol>
                </div>
               
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
            <?php
            // session_start();
            // if(isset($_SESSION['email']))
            // {
            // if($_SESSION['role']=="admin")
            
            // {   
            // $con= mysqli_connect("localhost","root","","ticket_booking");
            // if(isset($_GET['key'])&&$_GET['key']="yes")
            // {
            //     $delete_query="delete from customer where id='".$_GET['id']."'";
            //     $delete_result=mysqli_query($con,$delete_query);
            //     if($delete_result)
            //     {
            //         echo "<script language='javascript'>alert('Detail delete successfully')</script>";
            //     }
            // }
            include("db.php");
            $query="select * from customer";
            $result=mysqli_query($con,$query);  
        ?>
               <form method="POST">

            <div class="card-body">
                <form>
                    
                    <table class="table table-hover table-responsive" align="center" border="1px">
                    <tr>
                        <td class="ro">ID</td>
                        <td class="ro">Name</td>
                        <td class="ro">Phone</td>
                        <td class="ro">Email</td>
                        <td class="ro">Password</td>
                        <td class="ro">Gender</td>
                        <td class="ro">Address</td>
                        <td class="ro">Date-Time</td>
                        <td class="ro">Role</td>
                        <td class="ro">Edit</td>
                        <td class="ro">Delete</td>
                    </tr>
            <?php 
                while($row=mysqli_fetch_array($result))
                {
                    echo "<tr>";
                    echo "<td>".$row['cust_id']."</td>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['phone']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['password']."</td>";
                    echo "<td>".$row['gender']."</td>";
                    echo "<td>".$row['address']."</td>";
                    echo "<td>".$row['date_time']."</td>";
                    echo "<td>".$row['role']."</td>";

                    echo "<td>";
                    echo "<a href='edit_detail.php?key=yes&id=".$row['cust_id']."'>edit</a>";
                    echo "</td>";
                    echo "<td>";
                    echo "<a href='delet_detail.php?key=yes&id=".$row['cust_id']."'>delete</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            mysqli_close($con);
        // }
        // else
        // {
        //     header("location:login.php");
        // }           
        }   
        ?>
        </table>
                </form>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-center links">
                Go back to <a href="ad_index.php"> home </a>
                </div>
                
            </div>
        </div>
    </div>
</div>
</form>
           
               
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                SpeeOn Travels
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
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
 <?php 

    }
    else
    {
         header('location:../index.php');
    }


    ?>


</html>