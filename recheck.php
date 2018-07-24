<?php
	session_start();
	if(!isset($_SESSION['s_id']))
		header("location:reg.php");
?>
?>
<!DOCTYPE html>
<html>
<head>
	<title>Course Option</title>
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

<div class="container-fluid">
	<div class="container well well-lg text-center">
	<?php 
		$msg3 = "<p><font size='6' color='red'><u>Subject already registered!</u></font></p>".mysql_error();
		echo "<div>";
		echo $msg3;
		echo "<br><br>For your kind information: <br><b>You cannot opt for same subject at the same time. <br> Try to choose another subject.<b><br>Click on the button below to get to the courses page.<br><br>"; 
		echo "</div>
		<a href='courses.php'><button class='btn-lg'>Get back to courses</button></a>";
	?>
	</div>
	<br><br>
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