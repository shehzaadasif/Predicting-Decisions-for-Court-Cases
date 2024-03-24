<?php
	session_start();
	include("db_connect.php");
	$db=new DB_Connect();
	$con=$db->connect();
	if($_POST["name"]==""){
		echo "Name";
	}else if($_POST["address"]==""){
		echo "Address";
	}else if($_POST["mobile"]==""){
		echo "Mobile";
	}else if($_POST["email"]==""){
		echo "Email";
	}
	else{
		 $qry="Select count(*) as cnt from cp_customerDetails where Mobile='".$_POST["mobile"]."' or Email='".$_POST["email"]."' ";
		//echo $qry;
		$result=mysqli_query($con,$qry);
		$row=mysqli_fetch_array($result);
		if($row["cnt"]>0){
			echo "Exist";
		}
		else{	
			$qry="insert into cp_customerDetails(Name,Email,Mobile,Password,Address,Gender,Status) values('".$_POST["name"]."','".$_POST["email"]."','".$_POST["mobile"]."','".$_POST["mobile"]."','".$_POST["address"]."','".$_POST["gender"]."','".$_POST["status"]."')";
			//echo $qry;
			if(mysqli_query($con,$qry)){
				echo "Success";
			}
			else{
				echo "Error";
			}
		}
	}
?>