<?php
	session_start();
	if(!isset($_SESSION["Cusername"])){
		header("Location:index.php");
	}
	include("db_connect.php");
	$db=new DB_Connect();
	$con=$db->connect();
		$sta = $_REQUEST['status'];
		$percentage=0;
			$neg = 0;
			$pos = 0;
			$var1 = "";
			$var2 = "";
			$var3 = "";
			
			$qry="Select count(*)as cnt from cp_case where CaseType = '".$_REQUEST['type']."' AND Status = 'Finished'";
			//echo $qry;
			$result=mysqli_query($con,$qry);
			$row=mysqli_fetch_array($result);
			if($row["cnt"]>0){
				//echo "Exist";
				//---Testing start Exist
				$number="Select CaseDescription from cp_case where CaseType = '".$_REQUEST['type']."' AND Status = 'Finished'";
				//echo $number;
				$rnumber=mysqli_query($con,$number);
				while($rownumber=mysqli_fetch_array($rnumber)){
					
					//---	
					$string1 = $rownumber["CaseDescription"];
					//$stopwords1 = array("and", "ha", "from");
					$stopwords1 = array("or", "and", "where","me","my","myself","we","ours","ourselves","you","your","yours","yourself","yourselves","he","him","his","himself","she","her","hers","herself","it","its","itself","they","them","their","theirs","themselves","what","which","who","whom","this","that","these","those","am","is","are","was",
			"were","be","been","being","have","has","had","having","do","does","did","doing","a","an","the","and","but","if","or","because","as","until","while","of","at","by","for","with","about","against","between","into","through","during","before","after","above","below","to","from","up","down","in","out","on",
			"off","over","under","again","further","then","once","here","there","when","where","why","how","all","any","both","each","few","more","most","other","some","such","only","own","same","so","than","too","very",
			"can","will","just","should","now");
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
						 echo count($words1);  */
						  $j1 = count($words1)-1;
						 //echo "*".$j1."*";
					 //----
					 
					 $string = $_REQUEST['description'];
					//$stopwords = array("and", "ha", "from");
					$stopwords = array("or", "and", "where","me","my","myself","we","ours","ourselves","you","your","yours","yourself","yourselves","he","him","his","himself","she","her","hers","herself","it","its","itself","they","them","their","theirs","themselves","what","which","who","whom","this","that","these","those","am","is","are","was",
					"were","be","been","being","have","has","had","having","do","does","did","doing","a","an","the","and","but","if","or","because","as","until","while","of","at","by","for","with","about","against","between","into","through","during","before","after","above","below","to","from","up","down","in","out","on",
					"off","over","under","again","further","then","once","here","there","when","where","why","how","all","any","both","each","few","more","most","other","some","such","only","own","same","so","than","too","very",
					"can","will","just","should","now");
					//	echo preg_replace("\b$stopwords\b", "", $string);
					foreach ($stopwords as &$word) {
						$word = '/\b' . preg_quote($word, '/') . '\b/';
					}
					//echo preg_replace($stopwords, '', $string);
					$stopstring = preg_replace($stopwords, '', $string);
					
					$string = preg_replace("#[\s]+#", " ", $stopstring);
						$words = explode(" ", $string);
						//print_r($words);
						//echo count($words);
						 $j = count($words)-1;
						//echo "==".$j."==";
						
					 
					 
					while($j1>=0){
						//echo $j;
						$i=$j;
						while($i>=0){
						
							/* echo "`-".$words1[$j1]."-`";
							echo "@-".$words[$j]."-@"; */
							if($words1[$j1]==$words[$j]){
								//echo $words1[$j1];
								//echo "-karuna-";

								$pos = $pos+1;
								//echo $pos."+";
							}
							else{
								//echo "-negkaruna-";
								$neg = $neg+1;
								//echo $neg."-";
							}
							$i = $i -1;
							
						}
						$j = $j -1;
						$j1 = $j1 -1;
						
					}
					/* echo "P--".$pos."--P";
					echo "N--".$neg."--N"; */
					$total_count = $pos + $neg;
					$percentage = ($pos /$total_count)*100; 
					if($percentage>='50'){
						$percentage = round($percentage,2)." % Chances of you winning this case.";
					}
					else{
						//--algo 1 start
						$string = $_REQUEST['description'];
						 $stopwords = array("or", "and", "where","me","my","myself","we","ours","ourselves","you","your","yours","yourself","yourselves","he","him","his","himself","she","her","hers","herself","it","its","itself","they","them","their","theirs","themselves","what","which","who","whom","this","that","these","those","am","is","are","was",
						"were","be","been","being","have","has","had","having","do","does","did","doing","a","an","the","and","but","if","or","because","as","until","while","of","at","by","for","with","about","against","between","into","through","during","before","after","above","below","to","from","up","down","in","out","on",
						"off","over","under","again","further","then","once","here","there","when","where","why","how","all","any","both","each","few","more","most","other","some","such","only","own","same","so","than","too","very",
						"can","will","just","should","now"); 
						//$stopwords = array("and", "ha", "from");
					//	echo preg_replace("\b$stopwords\b", "", $string);
						foreach ($stopwords as &$word) {
					$word = '/\b' . preg_quote($word, '/') . '\b/';
					}
					 //echo preg_replace($stopwords, '', $string);
					 $stopstring = preg_replace($stopwords, '', $string);
					
					

					
					$string = preg_replace("#[\s]+#", " ", $stopstring);
						$words = explode(" ", $string);
						 //print_r($words);
						
						 $j = count($words)-1;
						
						$neg = 0;
						$pos = 0;
						while($j>=0){
							
							//print_r($words[$j]);
							$var1 = $words[$j];
							$var2 = $words[$j]."ed";
							$var3 = $words[$j]."ing";
							
							
							$number="Select * from cp_word where Word = '".$var1."' or Word = '".$var2."' or Word = '".$var3."' ";
							//echo "<--".$number."-->"; 
							$rnumber=mysqli_query($con,$number);
							//$rownumber=mysqli_fetch_array($rnumber);
							
							//echo $rownumber["Word"];
							//echo "\n";
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
									//echo "Something wrong";
								}
							}
							
							
							$j--;
							
						}
						//echo $pos;
						//echo $neg;
						
						$total_count = $pos + $neg;
						//echo $total_count;
						if($total_count=='0'){
							$percentage = "Case Can Not Be Predicted";
						}else{
							$percentage = ($pos /$total_count)*100;
							$percentage = round($percentage,2)." % Chances of you winning this case.";
						}
						//--algo 1 end
					}
					
					
					
				}
				//---Testing end Exist
				
			}
			else{
				//echo "karuna";
				//---Testing start Not Exist
				
				//--algo 1 start
						$string = $_REQUEST['description'];
						//echo $string;
						 $stopwords = array("or", "and", "where","me","my","myself","we","ours","ourselves","you","your","yours","yourself","yourselves","he","him","his","himself","she","her","hers","herself","it","its","itself","they","them","their","theirs","themselves","what","which","who","whom","this","that","these","those","am","is","are","was",
						"were","be","been","being","have","has","had","having","do","does","did","doing","a","an","the","and","but","if","or","because","as","until","while","of","at","by","for","with","about","against","between","into","through","during","before","after","above","below","to","from","up","down","in","out","on",
						"off","over","under","again","further","then","once","here","there","when","where","why","how","all","any","both","each","few","more","most","other","some","such","only","own","same","so","than","too","very",
						"can","will","just","should","now"); 
						//$stopwords = array("and", "ha", "from");
					//	echo preg_replace("\b$stopwords\b", "", $string);
						foreach ($stopwords as &$word) {
					$word = '/\b' . preg_quote($word, '/') . '\b/';
					}
					//echo"---";
					// echo preg_replace($stopwords, '', $string);
					 $stopstring = preg_replace($stopwords, '', $string);
					
					

					
					$string = preg_replace("#[\s]+#", " ", $stopstring);
						$words = explode(" ", $string);
						// print_r($words);
						
						 $j = count($words)-1;
						
						$neg = 0;
						$pos = 0;
						while($j>=0){
							
							//print_r($words[$j]);
							$var1 = $words[$j];
							$var2 = $words[$j]."ed";
							$var3 = $words[$j]."ing";
							
							
							$number="Select * from cp_word where Word = '".$var1."' or Word = '".$var2."' or Word = '".$var3."' ";
							//echo $number; 
							$rnumber=mysqli_query($con,$number);
							//$rownumber=mysqli_fetch_array($rnumber);
							
							
							while($rownumber=mysqli_fetch_array($rnumber)){
								//echo $rownumber["Word"];
								//echo $rownumber["Sentiment"];
								
							//echo "\n";
								if($rownumber["Sentiment"]=="Positive"){
								
								$pos = $pos+1;
								//echo $pos."+";
								}
								else if($rownumber["Sentiment"]=="Negative"){
									$neg = $neg+1;
									//echo $neg."-";
								}
								else{
									//echo "Something wrong";
								}
							}
							
							
							$j--;
							
						}
						//echo $pos;
						//echo $neg;
						
						$total_count = $pos + $neg;
						//echo $total_count;
						if($total_count=='0'){
							$percentage = "Case Can Not Be Predicted";
						}else{
							$percentage = ($pos /$total_count)*100;
							$percentage = round($percentage,2)." % Chances of you winning this case.";
						}
						//--algo 1 end
				//---Testing end Not Exist
				
			}
			
			
			
			
			
			
			
			
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Case Prediction System</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="../css/clean-blog.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
    box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
    float: left;
    width: 12.5%;
    padding: 10px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
