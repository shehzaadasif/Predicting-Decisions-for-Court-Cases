<?php
session_start();
	include("db_connect.php");
	$db=new DB_Connect();
	$con=$db->connect();
		
		//echo "karuna";
		
		/*$thetextstring = "alpha bravo charlie
			delta echo
			foxtrot
			golf hotel india" ;*/
			
			
			
			$string = 'karuna sid or nor and where karuna foo';
			$stopwords = array("or", "and", "where");
		//	echo preg_replace("\b$stopwords\b", "", $string);
			foreach ($stopwords as &$word) {
		$word = '/\b' . preg_quote($word, '/') . '\b/';
		}
		echo preg_replace($stopwords, '', $string);
		
		
		$string = preg_replace("#[\s]+#", " ", $string);
			$words = explode(" ", $string);
			 print_r($words);
			
			 $j = count($words)-1;
			
			$neg = 0;
			$pos = 0;
			while($j>=0){
				
				//print_r($words[$j]);
								
				$number="Select * from cp_word where Word = '".$words[$j]."'";
				$rnumber=mysqli_query($con,$number);
				//$rownumber=mysqli_fetch_array($rnumber);
				
				//echo $rownumber["Word"];
				echo "\n";
				while($rownumber=mysqli_fetch_array($rnumber)){
					if($rownumber["Sentiment"]=="Positive"){
					
					$pos = $pos+1;
					//echo $pos."+";
					}
					else if($rownumber["Sentiment"]=="Negative"){
						$neg = $neg+1;
						//echo $neg."-";
					}
					else{
						echo "Something wrong";
					}
				}
				
				
				$j--;
				
			}
			//echo $pos;
			//echo $neg;
			
			$total_count = $pos + $neg;
			//echo $total_count;
			
			$percentage = ($pos /$total_count)*100;
			echo $percentage;
			
			
			
			
?>