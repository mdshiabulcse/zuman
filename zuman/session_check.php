<?php
session_start();
if ($_SESSION['shakib']) {
	
}
else{
	header("location:admin_login.php");
}



?>