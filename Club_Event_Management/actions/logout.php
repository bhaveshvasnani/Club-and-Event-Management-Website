<?php
	header("Cache-Control: no-store, no-cache, must-revalidate"); // HTTP/1.1
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
	header("Pragma: no-cache"); // HTTP/1.0
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	
	session_start();
	
	unset($_SESSION['user_id']);
	unset($_SESSION['mobileno']);
	session_unset(); 
	session_destroy();
	header("Location:../index.php");	
?>