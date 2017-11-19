<?php
	session_start();
	$con=mysqli_connect("localhost","root","","clubs_and_event_management");
	$x="hgvh";
		
	if(isset($_POST['searchvalue']))
	{
		$searchvalue = $_POST['searchvalue'];
			
		if (!empty($searchvalue))
		{
    
$query="select Event_name from event_details where Event_name like '%$searchvalue%'";
if($query_run=mysqli_query($con,$query))
			{
    $i=0;
				$query_num_rows= @mysqli_num_rows($query_run);
				if($query_num_rows==0)
				{
					echo 'no result found';
				} 
				else if ($query_num_rows>=1)
				{
					//echo $query_num_rows." records found)<br>";
					while ($row = mysqli_fetch_array($query_run))   
					{
                        if ($i==0){
                            $x=$row['Event_name'];
                            $i++;
                        }
                    }
                }
}

$sql = "select Club_name from club_details where Club_ID in (select Club_ID from event_details where Event_name like '%$searchvalue%');";
$sql .= "select Venue_location from venue where Venue_ID in (select Venue_ID from event_details where Event_name like '%$searchvalue%');";
$sql .= "select First_name from faculty_indulged where Faculty_ID in (select Faculty_ID from event_details where Event_name like '%$searchvalue%');";
$sql .= "select First_name from sponsor_contact where Sponsor_ID in (select Sponsor_ID from event_details where Event_name like '%$searchvalue%');";
$sql .= "select First_name from supplier where Supplier_ID in (select Supplier_ID from event_details where Event_name like '%$searchvalue%')";

/*echo '<div class="wrapper">
            <div class="cols">
            <div class="col" ontouchstart="this.classList.toggle("hover");">
                <div class="container">
                    <div class="front" style="background-image: url(https://unsplash.it/508/508/)">
                        <div class="inner"><p>Event</p></div>
                    </div>
                    <div class="back">
                        <div class="inner">
                        <p>A</p>
                        <p>B</p>
                        <p>C</p>
                        <p>D</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>';*/
            
// Execute multi query
if (mysqli_multi_query($con,$sql))
{
    $str='<div class="wrapper">
            <div class="cols">
            <div class="col" ontouchstart="this.classList.toggle("hover");">
                <div class="container">
                    <div class="front" style="background-image: url(https://unsplash.it/508/508/)">
                        <div class="inner"><p>'.$x.'</p></div>
                    </div>
                    <div class="back">
                        <div class="inner">';
  do
    {
       
    // Store first result set
    if ($result=mysqli_store_result($con)) {
     //print_r ($result);
      // Fetch one and one row
      
      while ($row=mysqli_fetch_row($result))
        {
          $str.='<p>'.$row[0].'</p>';
          //print_r ($row);
        //printf("%s\n",$row[0]);
        }
        
      // Free result set
      mysqli_free_result($result);
      }
    }
  while (@mysqli_next_result($con));
    $str .='</div>
                    </div>
                </div>
            </div>
            </div>';
    echo $str;
}


			
			/*$query= "SELECT ed.Event_ID evid, `Event_name`,Club_name, `Date`, `Time` FROM `event_details` ed,organizes org,club_details  cd
   WHERE `Event_name` like '%".$searchvalue."%' and ed.event_id = org.event_id and org.club_id=cd.club_id";
   
	   
            $query="select Club_name from club_details where Club_ID=(select Club_ID from event_details where Event_name like '%$searchvalue%')";
            $query.="select Venue_location from venue where Venue_ID=(select Venue_ID from event_details where Event_name like '%$searchvalue%')";
            
            /*
            $query="SELECT `Event_ID`,`Event_name`, `Date`, `Time` FROM  `event_details` WHERE  `Event_name` LIKE  '%".$searchvalue."%'LIMIT 0 , 30";
            $q=mysqli_multi_query($con,$query);
            print_r ($q);
            if (mysqli_multi_query($con,$query))
{
                echo 'query run';
  do
    {
    // Store first result set
    if ($result=mysqli_store_result($con)) {
      // Fetch one and one row
        echo 'one row';
      while ($row=mysqli_fetch_row($result))
        {
        printf("%s\n",$row[0]);
        }
      // Free result set
      mysqli_free_result($result);
      }
    }
  while (mysqli_next_result($con));
}
            
            /*if($query_run=mysqli_multi_query($con,$query))
			{
                //echo $query_run;
				$query_num_rows= mysqli_num_rows($query_run);
				if($query_num_rows==0)
				{
					echo 'no result found';
				} 
				else if ($query_num_rows>=1)
				{
					while ($row = mysqli_fetch_array($query_run))   
					{  
                        
                        
            echo '<div class="wrapper">
            <div class="cols">
            <div class="col" ontouchstart="this.classList.toggle("hover");">
                <div class="container">
                    <div class="front" style="background-image: url(https://unsplash.it/508/508/)">
                        <div class="inner">
                            <p>'.$row['Club_name'].'</p>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                          <p>dffgettr</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>';
                   //         }
                   //     }
                   //     }
					}
                }
					  
				}*/
			}			
		//}
	//}
    }
?>