/* Style the buttons */
.btn {
    border: none;
    outline: none;
    padding: 12px 16px;
    background-color: #f1f1f1;
    cursor: pointer;
}

.btn:hover {
    background-color: #ddd;
}

.btn.active {
    background-color: #666;
    color: white;
}


</style>
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.php">Case Prediction System</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="pgCustomerPanel.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pgNewCase.php">New Case</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="pgViewMyCases.php">View My Cases</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pgChangePassword.php">Change Password</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pgLogout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('../img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h2>Case Prediction System - Case History</h2>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 mx-auto">
		
				  <input type="tel" class="form-control" id="pTxt" hidden>
				  <center><font style="font-style: bold;font-size: 30px; color:green;" >
				  <?php echo $_REQUEST['caseon']."V/S ".$_REQUEST['caseby']  ?></font></center>
				  <br> <center><?php echo $percentage; ?></center>


				 
			<!--<p id="pTxt" class="txt"></p>-->
	<p id="counted"></p>
			</div>
				  
				 
				  
			</div><br>
			
			<table id="tableData" border="1" width="100%">
			</table>
			
          <!-- Pager -->
        </div>

    <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Your Website 2020</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="../css/jquery/jquery.min.js"></script>
    <script src="../css/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="../js/clean-blog.min.js"></script>

<script>
$(document).ready(function(){
	//showData();
});
function changeFunc(sel) {
	
	
	var selectedValue = (sel.options[sel.selectedIndex].text);

	
	/*$.ajax({
			type:"POST",
			url:"getBusesList.php",
			data:{country_id:selectedValue},
			success:function(response){
				console.log(response);
				$("#selBuses").html(response);
			},
		});*/
		if(selectedValue == "Finished"){
			$(".divFavorOf").show();
			optionTextCO = $("#txtCaseOn").val(); 
            optionValueCO = $("#txtCaseOn").val();
			
			optionTextCB = $("#txtCaseBy").val(); 
            optionValueCB = $("#txtCaseBy").val();
			
			$('#selFavorof').append(new Option(optionTextCO, optionValueCO))
			$('#selFavorof').append(new Option(optionTextCB, optionValueCB))
			
			
		}
		else{
			$(".divFavorOff").hide();
		}
}

 
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

// List View
function listView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "100%";
  }
}

// Grid View
function gridView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "50%";
  }
}
	


	
	
	// Read a page's GET URL variables and return them as an associative array.
	/* function getUrlVars()
	{
		var vars = [], hash;
		var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
		for(var i = 0; i < hashes.length; i++)
		{
			hash = hashes[i].split('=');
			vars.push(hash[0]);
			vars[hash[0]] = hash[1];
		}
		return vars;
	}
 */
	
	
	

</script>	
	
  </body>
</html>