<?php
	session_start();
	include("db_connect.php");
	$db=new DB_Connect();
	$con=$db->connect();
	if($_POST["name"]==""){
		echo "Name";
	}else if($_POST["desc"]==""){
		echo "Description";
	}
	else{
		 /*$qry="Select count(*) as cnt from CP_CrimeType where Name='".$_POST["name"]."'";
		//echo $qry;
		$result=mysqli_query($con,$qry);
		$row=mysqli_fetch_array($result);
		if($row["cnt"]>0){
			echo "Exist";
		}
		else{*/	
			$qry="insert into CP_CrimeType(Name,Description) values('".$_POST["name"]."','".$_POST["desc"]."')";
			//echo $qry;
			if(mysqli_query($con,$qry)){
				echo "Success";
			}
			else{
				echo "Error";
			}
		//}
	}
?>