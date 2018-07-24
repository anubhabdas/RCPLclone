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

	</style>
<!--Start Navigation bar-->
<nav class="navbar navbar-inverse navbar-static-top no-margin-bottom navbar-fixed-top affix-top" role="navigation">
	<div class="container-fluid navbar-inverse">
		<!--Brand and toggle get grouped for better mobile display-->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>	
	      	</button>
      		<a class="navbar-brand page-scroll" href="index.php">RCPL</a>
		</div>
	

		<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav nav-tabs txt-color">
				<li><a href="index.php" class="active">Home</a></li>
				<li><a href="about.php">About Us</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li class="dropdown">
          		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Programs<span class="caret"></span></a>
          		<ul class="dropdown-menu">
	            	<li role="separator" class="divider"></li>
	            	<li><a href="courses.php">Courses</a></li>
	            	<li role="separator" class="divider"></li>
	            	<li><a href="training.php">Training</a></li>
          		</ul>
        		</li>
        		<?php
        			if(isset($_SESSION['s_id'])){
        				echo"<li><a href='user.php'>Dashboard</a></li>";
        				echo "<li><a href='logout.php'>Logout</a></li>";		
        			}
        			else
        			{
        				echo "<li><a href='reg.php'>Login | Register</a></li>";
        			}
        		
        		?>
			</ul>
		</div>
	</div>
</nav>
<!--End of Navigation bar-->

<div class="page-header bordercol" style="height: absolute;">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-8 col-md-8">
				<a href="index.php"><img src="images/index.png" class="img-responsive" style="margin-top:10px;"></a>
			</div>
			<!-- <div class="col-xs-4 col-md-4">
				<img src="images/profile_pics/me.jpg" class="img-circle img-responsive pull-right" width="100px" height="100px" style="margin-top: 20px;">
			</div> -->
			<?php
			include_once './blogic.php';
			if(isset($_SESSION['s_id']))
			{

				/*There is a problem regarding the selection of the image. When a new person registers he is not allowed to update his/her profile picture. Otherwise the code has no problem. The next page updatepic.php has no problem and working correctly*/

				$res = ExecuteQuery("select * from student where s_id=$_SESSION[s_id]");
				if(mysql_affected_rows()>0)
				{				
					//var_dump($res);
					//var_dump($_SESSION['s_id']);

					while($r=mysql_fetch_array($res))
					{	
						echo"<div class='col-xs-4 col-md-4'>";
						echo"<a href='updatepic.php'><img src='$r[4]' class='img-rounded img-responsive pull-right' width='130px' height='130px' style='margin-top: 40px;'></a>";
						echo"</div>";			
					}
				}
				else
				{	
					echo"<div class='col-xs-4 col-md-4'>";
					echo"<a href='updatepic.php'><img src='http://www.clker.com/cliparts/d/L/P/X/z/i/no-image-icon-hi.png' class='img-rounded img-responsive pull-right' width='100px' height='100px' style='margin-top: 20px;'></a>";
					echo"</div>";
				}	
			}
			?>
		</div>
	</div>
</div>

<script src="js/query.js"></script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>