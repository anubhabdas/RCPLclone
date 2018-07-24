<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
	<meta charset="utf-8">
	<meta name="viewport">
	<title>Getting started with Bootstrap</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
	.navbar-default .navbar-nav>li>a:hover {
    background-color: #b89312;
	}
	.btn-ban{
		position: absolute; 
   		top: 400px; 
   		left: 800px; 
	}
	.drawline{
		border-left: 1px solid #000000;
    	float: left;
    	margin-left: 70px;
    	height: 250px;
    	position: relative;
}
	}
	</style>
	<script type="text/javascript">
		$(window).scroll(function() {  //This js is used for making the nav bar fix at the top.
  	if ($(document).scrollTop() > 50)
  	{
    	$('nav').addClass('shrink');
  	} 
  	else
  	{
    	$('nav').removeClass('shrink');
  	}
});
	</script>
</head>	
	<!--Here goes the above nav bar-->
<body>
<div class="container-fluid">
	<?php
		include_once './header.php';
	?>
</div>
<div class="col-xs-* bordercol" style="background-image:url(images/jumbo.jpg); height: 400px; padding-right: 20px; text-align: right; margin-top: -50px; margin-right: 0px; width: 100%;">
		<div class="container" style="color: white; margin-top: 50px;">
            <h2 class="text-info-2" style="margin-top: 120px;">Join our Campus Ambassador Program</h2>
            <h1 class="text-info-1 hidden-xs">Summer Training Program </h1><p><a class="btn btn-primary btn-lg" href="training.php" role="button">KNOW MORE</a></p>
        </div>
</div>
<div style="background-color: #201B47; color: white; height: absolute; padding-left: 100px; padding-right: 100px;" class="container-fluid why-choose-us bordercol"> 
<!--2nd section -->
	<div style="margin-top: 50px; font-size: 14px; line-height: 25px; margin-bottom: 30px; margin-left: 20px;">
		<p>RCPL is the largest training company in India with over 20 years of experience in the field of education. RCPL has a dedicated team of 80 team members which provide the quality trainings across the country. RCPL conducts trainings for students from best of the Institutions of the country . Over 25,000 students get trained by us every year.<br> 
		We provide Courses for Engineering and Non Engineering Stream like Computer Science, Information 	Technology, Mechanical, Civil, M.Sc. I.T , B.Sc.IT etc. and Programs like Summer Training , Winter Training, Project Training, College Training to Suit students round the year requirements. Android,AutoCAD 2D and 3D ,Embedded and Robotics, Java, .NET Framework are few the Courses available with us.<br></p>
	</div>
	<div class="row no-padding no-margin">	
		<div class="col-md-8 col-sm-6">
			<h2>LOOING FOR A WORKSHOP AT YOUR COLLEGE<p><br><a href="training.php"><button type="button" class="btn btn-info btn-lg">Click Here</button></a></p></h2>
		</div>
		<div class="col-md-4 hidden-xs col-sm-6">
			<img src="images/girl-1.png" class="img-responsive pull-right" style="margin-top:-30px;">
		</div>
	</div>
</div>
<div class="container-fluid bordercol container2" style="background-image: url(images/back1.png); height: absolute;width: absolute;">
	<div class="row" style="padding-left: 100px; font-size: 25px; margin-bottom: 80px; margin-top: 80px;">
		<div class="col-md-4 col-sm-4" style="margin-left:-100px;">
			<div class=" container-fluid row">
				<div class="col-sm-6 col-xs-6 col-md-6">
					<i class="fa fa-check pull-right sett"></i>
				</div>
				<div class="col-sm-6 col-xs-6 col-md-6">
					<font color="white"><p>20+ Years Experience</p></font><br>
				</div>
			</div>
			<div class="container-fluid row">
				<div class="col-sm-6 col-xs-6 col-md-6">
					<i class="fa fa-cloud pull-right sett"></i>
				</div>
				<div class="col-sm-6 col-xs-6 col-md-6">
					<font color="white"><p>Industry Courses</p></font><br>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-4">
			<div class="container-fluid row">
				<div class="col-sm-6 col-xs-6 col-md-6">
					<i class="fa fa-check pull-right sett"></i>
				</div>
				<div class="col-sm-6 col-xs-6 col-md-6">
					<font color="white"><p>International Certification</p></font><br>
				</div>
			</div>
			<div class="container-fluid row">
				<div class="col-sm-6 col-xs-6 col-md-6">
					<i class="fa fa-certificate pull-right sett"></i>
				</div>
				<div class="col-sm-6 col-xs-6 col-md-6">
					<font color="white"><p>Programs for all Needs</p></font>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-4">
			<div class="container-fluid row">
				<div class="col-sm-6 col-xs-6 col-md-6">
					<i class="fa fa-bars pull-right sett"></i>
				</div>
				<div class="col-sm-6 col-xs-6 col-md-6">
					<font color="white"><p>Courses for all</p></font><br><br>
				</div>
			</div>
			<div class="container-fluid row">
				<div class="col-sm-6 col-xs-6 col-md-6">
					<i class="fa fa-users pull-right sett"></i>
				</div>
				<div class="col-sm-6 col-xs-6 col-md-6">
					<font color="white"><p>Dedicated Team</p></font>
				</div>
			</div>
		</div>
	</div>	
