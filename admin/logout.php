	<?php
session_start();

unset($_SESSION['name']);
unset($_SESSION['email']);


session_destroy();
echo "<script type= \"text/javascript\">
										alert(\"User Logout Successfully....\");
										window.location=(\"../index.php\")</script>";

?>