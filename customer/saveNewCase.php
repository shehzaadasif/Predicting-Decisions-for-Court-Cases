<?php
	session_start();
	include("db_connect.php");
	$db=new DB_Connect();
	$con=$db->connect();
	if($_POST["name"]==""){
		echo "Name";
	}
	else{
		 $qry="Select count(*) as cnt from CP_Case where CaseName='".$_POST["name"]."'";
		//echo $qry;
		$result=mysqli_query($con,$qry);
		$row=mysqli_fetch_array($result);
		if($row["cnt"]>0){
			echo "Exist";
		}
		else{	
		
		$qryi="Select * from cp_customerdetails where Email='".$_SESSION["Cusername"]."'";
		//echo $qry;
		$resulti=mysqli_query($con,$qryi);
		$rowi=mysqli_fetch_array($resulti);
		
			$qry="insert into CP_Case(CaseName,CaseDate,CaseOn,CaseBy,CaseLocation,CaseType,CaseDescription,Status,Cust_ID) values('".$_POST["name"]."','".$_POST["date"]."','".$_POST["caseon"]."','".$_POST["caseby"]."','".$_POST["location"]."','".$_POST["type"]."','".$_POST["desc" ]."','".$_POST["status"]."','".$rowi["ID"]."')";
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