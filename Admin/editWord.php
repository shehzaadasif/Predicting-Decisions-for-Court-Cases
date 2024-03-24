<?php
session_start();
	include("db_connect.php");
	$db=new DB_Connect();
	$con=$db->connect();
		
		
	/*$number="Select count(*) as number from CP_CrimeType where Name='".$_POST["name"]."' and ID!='".$_POST["id"]."'";
	$rnumber=mysqli_query($con,$number);
	$rownumber=mysqli_fetch_array($rnumber);

	
	 if($rownumber["number"]>0){
		echo "number";
	}
	else{*/
		$qry="update cp_word set Word='".$_POST["word"]."',Sentiment='".$_POST["sentiment"]."' where ID='".$_POST["id"]."'";
		//echo $qry;
		if(mysqli_query($con,$qry)){
			echo "Success";
		}
		else{
			echo "Error";
		}
	//} 
?>