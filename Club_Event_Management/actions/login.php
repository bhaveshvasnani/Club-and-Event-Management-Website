<?php
	session_start();
	$con=mysql_connect("localhost","root","");
	mysql_select_db("clubs_and_event_management",$con);
		
	if(isset($_POST['username']) && isset($_POST['password']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$password_hash=md5($password);	
	
		if (!empty($username)&&!empty($password))
		{
			$query= "SELECT `userid`, `username`, `password`, `usertype` FROM `user` WHERE username='$username' and password='$password'";
	
			if($query_run=mysql_query($query))
			{
				$query_num_rows= mysql_num_rows($query_run);
				if($query_num_rows==0)
				{
					echo 'Invalid username or password';
				} 
				else if ($query_num_rows==1)
				{
					$row = mysql_fetch_array($query_run);
					$user_id = $row['userid'];
					$user_name = $row['uername'];
                    $user_type = $row['usertype'];
					$_SESSION["user_id"]=$user_id;
					$_SESSION["user_name"]=$username;
                    if ($user_type=="student"){
                        header("location:../forms/welcomes.php");    
                    }
                    else if ($user_type=="eventmgr"){
                        header("location:../forms/welcomec.php");    
                    }
                    else {
                        header("location:../forms/welcome.php");
                    }
				}
			}
			else{
	
			}
		}
		else
		{
			echo 'You must supply a username and a password'; 
		}
	}
?>