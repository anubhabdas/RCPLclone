<?php
  session_start();
	$msg ="";
	include_once './blogic.php';
	if(isset($_REQUEST['btn_signin']))
	{
		$qry = "insert into student(s_name,s_email,s_pass) values('$_REQUEST[txt_name]','$_REQUEST[txt_email]','$_REQUEST[txt_pass]')";
		$x = ExecuteNonQuery($qry);
		if($x>0){
			$msg = "<font color='green'>Your'e Registered</font>";
		}
		else
		{
			$msg = "<font color='green'>Your'e not registered</font>".mysql_error();
		}
	}
?>
<?php
	$msg1="";
	if(isset($_REQUEST['btn_login'])){
		$qry = "select * from student where s_email='$_REQUEST[txt_email]' and s_pass='$_REQUEST[txt_pass]'";
    var_dump($qry);
		$res = ExecuteQuery($qry);
		if(mysql_affected_rows()>0){

        if(isset($_REQUEST['rem'])){
        setcookie("mycookie",$_REQUEST['txt_email'],time()+20000);
        setcookie("mycookie1",$_REQUEST['txt_pass'],time()+20000);
      }
			$r = mysql_fetch_array($res);
			$_SESSION['s_id'] = $r[0];
			header("location:user.php");
		}
		else
		{
			$msg1 ="<font size='5px' color='red'>Invalid username and password!!!</font>".mysql_error();
		} 
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<meta charset="utf-8">
	<meta name="viewport">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
  @import url(http://fonts.googleapis.com/css?family=Raleway:400,100,200,300);
* {
  margin: 0;
  padding: 0; }

a {
  color: #666;
  text-decoration: none; }
  a:hover {
    color: #4FDA8C; }

input {
  font: 16px/26px "Raleway", sans-serif; }

body {
  color: #666;
  background-color: #f1f2f2;
  font: 16px/26px "Raleway", sans-serif; }

.form-wrap {
	background-color: #273833;
  width: 40%;
  margin: 3em auto;
  -webkit-box-shadow: 0px 1px 8px #BEBEBE;
  box-shadow: 0px 4px 10px 4px #273833;
  border-radius: 4px; }
  .form-wrap .tabs {
    overflow: hidden;
    background-color: #3C574F;}
    .form-wrap .tabs h3 {
      float: left;
      width: 50%; }
      .form-wrap .tabs:hover{
      	background-color: #207F65;
      }
      .form-wrap .tabs h3 a {
        padding: 0.5em 0;
        text-align: center;
        font-weight: 400;
        background-color: #e6e7e8;
        display: block;
        color: #666; }
        .form-wrap .tabs h3 a.active {
          background-color: #1ab188; 
      }
  .form-wrap .tabs-content {
    padding: 1.5em; }
    .form-wrap .tabs-content div[id$="tab-content"] {
      display: none; }
    .form-wrap .tabs-content .active {
      display: block !important; }
  .form-wrap form .input {
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    color: inherit;
    font-family: inherit;
    padding: .8em 0 10px .8em;
    border: 1px solid #CFCFCF;
    outline: 0;
    display: inline-block;
    margin: 0 0 .8em 0;
    padding-right: 2em;
    width: 100%;
    border-radius: 4px; }
  .form-wrap form .button {
    width: 100%;
    padding: .8em 0 10px .8em;
    background-color: #28A55F;
    border: none;
    color: #fff;
    cursor: pointer;
    text-transform: uppercase; }
    .form-wrap form .button:hover {
      background-color: #4FDA8C; }
  .form-wrap form .checkbox {
    visibility: hidden;
    padding: 20px;
    margin: .5em 0 1.5em; }
    .form-wrap form .checkbox:checked + label:after {
      -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
      filter: alpha(opacity=100);
      opacity: 1; }
  .form-wrap form label[for] {
    position: relative;
    padding-left: 20px;
    cursor: pointer; }
    .form-wrap form label[for]:before {
      content: '';
      position: absolute;
      border: 1px solid #CFCFCF;
      width: 17px;
      height: 17px;
      top: 0px;
      left: -14px; }
    .form-wrap form label[for]:after {
      -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
      filter: alpha(opacity=0);
      opacity: 0;
      content: '';
      position: absolute;
      width: 9px;
      height: 5px;
      background-color: transparent;
      top: 4px;
      left: -10px;
      border: 3px solid #28A55F;
      border-top: none;
      border-right: none;
      -webkit-transform: rotate(-45deg);
      -moz-transform: rotate(-45deg);
      -o-transform: rotate(-45deg);
      -ms-transform: rotate(-45deg);
      transform: rotate(-45deg); }
  .form-wrap .help-text {
    margin-top: .6em; }
    .form-wrap .help-text p {
      text-align: center;
      font-size: 14px; }

</style>

<script type="text/javascript">
    function Validate()
    {
      flag = true;
      if(document.getElementById("u_email").value=="")
      {
        flag=false;
        document.getElementById("u_email").style="border-color:red";
        //document.write("Enter a valid username");
      }
      else{
        document.getElementById("u_email").style="";
      }
      if(document.getElementById("u_pass").value=="")
      {
        flag=false;
        document.getElementById("u_pass").style="border-color:red";
        //document.write("Enter a valid password");
      }
      else{
        document.getElementById("u_pass").style="";
      }
      return flag;
    }
    function ValidateSignup()
    {
      flag = true;
      if(document.getElementById("txt_email").value=="")
      {
        flag=false;
        document.getElementById("txt_email").style="border-color:red";
        //document.write("Enter a valid username");
      }
      else
      {
        document.getElementById("txt_email").style="";
      }
      if(document.getElementById("txt_pass").value=="")
      {
        flag=false;
        document.getElementById("txt_pass").style="border-color:red";
        //document.write("Enter a valid password");
      }
      else{
        document.getElementById("txt_pass").style="";
      }
      return flag;
    }
  </script>
</head>
<body>
<div class="container-fluid">
	<?php
		include_once './header.php';
	?>
</div>
<div class="container-fluid no-margin no-padding" style="background-color: #5A1B6C;">
<div>
	<font color="black"><hr size="1"></font>
</div>
<div class="container-fluid" style="background-color: #A7A6A6;">
<div class="form-wrap" style="height: absolute;">
		<div class="tabs">
			<h3 class="signup-tab"><a class="active" href="#signup-tab-content">Sign Up</a></h3>
			<h3 class="login-tab"><a href="#login-tab-content">Login</a></h3>
		</div><!--.tabs-->

		<div class="tabs-content">
			<div id="signup-tab-content" class="active">	
				<form class="signup-form" action="" method="post" onsubmit="return ValidateSignup()">
					<input type="text" class="input" id="txt_name" name="txt_name" id="user_name" autocomplete="off" placeholder="Username">
					<input type="email" class="input" id="txt_email" name="txt_email" id="user_email" autocomplete="off" placeholder="Email">
					<input type="password" class="input" id="txt_pass" name="txt_pass" id="user_pass" autocomplete="off" placeholder="Password">
					<input type="submit" class="button" name="btn_signin" value="Sign Up">
				</form><!--.login-form-->
				<div class="help-text">
					<font color="white">
					<p>By signing up, you agree to our</p>
					<p><a href="#">Terms of service</a></p>
					<?php
						echo $msg;
					?>
					</font>
				</div><!--.help-text-->
			</div><!--.signup-tab-content-->

			<div id="login-tab-content">
				<form class="login-form" action="" method="get" onsubmit="return Validate()">
					<input type="text" class="input" id="u_email" name="txt_email" id="user_login" autocomplete="off" placeholder="Email" value="<?php if(isset($_COOKIE['mycookie'])){ echo $_COOKIE['mycookie'];}?>">
					<input type="password" class="input" id="u_pass" name="txt_pass" id="user_pass" autocomplete="off" placeholder="Password" value="<?php if(isset($_COOKIE['mycookie1'])){ echo $_COOKIE['mycookie1'];}?>">
					<div>
					<input type="checkbox" name="rem" id="remember_me"><font color="white">Remember me 
					</font>
					</div>
					<input type="submit" class="button" name="btn_login" value="Login">
				</form><!--.login-form-->
				<div>
					<?php
						echo $msg1;
					?>
				</div>
				<div class="help-text">
					<p><a href="#">Forget your password?</a></p>
				</div><!--.help-text-->
			</div><!--.login-tab-content-->
		</div><!--.tabs-content-->
	</div><!--.form-wrap-->
	</div>
<div>
	<font color="black"><hr size="1"></font>
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