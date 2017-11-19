<?php
	$con=mysql_connect("localhost","root","");
		mysql_select_db("clubs_and_event_management",$con);

	 $Event_name = $_REQUEST['Event_name'];
     $date = $_REQUEST['Event_date'];
     $time = $_REQUEST['Event_time'];
    $venue=$_REQUEST['Event_venue'];
    $club=$_REQUEST['Club_ID'];
    $sponsor=$_REQUEST['Sponsor_ID'];
    $supplier=$_REQUEST['Supplier_ID'];
    $faculty=$_REQUEST['Faculty_ID'];

	 $sql= "insert into  event_details (Event_name,Date,Time,Club_ID,Venue_ID,Sponsor_ID,Supplier_ID,Faculty_ID) values('$Event_name','$date','$time','$club','$venue','$sponsor','$supplier','$faculty')";

    mysql_query($sql);

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


		header("location:../forms/welcome.php")
?>