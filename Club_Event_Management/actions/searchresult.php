<?php
	session_start();
	$con=mysql_connect("localhost","root","");
	mysql_select_db("clubs_and_event_management",$con);
    $u=0;
	if(isset($_POST['searchvalue']))
	{
		$searchvalue = $_POST['searchvalue'];
			
		if (!empty($searchvalue))
		{
			//echo 'You searchvalue is : <b>'. $searchvalue."</b>(";
			
			$query= "SELECT `userid`, `username`, `password`, `usertype` FROM `user` WHERE username like '%".$searchvalue."%'";
	
			if($query_run=mysql_query($query))
			{
				$query_num_rows= mysql_num_rows($query_run);
				if($query_num_rows==0)
				{
					echo 'no result found';
				} 
				else if ($query_num_rows>=1)
				{
					//echo $query_num_rows." records found)<br>";
					while ($row = mysql_fetch_array($query_run))   
					{  
                        echo '<div class="wrapper">
  <div class="cols">
            <div class="col" ontouchstart="this.classList.toggle("hover");">
                <div class="container">
                    <div class="front" style="background-image: url(https://unsplash.it/508/508/)">
                        <div class="inner">
                            <p>'.$row['username'].'</p>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                          <p>'.$row['usertype'].'</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>';
                        
						//echo '<div id="tile'.$x.'"><img src="../back.png" width=100% height=75%><div id="ename">'.$row['username'].'</div></div>';
					}
					mysql_close($con);  
				}
			}			
		}
	}
?>
<!--<html>
    <body>
        <div id="foo">
            <span>lalalalalalalalalalalalalalalala</span>
        </div>
        <script>
        $('#tile0').fadeOut("slow", function(){
    var div = $("foo").hide();
    $(this).replaceWith(div);
    $('#foo').fadeIn("slow");
});
        </script>
    </body>    
</html>-->