</div>

<div class="container-fluid">
	<div class="container" style="margin-top: 30px;">
		<h3 align="center">Excited to Join?</h3>
		<h2 align="center">CHOOSE FROM THE LIST OF COURSES, PROGRAMS AND REGISTER YOURSELF OR YOUR FRIEND CIRCLE TODAY.</h2>
	</div>
	<hr><font color="#5C5C5C" size="1px"></font></hr>
	<div class="row">
		<div class="col-md-4 colpad">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6 col-xs-6 col-md-6 icon-course">
						<i class="icons-img fa fa-book pull-right" style="font-size: 60px;"></i>
					</div>
					<div class="col-sm-6 col-xs-6 col-md-6">
						<h3>COURSES</h3>
						<p>Select from specialized<br>courses in IT, Civil,<br>Mechanical, Automobile,<br>Architecture.<br><br>
						<a href="courses.php"><button type="button" class="btn btn-success"><font color="white">OUR COURSES</font></button></a> 
					</div>
				</div>
			</div>
		</div>
		<!--<div><hr style="width: 1px; height: 100%; min-height: 200px; color: black"></div>-->
		<div class="col-md-4 colpad">
			<div class="container-fluid">
				
				<div class="row">
					<div class="col-sm-6 col-xs-6 col-md-6 icon-course">
						<i class="icons-img fa fa-check-circle pull-right" style="font-size: 60px;"></i>
					</div>
					<div class="col-sm-6 col-xs-6 col-md-6">
						<h3>PROGRAMS</h3>
						<p>Select programs for the<br>locations nearby or<br>suitable to you<br>or your group.<br><br>
						<a href="#"><button type="button" class="btn btn-success"><font color="white">FIND PROGRAMS</font></button></a> 
					</div>
				</div>

			</div>
		</div>
		<div class="col-md-4 colpad">
			<div class="container-fluid">

				<div class="row">
					<div class="col-sm-6 col-xs-6 col-md-6 icon-course">
						<i class="icons-img fa fa-edit pull-right" style="font-size: 60px;"></i>
					</div>
					<div class="verticalLine"></div>
					<div class="col-sm-6 col-xs-6 col-md-6">
						<h3>REGISTRATION</h3>
						<p>Learn from the leaders.<br>Register yourself or<br>your friend and get<br>great discounts.<br><br>
						<a href="reg.php"><button type="button" class="btn btn-success"><font color="white">GET REGISTERED NOW</font></button></a>
					</div>
				</div>
				
			</div>
		</div>
	</div>	
	<hr><font color="#5C5C5C" size="1px"></font></hr>
</div>

<div class="container-fluid hidden-xs hidden-sm" style="margin-top: 50px; background-color: #D3D0D0;">
	<div class="container" style="margin-top: 30px;">
		<center><h2>WITH&nbsp;<strong>RCPL&nbsp;</strong>YOU&nbsp;CAN</h2></center>
	</div>
	<div class="container">
	<center>
	<hr size="1">
	<div class="row" style="margin-top: 80px; margin-bottom: 80px;">
		<div class="col-md-3">
	<i class="fa fa-search second-last" style="font-size: 50px; vertical-align: middle; margin-top: 10px;"></i><br>
	<span>Choose your course</span>
		</div>
		<div class="drawline">
			<span>OR</span>
		</div>
		<div class="col-md-3">
		<i class="fa fa-edit second-last" style="font-size: 50px;"></i><br>
		<span>Get enroll online</span>
		</div>
		<div class="col-md-3">
		<i class="fa fa-thumbs-up second-last" style="font-size: 50px;"></i><br>
		<span>Learn from expert trainer</span>
		</div>
		<div class="col-md-3">
		<i class="glyphicon glyphicon-certificate second-last" style="font-size: 50px;"></i><br>
		<span>Get certificates</span>
		</div>
	</div>
	<hr size="1">
	</center>
	</div>
</div>

<div class="container-fluid" style="height: absolute; background-color: #37A132;">
	<div class="row container" style="padding-left: 50px; margin-top: 20px; margin-bottom: 20px;">
		<div class="col-md-8" style="color: white;">
			<div>
				<h2><b>LOOKING FOR INTERNSHIP</b></h2><br>
				<p>If you are looking for Internship get registered now!</p>
			</div>
		</div>
		<div class="col-md-4" style="margin-top: 30px;">
			<div class="pull-right">
			<a href="reg.php"><button type="button" class="btn btn-primary btn-lg pull right"><font color="white">GET REGISTERED</font></button></a>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid no-margin no-padding">
	<?php
		include_once './footer.php';
	?>
</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>