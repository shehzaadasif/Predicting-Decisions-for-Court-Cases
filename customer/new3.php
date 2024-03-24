1. Break word in New Case done
2. Compare with cases of same type done
3. Break words from old case (each case at a time) done
4. if words matches 50% then consider result
5. Check who won
6. Display result
can not be predicted as their no simmlar cases available
<?php
	session_start();
	if(!isset($_SESSION["Cusername"])){
		header("Location:index.php");
	}
	include("db_connect.php");
	$db=new DB_Connect();
	$con=$db->connect();
			
			$string = $_REQUEST['description'];
			$stopwords = array("and", "ha", "from");
		//	echo preg_replace("\b$stopwords\b", "", $string);
			foreach ($stopwords as &$word) {
		$word = '/\b' . preg_quote($word, '/') . '\b/';
		}
		echo preg_replace($stopwords, '', $string);
		$stopstring = preg_replace($stopwords, '', $string);
		
		$string = preg_replace("#[\s]+#", " ", $stopstring);
			$words = explode(" ", $string);
			print_r($words);
			echo count($words);
			 $j = count($words)-2;
			//echo $j;
			$neg = 0;
			$pos = 0;
			//$i = 0;
			while($j>=0){
				//echo "<--".$j."-main-->";
				/* echo $words[0];
				echo $words[1];
				echo $words[2];
				echo $words[3];
				echo $words[4];
				echo $words[5]; */
				//echo $words[$j];
				//----karuna start
				$number="Select CaseDescription from cp_case where CaseType = '".$_REQUEST['type']."' AND Status = 'Finished'";
				//echo $number;
				$rnumber=mysqli_query($con,$number);
				while($rownumber=mysqli_fetch_array($rnumber)){
					
					$rowcount=mysqli_num_rows($rnumber);
					printf("Result set has %d rows.\n",$rowcount);
					
					
					$string1 = $rownumber["CaseDescription"];
					$stopwords1 = array("and", "ha", "from");
					//	echo preg_replace("\b$stopwords\b", "", $string);
						foreach ($stopwords1 as &$word1) {
					$word1 = '/\b' . preg_quote($word1, '/') . '\b/';
					}
					 $stopstring1 = preg_replace($stopwords1, '', $string1);
					 
					 $string1 = preg_replace("#[\s]+#", " ", $stopstring1);
						$words1 = explode(" ", $string1);
						/* echo"<--start-";
						 print_r($words1); 
						 echo"-end-->";
						 echo count($words1); */
						 $j1 = count($words1)-1;
						 //echo "*".$j1."*";
						 while($j1 >=0){
							//echo $j1;
							//echo "@-".$words[$j1]."-w1";
							//echo "w-".$words[$j]."-@";
							if($words[$j]==$words[$j1]){
								//echo $words1[$j1];
								//echo "karuna";

								$pos = $pos+1;
								//echo $pos."+";
							}
							else{
								//echo "neg";
								$neg = $neg+1;
								//echo $neg."-";
							}
							
							
							$j1 = $j1 -1;
						} 
							
					//echo "P--".$pos."--P";
					//echo "N--".$neg."--N";
					 $total_count = $pos + $neg;
					$percentage = ($pos /$total_count)*100; 
					if($percentage>='50'){
						
					}
				}
				
				//----karuna end
				
				
				$j--;
			}
			
			/* 
			 $total_count = $pos + $neg;
			//echo $total_count;
			
			$percentage = ($pos /$total_count)*100; 
	 */
?>
