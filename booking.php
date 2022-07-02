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


<?php
                        include("db.php");
                        $bus_id=$_POST['bus_id'];
                        if(isset($_POST['seat_save']))
                        {
                            $seatno=$_POST['seat'];
                            $cust_id=$_POST['cust_id'];
                            $bus_id=$_POST['bus_id'];
                            ;

                            $query="INSERT INTO `booking` values('','".$cust_id."','".$bus_id."','".$seatno."')";
                            $user=mysqli_query($con,$query);
                            if($user)
                            {
                                
                                echo "<script type= \"text/javascript\">;
                                        window.location=(\"billing.php\")</script>";
                                    
                            }
                            else
                            {
                                echo "<script type= \"text/javascript\">
                                        alert(\"There is some problem in booking...\");
                                        window.location=(\"booknow.php\")</script>";
                            }
                        }


                    ?>



?>

<?php 

    }

}
 else
    {
    	 header('location:index.php');
    }
 ?>