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
              


                <div class="clearfix"> </div>



 <div class="footer">
        
        <div class="container">
            <div class="footer-top-grids" id="printable">
                <div class="footer-grids">

                    <?php      

                    session_start();
                    include("db.php");
                    $email=$_SESSION['email'];
                    $bus_id=$_POST['bus_id'];
                    $cust_id=$_POST['cust_id'];
                    $seat=$_POST['seat'];
                    $pick_up=$_POST['pickup'];
                    $drop=$_POST['drop'];
                        

                
                    $query="select * from customer where email=('".$email."')";
                    $result=mysqli_query($con,$query);
                    while ($row=mysqli_fetch_row($result)) {
                        ?>
                    </b>
                    </u>
                   
                    </h3>
                    <center>
                            <h3><u>SpeedOn Travels</u></h3>
                          <h3><u>Booking Detail</u></h3>
                           <hr>     
                    <table class="table table-striped table-hover" style="width: 30%;">
                        <?php $c_id=$row[0];?>
                                <tr><td><b>Name:</b></td><td><?php echo $row[1];?></td></tr>
                                <tr><td><b>Email ID:</b></td><td><?php echo $row[2];?></td></tr>
                                <tr><td><b>Phone No:</b></td><td><?php echo $row[4];?></td></tr>
                                <tr><td><b>Gender:</b></td><td><?php echo $row[5];?></td></tr>
                                <tr><td><b>Address:</b></td><td><?php echo $row[6];}?></td></tr> 



                                <?php


                                $p=mysqli_query($con,"select price from bus_detail where bus_id='".$bus_id."'");
                                $pro=mysqli_fetch_assoc($p);
                                
                                $pri=$pro['price']*$seat;
                                




                                 $qu="select * from bus_detail where bus_id='".$bus_id."'";
                                  $re=mysqli_query($con,$qu);
                                  while ($row=mysqli_fetch_row($re)) 
                                  {
                                    
                                        echo "<tr><td><b>Bus Number:</b></td><td>".$row[1]."</td></tr>";
                                        echo "<tr><td><b>Source Station:</b></td><td>".$row[2]."</td></tr>";
                                        echo "<tr><td><b>Destination Station:</b></td><td>".$row[3]."</td></tr>";
                                        echo "<tr><td><b>Number of selected seat:</b></td><td>".$seat."</td></tr>";
                                        echo "<tr><td><b>Price:</b></td><td>".$pri."</td></tr>";
                                        echo "<tr><td><b>Pickup Point:</b></td><td>".$pick_up."</td></tr>";
                                        echo "<tr><td><b>Drop Point:</b></td><td>".$drop."</td></tr>";




                                  }
                                
                                
                                  $a="INSERT INTO `booking`(`cust_id`,`bus_id`,`booked_seat`,`bill_price`) VALUES('".$c_id."','".$bus_id."','".$seat."','".$pri."')";
                                  $b=mysqli_query($con,$a);
                                  $c="select * from bus_detail where bus_id='".$bus_id."'";
                                  $d=mysqli_query($con,$c);
                                  while($t=mysqli_fetch_row($d))
                                  {
                                        $total_seat=$t[7];
                                  }
                                  $seats=$total_seat-$seat;
                                  $q="update bus_detail set max_seat='{$seats}' where bus_id='".$bus_id."'";
                                  $r=mysqli_query($con,$q);

                                 

                                ?>



                    </table>
                
            
                    <form method="post">
                        <input type="hidden" name="final-price" value="<?php echo $pri; ?>">
                        <!-- <input class="btn btn-success" type="submit" name="paymentnow" value="Payment">
                         --><button class="btn btn-success" onclick="myFunction('printable')">Print</button>

                        <script>
                        function myFunction(el) {
                       
                            var restorepage=document.body.innerHTML;
                            var myFunction=document.getElementById(el).innerHTML;
                            document.body.innerHTML=myFunction;
                            window.print();
                            document.body.innerHTML=restorepage;
                            }   
                        </script>
                    </form>
                </center>
                   
                
                    <div class="clearfix"> </div>
                </div>
                
            </div>
        </div>
        
    </div>










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