<?php
	$con=mysql_connect("localhost","root","");
		mysql_select_db("clubs_and_event_management",$con);

//	echo $userid = $_REQUEST['userid'];
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
	$usertype = $_REQUEST['usertype'];

	$sql= "insert into  user (username,password,usertype) values('$username','$password','$usertype')";
 
 	$message = "";
	$status = mysql_query($sql);
	
	if($status==1)
	{
		$message = $username." registered successfully";
	}
	else
	{
		$message = $username." not registered";
	}
	echo $message;
?>