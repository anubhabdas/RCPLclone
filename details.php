<?php
	session_start();
	if(!isset($_SESSION['s_id']))
		header("location:reg.php");
?>
<?php
	include_once './blogic.php';
	$msg2="";
	$msg1="";
	if(isset($_REQUEST['btn_join']) && ($_SESSION['s_id'])){
		
		$chkqry = "select * from s_courses where c_id='$_REQUEST[c_id]'";
		//var_dump($chkqry);
		$res1 = ExecuteQuery($chkqry);
		//var_dump($res1);
		if(mysql_affected_rows()>0){
			
				//$msg1 ="<p><font size='8' color='red'>Subject already registered</font></p>".mysql_error();
				header("location:courses.php");
				
		}
		else{

				if(isset($_REQUEST['btn_join'])){
				$qry = "insert into s_courses(c_id,s_id,c_month,c_location) values($_SESSION[cid],$_SESSION[s_id],'$_REQUEST[c_month]','$_REQUEST[c_location]')";
				$res = ExecuteNonQuery($qry);
					if($res>0){
						header("location:user.php");
					}
					else
					{

						header("location:recheck.php");
					}		
				}
			}
	}
		
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

<div class="container-fluid" style="background-color: black; height: 300px;">
	<div class="container text-center" style="color: white; font-size: 20px; margin-top: 100px;">
		<h2>DETAILS</h2>
	</div>
</div>

<div class="container">
	<h2>Course Option</h2><br> 
	<div class="well well-lg padd10">
	<form method="get">
		<?php 
		//var_dump($_REQUEST['c_id']);
		//var_dump($_SESSION['cid']);
		//var_dump($_REQUEST['c_name']);
		//var_dump($_SESSION['s_id']);
			include_once './blogic.php';
			$qry = "select * from courses where c_id='$_REQUEST[c_id]'";
			$res = ExecuteQuery($qry);
			if(mysql_affected_rows()>0){
				while($r = mysql_fetch_array($res)){
				echo"<div class='text-center'>
						<h2><label>$r[1]</label></h2>
					</div>
					<div class='text-center' style='padding: 2%;'>
						<img src='$r[3]' width='800' height='300' class='img-thumbnail img-responsive' style='padding: 2% 2% 2% 2%;'><br><br>	
					</div>";
					if(!isset($_REQUEST['btnn_join']))
						$_SESSION['cid']=$_REQUEST['c_id'];
					//var_dump($_SESSION['cid']);
					//echo $_SESSION['cid'];
				}
			}
		?>
			<h4>Training Location</h4>
			<select required name="c_location" class="btn-block form-control" id="train_loc">
				<option value="Kolkata">Kolkata</option>
				<option value="Mumbai">Mumbai</option>
				<option value="Bhubaneswar">Bhubaneswar</option>
			</select><br>
			<h4>Prefered Month</h4>
			<select required name="c_month" class="btn-block form-control" id="train_mon">
				<option value="January">January</option>
				<option value="February">February</option>
				<option value="March">March</option>
				<option value="April">April</option>
				<option value="May">May</option>
				<option value="June">June</option>
				<option value="July">July</option>
				<option value="August">August</option>
				<option value="September">September</option>
				<option value="October">October</option>
				<option value="November">November</option>
				<option value="December">December</option>
			</select>
		<?php 
		include_once './blogic.php';
		$qry = "select * from courses where c_id='$_REQUEST[c_id]'";
		$res = ExecuteQuery($qry);
			if(mysql_affected_rows()>0){
				$r = mysql_fetch_array($res);
				echo"<h2>Price:&nbsp;$r[2]</h2>";
		}
		?>
		<div class="text-center">
		<label style="color: blue;"><i>*All the prices mentioned above are inclusive of taxes</i></label>
		</div><br><br>
		<a href="user.php" style="text-decoration: none;"><button type="submit" name="btn_join" class="btn btn-block btn-success"><font color="white" size="6">Join Now</font></button></a>
		<?php
			echo $msg1;
			echo $msg2;
		?>
		</form>
	</div>
</div>
<!-- <div class="container-fluid">
	<div class="container">
	<div class="well well-lg">
		<form method="get">
		<fieldset>
			<legend>Enter the Details of Course as above</legend>
			<label>Name:</label>
			<input type="text" name="c_name" required><br>
			<label>Month:</label>
			<input type="text" name="c_month" required><br>
			<label>Price:</label>
			<input type="number" name="c_price" required><br>
			<label>Location:</label>
			<input type="text" name="c_location" required><br>
						<div>
				<?php
					//echo $msg2;
				?>
			</div>
		</form>
		</fieldset>
		</div>
	</div>
</div>
-->
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