<?php
session_start();
	include("db_connect.php");
	$db=new DB_Connect();
	$con=$db->connect();
		
		
		
	$number="Select count(*) as number from cp_customerDetails where Mobile='".$_POST["mobile"]."' and ID!='".$_POST["id"]."'";
	$rnumber=mysqli_query($con,$number);
		$rownumber=mysqli_fetch_array($rnumber);
		
	
	$email="Select count(*) as email from BA_CustomerDetails where Email='".$_POST["email"]."' and ID!='".$_POST["id"]."'";
	$remail=mysqli_query($con,$email);
	$rowemail=mysqli_fetch_array($remail);
	
	//echo $rowadhar["adhar"];
	//echo $rowimei["imei"];
	//echo $rowemail["email"];
	//echo $rownumber["number"];
	 if($rownumber["number"]>0){
		echo "number";
	}else if($rowemail["email"]>0){
		echo "email";
	}
	else{
		$qry="update cp_customerDetails set Name='".$_POST["name"]."',Email='".$_POST["email"]."',Mobile='".$_POST["mobile"]."',Address='".$_POST["address"]."',Gender='".$_POST["gender"]."',Status='".$_POST["status"]."' where ID='".$_POST["id"]."'";
		//echo $qry;
		if(mysqli_query($con,$qry)){
			echo "Success";
		}
		else{
			echo "Error";
		}
	} 
?>