<?php
	session_start();
	
	//$pd=$_SESSION["userpassword"];
	//echo $pd;
	include("db_connect.php");
	$db=new DB_connect();
	$con=$db->connect();
	
	$pwd=$_REQUEST["pwd"];
	$password=$_REQUEST["oldpwd"];
	
	$qry="Update cp_customerDetails set Password='".$pwd."' where Password='".$password."' AND Email='".$_SESSION["Cusername"]."'";
	//echo $qry;
	if(mysqli_query($con,$qry)){
		echo "success";
	}
	else{
		echo "error";
	}
?>

