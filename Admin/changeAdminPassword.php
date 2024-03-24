	<?php
	session_start();
	//$pd=$_SESSION["userpassword"];
	//echo $pd;
	include("db_connect.php");
	$db=new DB_connect();
	$con=$db->connect();
	$username=$_SESSION["bausername"];
	
	$pwd=$_REQUEST["pwd"];
	$password=$_REQUEST["oldpwd"];
	
	$qry="Update CP_Admin set Password='".$pwd."' where Password='".$password."' AND Username='".$username."'";
	//echo $qry;
	if(mysqli_query($con,$qry)){
		echo "success";
		session_destroy();
	}
	else{
		echo "error";
	}
?>

