<?php
  session_start();
  if(!isset($_SESSION['s_id']))
    header("location:reg.php");
?>
<?php 
  /*if(isset($_REQUEST['rem_c'])){
    header("locations:remove.php");
  }*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<meta charset="utf-8">
	<meta name="viewport">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>
    <script type="text/javascript">
function myFunction() {
    var x;
    if (confirm("Are you sure?") == true) {
        return true;
    } else {
        return false;
    }
    document.getElementById("demo").innerHTML = x;
}
</script>
</head>
<body>
<div class="container-fluid">
	<?php
		include_once './header.php';
	?>
</div>

<div class="container-fluid">
	<div class="user container-fluid no-margin no-padding">

		<div class="container text-center" style="margin-top: 100px;">
    <?php
      $qry = "select s_name from student where s_id=$_SESSION[s_id]";
      $res = ExecuteQuery($qry);
      $r = mysql_fetch_array($res);
			echo "<h2 style='color: white; font-size: 30px;'>Welcome $r[0]!</h2>";
      ?>
		</div>
	</div>
</div>
<div class="container" style="margin-top: 30px;">
	<?php
      if((isset($_SESSION['cid']))||(isset($_SESSION['s_id'])))
      {
        include_once './blogic.php';
        //var_dump($_SESSION['cid']);
        $updqry= "update s_courses inner join courses on s_courses.c_id=courses.c_id set s_courses.c_image=courses.c_image,s_courses.c_name=courses.c_name,s_courses.c_price=courses.c_price";
        //var_dump($_SESSION['s_id']);
        $x= ExecuteNonQuery($updqry);
        $qry= "select * from s_courses where s_id=$_SESSION[s_id]"; 
        $row = ExecuteQuery($qry);
        if(mysql_affected_rows()>0)
        {
            while($r = mysql_fetch_array($row))
            {
              echo" <div class='panel panel-success'>
                      <div class='panel-heading'>
                        <span><h3 class='panel-title' style='font-size: 30px;'><i class='fa fa-book'>&nbsp;My Course List</i></h3></span>
                      </div>
                      <div class='panel-body'>
                        <div class='row'>
                          <div class='col-md-3'>
                            <img src='$r[4]' class='img-responsive' height='350' width='350' alt='Course Image'>
                          </div>
                          <div class='col-md-9' style='margin-top: -20px;';>
                            <h2 style='color:#293AE1;'><b>$r[1]</b></h2>
                            <h3>Month of Course: <b>&nbsp;$r[2]</b></h3>
                            <h3>Location:<b>&nbsp;$r[3]</b></h3>
                            <h3>Price:<b>&nbsp;$r[5]</b></h3>
                          </div>
                        </div> 
                      </div>
                      <div class='row' style='padding-left:15px;'>
                        <div class='col-md-12'>
                            <a href='remove.php?id=$r[0]'><button type='submit' name='rem_c' onclick='return myFunction()' class='btn btn-lg btn-danger'>Remove Course</button></a>
                        </div><br>
                      </div><br>
                    </div><br>";
              }
            }
        }
        else
        {
          echo "<div class='panel panel-success'>
                  <div class='panel-heading'>
                    <span><h3 class='panel-title' style='font-size: 30px;'><i class='fa fa-book'>&nbsp;My Course List</i></h3></span>
                  </div>
                  <div class='panel-body'>
                    <h3>Please add a course to your dashboard</h3>
                  </div>";
        }
  ?>		
</div>

<div class="container" style="margin-top: 60px; margin-bottom: 60px;">
	<div class="panel panel-success">
  		<div class="panel-heading">
  			<span>
    		<h3 class="panel-title" style="font-size: 30px;"><i class="fa fa-book">&nbsp;Add New Course</i></h3></span>
  		</div>
  		<div class="panel-body">
    		<div class="row">
    			<div class="col-md-12" style="margin-top: 20px; margin-bottom: 30px;">
    				<a href="courses.php"><button type="submit" name="add_c" class="btn btn-success btn-lg textcol">ADD NEW COURSE</button></a>
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