<?php  
	 session_start();

	unset($_SESSION['us_email']);
	 	header("Location: ../index.php");
	?>