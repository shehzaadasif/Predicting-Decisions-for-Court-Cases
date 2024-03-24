<?php
session_start();
	include("db_connect.php");
	$db=new DB_Connect();
	$con=$db->connect();
		
		
	$number="Select count(*) as number from CP_Case where CaseName='".$_POST["name"]."' and ID!='".$_POST["id"]."'";
	$rnumber=mysqli_query($con,$number);
	$rownumber=mysqli_fetch_array($rnumber);
	
	 if($rownumber["number"]>0){
		echo "number";
	}
	else{
		$qry="update CP_Case set CaseName='".$_POST["name"]."',CaseDate='".$_POST["date"]."',CaseOn='".$_POST["caseon"]."',CaseBy='".$_POST["caseby"]."',CaseLocation='".$_POST["location"]."',CaseType='".$_POST["type"]."',CaseDescription='".$_POST["desc"]."',Status='".$_POST["status"]."',Favor_Of='".$_POST["favorof"]."' where ID='".$_POST["id"]."'";
		//echo $qry;
		if(mysqli_query($con,$qry)){
			echo "Success";
		}
		else{
			echo "Error";
		}
	} 
?>