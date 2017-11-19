<script src="../js/jquery-1.9.1.js"></script>
<script>
	function loadfile(divname,filename)
	{
		//alert(divname+","+filename);
		$("#"+divname).load(filename);
	}
$(document).ready(function(){

});
</script>

<?php
	session_start(); 
	require '../config/project_var.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User Home - <?php echo $PROJECT_DISPLAY_NAME; ?></title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel='stylesheet' href='../css/jracss_blue.css' type='text/css' />

</head>
    <body background="../back.png">
    <center>
<div class="main">
	<div class="header"><?php echo $PROJECT_DISPLAY_NAME; ?>
		</div>
		<span style="height:auto; left:200px;color:#333; text-align:right; padding:4px; margin-right:10px;">WELCOME</span>

    <div class="nav">
    	<ul>
        	<li><a href="welcome.php">Home</a></li>
            <li><a href="#"  onclick='loadfile("workareadiv","search_gen.html")' >User Search</a></li>
            <li><a href="#"  onclick='loadfile("workareadiv","search_event.html")' >Event Search</a></li>
			<li><a href="../actions/logout.php">Logout</a></li>
        </ul>
		
    </div>
    <div class="middle">
		<div id="leftdiv">
			<div class="navleft">
				<ul>
					<li><a href="#" onclick='loadfile("workareadiv","student.html")'>Student</a></li>
					<li><a href="#" onclick='loadfile("workareadiv","event_details.html")'>Event</a></li>
					<li><a href="#" onclick='loadfile("workareadiv","sponsor_contact.html")'>Sponsor Contact</a></li>					
					<li><a href="#" onclick='loadfile("workareadiv","supplier.html")'>Supplier Contact</a></li>					
				</ul>				
			</div>			
		</div>
		<div id="workareadiv">
			Welcome to Club and Event Mangement		
            <img src="img/main.jpg" width="85%" height="550px">
		</div>	
	</div>
    <div class="footer"></div>
</div></center>
</body>
</html>
