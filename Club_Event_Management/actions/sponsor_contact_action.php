<?php
	$con=mysql_connect("localhost","root","");
		mysql_select_db("clubs_and_event_management",$con);

	$Sponsor_ID = $_REQUEST['Sponsor_ID'];
	$First_name = $_REQUEST['First_name'];
	$Mid_name = $_REQUEST['Mid_name'];
	$Last_name = $_REQUEST['Last_name'];
	$Ph_number = $_REQUEST['Ph_number'];

	$sql= "insert into  sponsor_contact (Sponsor_ID,First_name,Mid_name,Last_name,Ph_number) values('$Sponsor_ID','$First_name','$Mid_name','$Last_name','$Ph_number')";
 

	$message = "";
	$status = mysql_query($sql);
	
	if($status==1)
	{
		$message = $First_name." - ".$Ph_number.", inserted successfully";
	}
	else
	{
		$message = $First_name." - ".$Ph_number.", not inserted";
	}
	echo $message;

?>