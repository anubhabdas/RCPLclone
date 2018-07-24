<?php
	session_start();
	if(!isset($_SESSION['s_id']))
		header("location:reg.php");
?>
<?php 
/*	include './blogic.php';
	$res=ExecuteQuery("select * from course where c_name like '%$_GET[searchbox]%'");
	if($_GET['searchbox']==''){
		echo "<center><b>Please go back and write something in the search box</b></center>";
		exit(); 
	}

	if(mysql_num_rows($res)<1){
		echo "<center><b>Oops! No Data Found</b></center>";
		exit(); 
	}
	while($r = mysql_fetch_array($res)){
		echo "Site Title:".$r[1]."<br>";
		echo "Site Link:".$r[2]."<br>";
		echo "Site Keywords:".$r[3]."<br>";
		echo "Site Description:".$r[4]."<br>";
		echo "<img src='uploads/$r[5]' width='100px' height='100px'>";
	}*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Courses</title>
	<meta charset="utf-8">
	<meta name="viewport">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container-fluid">
	<?php
		include_once './header.php';
	?>
</div>

<div class="container-fluid image">
	<img src="images/service.png" class="img-responsive">
	<h2 style="position: absolute; left: 40%; top: 50%; width: 100%; font-size: 40px;">COURSES</h2>	
</div>
<div class="container-fluid" style="background-color: #892A2A; min-height: 170px; width: 100%; height: 100%;">
<div class="section">
	<div class="container row" style="padding: 10% 10% 10% 10%;">
		<form>
			<div class="col-sm-3 col-md-3">
				<select name="categories" class="btn-lg form-select">
					<option>Select Category</option>
					<option>Java</option>
					<option>PHP</option>
					<option>Android</option>
					<option>Embeded Systems</option>
					<option>ASP</option>
					<option>Python</option>
				</select>
			</div>
			<div class="col-sm-9 col-md-9 pull-right" style="padding-left: 5%;">
			<a class="input-group">
				<input class="inputbox btn-block input-lg form-control" type="text" id="livesearch" name="search" placeholder="Search your course which you want to learn">
				<span class="input-group-btn">
				<button style="background-color: #CFDA1E;" class="btn input-lg" type="button">
					<span style="color: #FFFFFF;">
						<i class="fa fa-search"></i>
					</span>
				</button>
			</span>
			</a>
			</div>
		</form>
	</div>
</div>
</div>

<div class="container-fluid">
	<div class="container padd5" >
		<div class="row">
			<div class="col-sm-4">
				<div class="well well-lg">
				<div class="text-center">
					<img src="images/java.png" width="250" height="250" class="img-responsive img-thumbnail padd5">
				</div>
					<h3><b>Java</b></h3>
					<h5>PHP is a server side scripting language designed for web development</h5>
					<div class="text-center">
						<a href="details.php?c_id=1&c_name=JAVA" class="textcol"><button class="btn btn-primary butt" style="margin: 5% auto;">View Details</button></a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="well well-lg">
				<div class="text-center">
					<img src="images/php.png" width="300" height="300" class="img-responsive img-thumbnail padd5">
				</div>
					<h3><b>PHP</b></h3>
					<h5>PHP is a server side scripting language designed for web development</h5>
					<div class="text-center">
						<a href="details.php?c_id=2&c_name=PHP" class="textcol"><button class="btn btn-primary butt" style="margin: 5% auto;">View Details</button></a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="well well-lg">
					<div class="text-center">
					<img src="images/android.png" width="250" height="250" class="img-responsive img-thumbnail padd5">
				</div>
					<h3><b>ANDROID</b></h3>
					<h5>Android helps you to attain stability in mobile devices</h5>
					<div class="text-center">
						<a href="details.php?c_id=3&c_name=ANDROID" class="textcol"><button class="btn btn-primary butt" style="margin: 5% auto;">View Details</button></a>
					</div>
				</div>
			</div>
		</div>	
		<div class="row">
			<div class="col-sm-4">
				<div class="well well-lg">
					<div class="text-center">
					<img src="images/embedded.png" width="250" height="250" class="img-responsive img-thumbnail padd5">
				</div>
					<h3><b>EMBEDDED SYSTEMS</b></h3>
					<h5>Electronic circuits and boards along with computer programming</h5>
					<div class="text-center">
						<a href="details.php?c_id=4&c_name=EMBEDDED SYSTEMS" class="textcol"><button class="btn btn-primary butt" style="margin: 5% auto;">View Details</button></a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="well well-lg">
					<div class="text-center">
					<img src="images/asp.png" width="250" height="250" class="img-responsive img-thumbnail padd5">
				</div>
					<h3><b>ASP</b></h3> 
					<h5>ASP.NET Web Site Administration tool is a basic utility</h5>
					<div class="text-center">
						<a href="details.php?c_id=5&c_name=ASP" class="textcol"><button class="btn btn-primary butt" style="margin: 5% auto;">View Details</button></a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="well well-lg">
					<div class="text-center">
						<img src="images/python.png" width="250" height="250" class="img-responsive img-thumbnail padd5">
					</div>
					<h3><b>PYTHON</b></h3>
					<h5>It's no secret that python is the most commonly use</h5>
					<div class="text-center">
						<a href="details.php?c_id=6&c_name=PYTHON" class="textcol"><button class="btn btn-primary butt" style="margin: 5% auto;">View Details</button></a>
					</div>
				</div>
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
<script src="js/query.js"></script>
</body>
</html>