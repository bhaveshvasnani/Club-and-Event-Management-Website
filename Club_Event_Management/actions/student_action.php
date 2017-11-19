<?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("clubs_and_event_management",$con);

	$Student_ID = $_REQUEST['Student_ID'];
  	$School_ID = $_REQUEST['School_ID'];	
  	$First_name = $_REQUEST['First_name'];
	$Mid_name = $_REQUEST['Mid_name'];
	$Last_name = $_REQUEST['Last_name'];
	$Ph_number = $_REQUEST['Ph_number'];
	$Address = $_REQUEST['Address'];
	$Sex = $_REQUEST['Sex'];
	$Email_ID = $_REQUEST['Email_ID'];
	$Birthday = $_REQUEST['Birthday'];
    $Event_ID = $_REQUEST['Event_ID'];

	$sql= "insert into  student (Student_ID,First_name,Mid_name,Last_name,Ph_number,Address,Sex,Email_ID,Birthday,Event_ID) values('$Student_ID','$First_name','$Mid_name','$Last_name','$Ph_number','$Address','$Sex','$Email_ID','$Birthday','$Event_ID')";
 

	$message = "";
	$status = mysql_query($sql);
		//echo $sql;
	if($status==1)
	{
		$message = $First_name.", inserted successfully";
	}
	else
	{
		$message = $First_name.", not inserted";
	}
	echo $message;

    header("location:../forms/welcome.php");
?>
