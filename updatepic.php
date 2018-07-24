<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
		<center>
					<div class="container-fluid">
						<?php
							include_once './header.php';
						?>
					</div>
					<div class="container-fluid" style="background-color: #633B94; width: 100%; height: 400px;">
						<div class="container" style="margin-top: 40px;">
								<div class="row">
								<form method ="post" enctype="multipart/form-data">
									<h2>Select File to Upload:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="myfile"></h2>
										<input class="myclass" id="btn" type= "submit" name="upload" value="Upload File" onClick="window.location.reload()">
								</form>
								</div>
								<?php
								$msg1="";
								/*if(isset($_REQUEST['getinfo'])){

										echo "File name: ".$_FILES['myfile']['name']."<br>";
										echo "File size: ".$_FILES['myfile']['size']."<br>";
										echo "File type: ".$_FILES['myfile']['type']."<br>";
										echo "File error: ".$_FILES['myfile']['error']."<br>";
										echo "File temp name: ".$_FILES['myfile']['tmp_name']."<br>";
								}*/
								if(isset($_REQUEST['upload'])){
									$source = $_FILES['myfile']['tmp_name'];
									$des = $_SERVER['DOCUMENT_ROOT']."RCPLclone/images/profile_pics/".$_FILES['myfile']['name'];
									$p ="images/profile_pics/".$_FILES['myfile']['name'];
									$_SESSION['file']=$p;
									if(move_uploaded_file($source,$des)){
										echo "<font color='white' size='10px'>File Uploaded</font><br><br>";
										//echo $des;
										$_SESSION['file']=$p;
										//echo $_SESSION['file'];
										//includee './blogic.php';
						$qry = "update student set s_image='$_SESSION[file]' where s_id=$_SESSION[s_id]";
										$x=ExecuteNonQuery($qry);
										if($x>0){
											$msg1 = "<font color='green'>Profile Pic has been updated!</font>";
											echo $msg1;
											header("location:user.php");
										}
										else
										{
											$msg1= "<font color='red'>Error in Updating!</font>".mysql_error();
											echo $msg1;
										}
										//CloseConnection();
									}
									else{
									echo "<font color='white' size='10px'>Error in uploading the file!</font>";
									}	
								}	
							?>
						</div>
					</div>
					<div class="container-fluid no-margin no-padding">
						<?php
							include_once './footer.php';
						?>
					</div>
				</center>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/query.js"></script>	
</body>
</html>