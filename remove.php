<?php
	session_start();
	include_once './blogic.php';
	$qry="delete from s_courses where c_id=$_REQUEST[id]";
	ExecuteNonQuery($qry);
	//var_dump($_SESSION[s_id]);
	//unset($_SESSION["cid"]);
	header("location:user.php");	
?>