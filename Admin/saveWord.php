<?php
	session_start();
	include("db_connect.php");
	$db=new DB_Connect();
	$con=$db->connect();
		 /*$qry="Select count(*) as cnt from CP_CrimeType where Name='".$_POST["name"]."'";
		//echo $qry;
		$result=mysqli_query($con,$qry);
		$row=mysqli_fetch_array($result);
		if($row["cnt"]>0){
			echo "Exist";
		}
		else{*/	
			$qry="insert into cp_word(Word,Sentiment) values('".$_POST["word"]."','".$_POST["sentiment"]."')";
			//echo $qry;
			if(mysqli_query($con,$qry)){
				echo "Success";
			}
			else{
				echo "Error";
			}
		//}
?>