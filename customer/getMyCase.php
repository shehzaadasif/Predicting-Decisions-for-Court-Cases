<?php
session_start();
	include("db_connect.php");
	$db=new DB_Connect();
	$con=$db->connect();
	
	$qryi="Select * from cp_customerdetails where Email='".$_SESSION["Cusername"]."'";
		//echo $qry;
		$resulti=mysqli_query($con,$qryi);
		$rowi=mysqli_fetch_array($resulti);
	
	//$id=$_POST["ID"];
	$qry="Select * from CP_Case where Cust_ID = '".$rowi["ID"]."'  order by id";
	//echo $qry;
	$run=mysqli_query($con,$qry);
	$i=1;
	$table="";
	$table.="<thead><tr><th>SR.NO</th><th>Case Name</th><th>Date</th><th>Case On</th><th>Case By</th><th>Case Location</th><th>Case Type</th><th>Description</th><th>Status</th><th>Prediction</th></tr></thead><tbody>";
	while($row=mysqli_fetch_array($run)){
		
		$table.="<tr>";
		$table.="<td>".$i."</td>"; 
		$table.="<td id='Name".$row["ID"]."'>".$row["CaseName"]."</td>";
		$table.="<td id='Date".$row["ID"]."'>".$row["CaseDate"]."</td>";
		$table.="<td id='CaseOn".$row["ID"]."'>".$row["CaseOn"]."</td>";
		$table.="<td id='CaseBy".$row["ID"]."'>".$row["CaseBy"]."</td>";
		$table.="<td id='Location".$row["ID"]."'>".$row["CaseLocation"]."</td>";
		//$table.="<td id='Type".$row["ID"]."'>".$row["CaseType"]."</td>";
		$table.="<input type='hidden' id='Type".$row["ID"]."' value='".$row["CaseType"]."'>";
		$table.="<td id='Type".$row["ID"]."'>".$row["CaseType"]."</td>";
		//$table.="<td><a href='pgViewRelatedCases.php?casetype=".$row["CaseType"]."' target='_self'>".$row["CaseType"]."</a></td>";
		
		$table.="<td id='Desc".$row["ID"]."'>".$row["CaseDescription"]."</td>";
		$table.="<td id='Status".$row["ID"]."'>".$row["Status"]."</td>";
		//$table.="<td id='Favor_Of".$row["ID"]."'>".$row["Favor_Of"]."</td>";
		//$table.="<input type='hidden' id='Favor_Of".$row["ID"]."' value='".$row["Favor_Of"]."'>";
		
		//$table.="<td><a href='javascript:void(0)' onclick='editRecord(".$row["ID"].")'>Sentimate</a></td>";
		//$table.="<td><a href='pgSentimate.php?custid=".$rowi["ID"]." &&description=".$row["CaseDescription"]."' target='_self'>Sentiment</a></td>";
		if($row["Status"]=='Finished'){
			$table.="<td><a href='pgSentimateA3.php?custid=".$rowi["ID"]." &&favorof=".$row["Favor_Of"]." &&status=".$row["Status"]." &&description=".$row["CaseDescription"]." &&type=".$row["CaseType"]." &&caseon=".$row["CaseOn"]." &&caseby=".$row["CaseBy"]." ' target='_self'>Sentiment</a></td>";
		}
		else{
			$table.="<td><a href='pgSentimateA2.php?custid=".$rowi["ID"]." &&favorof=".$row["Favor_Of"]." &&status=".$row["Status"]." &&description=".$row["CaseDescription"]." &&type=".$row["CaseType"]." &&caseon=".$row["CaseOn"]." &&caseby=".$row["CaseBy"]." ' target='_self'>Sentiment</a></td>";
		}
		
		
		$i++;
		$table.="</tr>";
	}
	$table.="</tbody>";
	echo $table;
?>