<?php 
	session_start();
	include "db_connect.php";
	$db=new DB_connect();
	$con=$db->connect();
	$username=$_POST["username"];
	$password=$_POST["password"];
	// $status=$_POST["status"];
	
	$qry="select count(*) as Cnt from cp_customerdetails where Email='".$username."' and Password='".$password."' and Status='On' ";
	//echo $qry;
	$run=mysqli_query($con,$qry);
	$row=mysqli_fetch_array($run);
	if($row["Cnt"]==1){
			$_SESSION["Cusername"]=$username;
			echo "Success";
		}
	else{
		echo "Error";
	}
	
	
?>