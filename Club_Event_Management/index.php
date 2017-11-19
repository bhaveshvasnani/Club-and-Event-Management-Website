
<?php
	require 'config/project_var.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home - <?php echo $PROJECT_DISPLAY_NAME; ?></title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link rel='stylesheet' href='css/jracss_blue.css' type='text/css' />
</head>
<body background="back.png">
<center><div class="main">
	<div class="header"><?php echo $PROJECT_DISPLAY_NAME; ?></div>
    <div class="nav">
    	<ul>
        	<li><a href="indexx.php">HOME</a></li>
            <li><a href="#about1">ABOUT US</a></li>
            <li><a href="#contact">CONTACT US</a></li>
        </ul>
    </div>
    <div class="middle">
        <section>
		<div class="slideshow-container">
			<div class="mySlides fade">
				<img height="350px" src="forms/img/1a.jpg" style="width:100%">
			</div>

			<div class="mySlides fade">
					<img height="350px" src="forms/img/2a.jpg" style="width:100%">
			</div>

			<div class="mySlides fade">
					<img height="350px" src="forms/img/3a.jpg" style="width:100%">
			</div>

			</div>
				<br>

			<div style="text-align:center">
			  <span class="dot"></span> 
			  <span class="dot"></span> 
			  <span class="dot"></span> 
			</div>
			<script>
				var slideIndex = 0;
				showSlides();

				function showSlides() {
					var i;
					var slides = document.getElementsByClassName("mySlides");
					var dots = document.getElementsByClassName("dot");
					for (i = 0; i < slides.length; i++) {
					   slides[i].style.display = "none";  
					}
					slideIndex++;
					if (slideIndex> slides.length) {slideIndex = 1}    
					for (i = 0; i < dots.length; i++) {
						dots[i].className = dots[i].className.replace(" active", "");
					}
					slides[slideIndex-1].style.display = "block";  
					dots[slideIndex-1].className += " active";
					setTimeout(showSlides, 2000); // Change image every 2 seconds
				}
			</script>

	</section>
        <br>
		<center><div id="logindiv"><?php include("forms/login.html"); ?></div>
        <div id="about1">
        <h3 class="sub">About Us</h3><br>
        <p class="subdisc">This is a platform to manage all the events happening in VIT. All clubs can use this to organise their events at one place. They can create an event, add sponsor details, add suplier details and can also register students using this website</p>
        <div id="about" class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h4>What We Do</h4>
                        <div class="line-dec"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item first-service">
                        <div class="icon"></div>
                        <h4>Easy Customizations</h4>
                        <p>New clubs and events can be easily added by the club members.</p>
                    </div>
                </div>
                 <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item second-service">
                        <div class="icon"></div>
                        <h4>Supplier and Sponsor Support</h4>
                        <p>Supplier and sponsors can also be registered for each event.</p>
                    </div>
                </div>
                 <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item third-service">
                        <div class="icon"></div>
                        <h4>Time Saving</h4>
                        <p>Clubs can save their time and register students here directly.</p>
                    </div>
                </div>
                 <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item fourth-service">
                        <div class="icon"></div>
                        <h4>Open To All Clubs</h4>
                        <p>Every single club can use this platform for its use.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div id="contact">
        <h3 class="sub">Contact Us</h3><br>
        <p class="subdisc">Club Management Team</p><br>
        <ul class="social">
		<li><a href="http://facebook.com"><i class="fa fa-facebook" target="_blank"></i></a></li>
		<li><a href="http://google.com"><i class="fa fa-google-plus" target="_blank"></i></a></li>
		<li><a href="http://twitter.com"><i class="fa fa-twitter" target="_blank"></i></a></li>
		<li><a href="http://youtube.com"><i class="fa fa-youtube" target="_blank"></i></a></li>
		<li><a href="http://instagram.com"><i class="fa fa-instagram" target="_blank"></i></a></li>
		</ul>
        <p class="subdisc">Email: clubmanage@gmail.com</p>
        <p class="subdisc">Phone No: 9826546581</p>
    </div></center>
	</div>
    <div class="footer"></div>
</div></center>
</body>
</html>
