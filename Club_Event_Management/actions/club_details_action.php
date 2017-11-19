<?php
	$con=mysql_connect("localhost","root","");
		mysql_select_db("clubs_and_event_management",$con);

	echo $Club_name = $_REQUEST['Club_name'];
	echo $Foundation_Date = $_REQUEST['Foundation_Date'];
    echo $Faculty = $_REQUEST['Faculty_ID'];

    $sql= "insert into  club_details (Club_name,Foundation_Date, Faculty_ID) values('$Club_name','$Foundation_Date','$Faculty')";
 
	$message = "";
	
	$status=mysql_query($sql);
	

	if($status==1)
	{
		$message = " inserted successfully";
	}
	else
	{
		$message = " not inserted";
	}
	echo $message;

    header("location:../forms/welcome.php");
?>