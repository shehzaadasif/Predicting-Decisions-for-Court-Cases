<?php
	session_start();
	if(!isset($_SESSION["Cusername"])){
		header("Location:index.php");
	}
	include("db_connect.php");
	$db=new DB_Connect();
	$con=$db->connect();
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

			<div class="control-group">
				  <div class="form-group floating-label-form-group controls">
					<label>Case Name</label>
					<input type="text" class="form-control" placeholder="Case Name" id="txtName" required data-validation-required-message="Please enter name."/>
					<p class="help-block text-danger"></p>
				  </div>
            </div>
			
			<div class="control-group">
				  <div class="form-group floating-label-form-group controls">
					<label>Date</label>
					<input type="date" class="form-control" placeholder="Date" id="txtDate" required data-validation-required-message="Please enter date.">
					<p class="help-block text-danger"></p>
				  </div>
			</div>
			
            <div class="control-group">
				  <div class="form-group floating-label-form-group controls">
					<label>Case On</label>
					<input type="text" class="form-control" placeholder="Case On" id="txtCaseOn" required data-validation-required-message="Please enter case on.">
					<p class="help-block text-danger"></p>
				  </div>
            </div>
			
			<div class="control-group">
				  <div class="form-group floating-label-form-group controls">
					<label>Case By</label>
					<input type="text" class="form-control" placeholder="Case By" id="txtCaseBy" required data-validation-required-message="Please enter case by.">
					<p class="help-block text-danger"></p>
				  </div>
            </div>
			
			<div class="control-group">
				  <div class="form-group floating-label-form-group controls">
					<label>Case Location</label>
					<input type="text" class="form-control" placeholder="Case Location" id="txtLocation" required data-validation-required-message="Please enter case location.">
					<p class="help-block text-danger"></p>
				  </div>
            </div><br>
			
			<div>
			<label>Case Type</label>	
			<select id="seltxtType">
				<option value="">Case Type</option>
				<?php
	
			$username="";
			$number="Select * from cp_crimetype ORDER BY `ID` ASC";
			echo $number;
			$rnumber=mysqli_query($con,$number);
			
			while($row=mysqli_fetch_array($rnumber)){
				
				$optionDriver.="<option value='".$row["Name"]."'>".$row["Name"]."</option>";

			}
			echo $optionDriver;
			?> 
				
			</select>
			</div>
			
			<div class="control-group">
				  <div class="form-group floating-label-form-group controls">
					<label>Case Description</label>
					<input type="text" class="form-control" placeholder="Case Description" id="txtDescription" required data-validation-required-message="Please enter case Description.">
					<p class="help-block text-danger"></p>
				  </div>
            </div><br>
				
			<label>Status</label>	
			<select id="selStatus">
				<option value="Pending">Pending</option>
				<!-- <option value="Ongoing">Ongoing</option>
				<option value="Finished">Finished</option>
				<option value="Rejected">Rejected</option> -->
			</select><br>
			
			<div class="divFavorOf" style = "display:none;">
			<label>Favor Off</label>	
			<select id="selFavorof">
				
			</select>
			</div>
			
			
			
			
			
			
			
				  <br>
				  <input type="tel" class="form-control" id="pTxt" hidden>
			<!--<p id="pTxt" class="txt"></p>-->
	<p id="counted"></p>
			</div>
				  
				  
			</div><br>
			
			<input type="hidden" id="hdnID">
			<div class="form-group">
              <center><button type="submit" id="btnSubmit" class="btn btn-primary" onclick="saveCrimeInfo();" style="background-color: #0085a1;;">Save</button></center>
            </div>
			
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
	showData();
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
	


	var flag = 0;
	//alert(flag);
	function saveCrimeInfo(){
	if($("#txtName").val()==""){
		alert("Enter Name");
	}
	else if($("#txtDate").val()==""){
		alert("Enter Date");
	}
	else if($("#txtCaseOn").val()==""){
		alert("Enter Case On");
	}
	else if($("#txtCaseBy").val()==""){
		alert("Enter Casse By");
	}
	else if($("#txtLocation").val()==""){
		alert("Enter Location");
	}
	else if($("#txtDescription").val()==""){
		alert("Enter Description");
	}
	else if($("#seltxtType").val()==""){
		alert("Select Type");
	}
	else{ 
	
	//console.log("val");
		if($("#btnSubmit").html()=="Save"){
		
			if(flag==0){
	
				$.ajax({
				type:"POST",
				url:"saveNewCase.php",
					data:{name:$("#txtName").val(),date:$("#txtDate").val(),caseon:$("#txtCaseOn").val(),caseby:$("#txtCaseBy").val(),location:$("#txtLocation").val(),type:$("#seltxtType").val(),desc:$("#txtDescription").val(),status:$("#selStatus").val()},
					success:function(response){
					},
					complete:function(response){
					//console.log(response);
					var resp=response.responseText;
					console.log(resp);
						if($.trim(resp)=="Success"){
							alert("Details Saved Successfully");
							$("#txtName").val("");
							$("#txtDate").val("");
							$("#txtCaseOn").val("");
							$("#txtCaseBy").val("");
							$("#txtLocation").val("");
							$("#seltxtType").val("");
							$("#txtDescription").val("");
							$("#selStatus").val("");
							window.location.reload();
							showData();
							
						}
						else if($.trim(resp)=="Exist"){
							alert("this entry is already exist");
							$("#txtName").val("");
							$("#txtDate").val("");
							$("#txtCaseOn").val("");
							$("#txtCaseBy").val("");
							$("#txtLocation").val("");
							$("#seltxtType").val("");
							$("#txtDescription").val("");
							$("#selStatus").val("");
							window.location.reload();

						}
						else{
							alert("Details Not Saved");
							window.location.reload();
							$("#txtName").val("");
							$("#txtDate").val("");
							$("#txtCaseOn").val("");
							$("#txtCaseBy").val("");
							$("#txtLocation").val("");
							$("#seltxtType").val("");
							$("#txtDescription").val("");
							$("#selStatus").val("");
							
						}
					}
				});			
			}

		}
		else{
			$.ajax({
				type:"POST",
				url:"editNewCase.php",
				data:{id:$("#hdnID").val(),name:$("#txtName").val(),date:$("#txtDate").val(),caseon:$("#txtCaseOn").val(),caseby:$("#txtCaseBy").val(),location:$("#txtLocation").val(),type:$("#seltxtType").val(),desc:$("#txtDescription").val(),status:$("#selStatus").val()},
				success:function(response){
					console.log(response);
					var resp=response;
					//console.log(resp);
					if($.trim(resp)=="Success"){
						alert("Details Updated Successfully");
						$("#txtName").val("");
							$("#txtDate").val("");
							$("#txtCaseOn").val("");
							$("#txtCaseBy").val("");
							$("#txtLocation").val("");
							$("#seltxtType").val("");
							$("#txtDescription").val("");
							$("#selStatus").val("");
						$("#btnSubmit").html("Save");
						showData();
						 flag = 0;
					}
					else if($.trim(resp)=="email"){
						alert("email is already exist");
					}
					else if($.trim(resp)=="number"){
						alert("number is already exist");
					}
					else{
					//window.location.reload();
						alert("Details Not Update");
						$("#txtName").val("");
							$("#txtDate").val("");
							$("#txtCaseOn").val("");
							$("#txtCaseBy").val("");
							$("#txtLocation").val("");
							$("#seltxtType").val("");
							$("#txtDescription").val("");
							$("#selStatus").val("");
						$("#btnSubmit").html("Save");
						flag = 0;
					}
				}
			});
		}
	}
		
	} 
	
	// Read a page's GET URL variables and return them as an associative array.
	function getUrlVars()
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

	
	function showData(){
	var id = getUrlVars()["id"];
		$.ajax({
			type:"POST",
			url:"getNewCase.php",
			data:{ID:id},
			success:function(response){
				$("#tableData").html(response);
			}
		});
	}
	
	function editRecord(id){
	flag=1;
	//alert(flag);
		$("#hdnID").val(id);
		$("#txtName").val($("#Name"+id).html());
		$("#txtDate").val($("#Date"+id).html());
		$("#txtCaseOn").val($("#CaseOn"+id).html());
		$("#txtCaseBy").val($("#CaseBy"+id).html());
		$("#txtLocation").val($("#Location"+id).html());
		$("#seltxtType").val($("#Type"+id).html());
		$("#txtDescription").val($("#Desc"+id).html());
		$("#selStatus").val($("#Status"+id).html());
		$("#btnSubmit").html("Edit");
	}
	function deleteRecord(id){
		var ans= confirm("Are you sure to delete this record?");
		if(ans==true){
		$.ajax({
			type:"POST",
			url:"deleteNewCase.php",
			data:{id:id},
			success:function(response){
			if($.trim(response)=="Success"){
				alert("delete successfully");
				showData();
			}
			}
		});
	}
	}
</script>	
	
  </body>
</html>