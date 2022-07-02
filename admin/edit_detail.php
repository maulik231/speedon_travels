<?php session_start();  
 if(isset($_SESSION['email'])) {
    if($_SESSION['role']=="admin"){
    include("db.php");
    $email= $_SESSION['email']; ?> 
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
    <title>Admin Press Admin Template - The Ultimate Bootstrap 4 Admin Template</title>
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
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src=admin_static/images/users/profile.png alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src=admin_static/images/users/profile.png alt="user"></div>
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

                        <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="mdi mdi-settings"></i></a>
                        <!-- <a href="app-email.html" class="" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a> -->
                        <a href="logout.php" class="" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
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
                                <li><a href="display_user.php">Display Users</a></li>
                                <li><a href="#">Analytical</a></li>
                                <li><a href="#">Demographical</a></li>
                                <li><a href="#">Modern</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Manage Bus</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="add_bus.php">Add Bus</a></li>
                                <li><a href="#">Remove Bus</a></li>
                                <li><a href="#">Demographical</a></li>
                                <li><a href="#">Modern</a></li>
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
                    <h3 class="text-themecolor">Edit User</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="ad_index.php">Home</a></li>
                        <li class="breadcrumb-item">edit</li>
                         <li class="breadcrumb-item">edit_user</li>
                    
                    </ol>
                </div>
              <!--  -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->

            <?php
            include("db.php");
            $editid=$_GET['id'];
            $q="select * from customer where cust_id=('".$editid."')";
            $result=mysqli_query($con,$q);
            
            $editdata=mysqli_fetch_row($result);





            ?>

            <div class="container-fluid">
               
                </div>

                
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            
                            <div class="card-body">
                                <form method="POST" action="edit_proccess.php" >
                                    <input type="hidden" name="id" value="<?php echo $editdata[0];?>">
                                    <div class="form-body">
                                        <h3 class="card-title">Edit User Info</h3>
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Edit Name</label>
                                                    <input required="" type="text" name="enm" class="form-control" value="<?php echo $editdata[1];?>">
                                                    </div>

                                            </div>
                                            <!--/span-->
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Edit Phone Number</label>
                                                    <input type="text" name="ephone" required="" class="form-control" value="<?php echo $editdata[4];?>">
                                                </div>
                                            </div>
                                           
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Edit Email Address</label>
                                                    <input type="text" required="" name="eemail" class="form-control form-control-danger" value="<?php echo $editdata[2];?>"></input>
                                                    </div>
                                            </div>

                                            <!--/span-->
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Edit Password</label>
                                                    <input  required="" type="Password" name="epass" class="form-control form-control-danger" value="<?php echo $editdata[3];?>">
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Edit Gender</label><br>
                                                    
                                                    <input type="radio" id="male" name="gender"
                                                    <?php 
                                                        if($editdata[5]=='male'){ ?>
                                                             checked="true"<?php
                                                         }?>
                                                     value="male">
                                                    

                                                    <label for="male">Male</label>

                                                        <input type="radio" id="female"
                                                        <?php 
                                                        if($editdata[5]=='female'){ ?>
                                                             checked="true"<?php
                                                         }?> 
                                                                 
                                                    name="gender" value="female">
                                                    
                                                        <label for="female">Female</label>
                                                    
                                                    </div>                  
                                            </div>
                                           

                                            <!--/span-->
                                             <div class="col-md-6">
                                                 <div class="form-group">
                                                    <label class="control-label">Edit Address</label>
                                                    <textarea type="text" required="" name="eadd" class="form-control form-control-danger" ><?php echo $editdata[6];?></textarea>
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Edit Role</label>
                                                    <input  required="" type="text" name="erole" class="form-control form-control-danger" value="<?php echo $editdata[8];?>">
                                                    </div>
                                            </div>

                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                       
                                        <!--/row-->
                                       
                                      
                                        <!--/row-->
                                       
                                    </div>
                                    <div class="form-actions">
   <!--                                      <input type="submit" name="addbus" class="btn bnt-success" value="submit"> -->
                                        <button type="submit" name="update" class="btn btn-success"> <i class="fa fa-check"></i>Update Detail</button>
                                     
                                    </div>

                                    
                                </form>
                            </div>
                        </div>
                    </div> 


                <!-- Row -->
               
           
               
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                SpeedOn Travels
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
         header('location: ../index.php');
    }

}
    ?>

</html>