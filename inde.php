<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Event Registration </title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  background:#2db7c6f5;
}
input[type=submit] {
    background-color: #893699ba;    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
	font-size:20px;
}

input[type=submit]:hover {
    background-color: #250f84;
}
.row:after {
    content: "";
    display: table;
    clear: both;
	
}
@media screen and (max-width: 600px) {
     input[type=submit] {
        width: 10%;
        margin-top: 0;
    }
}
input[type=submit1] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: left;
	font-size:20px;
}

input[type=submit1]:hover {
    background-color: #45a049;
}
.row:after {
    content: "";
    display: table;
    clear: both;
	
}
@media screen and (max-width: 600px) {
     input[type=submit1] {
        width: 10%;
        margin-top: 0;
    }
}
label.required:after {content: " *"; color: red; }
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Event Registration Form Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- //custom-theme -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="icon" type="image/png" href="peclogo.png"> 
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script>
function toggleField(hideObj,showObj){
  hideObj.disabled=true;        
  hideObj.style.display='none';
  showObj.disabled=false;   
  showObj.style.display='inline';
  showObj.focus();
}
</script>
<?php
session_start();
function getToken($length){
     $token = "";
     
     $codeAlphabet= "0123456789";
     $max = strlen($codeAlphabet); // edited

    for ($i=0; $i < $length; $i++) {
        $token .= $codeAlphabet[rand(0, $max-1)];
    }

    return $token;
}

$id=getToken(5);

$_SESSION['id']=$id;
		if(isset($_POST['su']))
		{
			echo "1";
			$dept=$_POST['sd1'];
			$en=$_POST['event'];
			$cln=$_POST['Task'];
			$date=$_POST['text'];
			$time=$_POST['time'];
			$ve=$_POST['venue'];
			$cn=$_POST['cn'];
			$ccn=$_POST['ccn'];
		
			
			 include 'db.php';
		
			mysqli_query($c,"INSERT INTO `event` (`event_id`, `dept`,`name`, `club_name`, `date`, `time`, `venue`, `c_name`, `c_no`) VALUES ('$id', '$dept', '$en', '$cln', '$date', '$time', '$ve', '$cn','$ccn')");
			mysqli_query($c,"INSERT INTO `coordinator` (`event_id`, `c_name`,`c_no`) VALUES ('$id','$cn','$ccn')");


			if($en=="IndustrialVisit")
			{

			header("Location:iv_transport.html");
			}

			else
			{

			header("Location:guest.php");
			}
			
		}

?>
<!-- //js -->
<!-- font-awesome-icons -->
<!-- //font-awesome-icons -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- banner -->
	<div class="center-container">
		<div class="main">
			<h1 class="w3layouts_head">Event Registration Form</h1>
				<div class="w3layouts_main_grid">
					<form name="BrowserSurvey" action="" method="post" class="w3_form_post">
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<h3 style="color:#212121; font-size:150%;text-align:center;">EVENT DETAILS</h3>				
							</span>
						</div>
						<!--DEPARTMENT--> 
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>DEPARTMENT</label>
				        <select id="select" class="required" required name="sd1">
					<option value="0" disabled selected ></option>
										<option value="CSE" >CSE</option>
                                        <option value="IT" >IT</option>
                                        <option value="ECE" >ECE</option>
                                       <option value="EEE" >EEE</option>
									   <option value="BIOTECH" >BIOTECH</option>
									   <option value="CIVIL" >CIVIL</option>
									   <option value="MECH" >MECH</option>
									   <option value="1st YR" >1st YR</option>
                                        </select><br>
							</span>
						</div>
										
						<!----EVENT NAME---->	
						<div class="w3_agileits_main_grid w3l_main_grid" >
							<span class="agileits_grid">
							<label class="required">EVENT NAME</label>
							<select id="select" class="required" required 
							  name="event" 
									onchange="if(this.options[this.selectedIndex].value=='customOption'){
									toggleField(this,this.nextSibling);
									this.selectedIndex='0';
									}">
					                    <option value="0" disabled selected ></option>
										<option value="Guest Lecture" >Guest Lecture</option>
										<option value="IndustrialVisit">Industrial Visit</option>
                                        <option value="Industrial Expert Interaction" >Industrial Expert Interaction </option>
                                        <option value="FDP" >FDP</option>
                                        <option value="Seminar" >Seminar</option>
										<option value="Workshop" >Workshop</option>
										<option value="Conference" >Conference</option>
										  <option value="Other">Other</option>
										 
										 </select><input name="event" style="display:none;" disabled="disabled" 
											onblur="if(this.value==''){toggleField(this,this.previousSibling);}">
																			
                                        <br>
							</span>
						</div>
							
					   <!----CLUB NAME---->
							<div class="w3_agileits_main_grid w3l_main_grid">
							    <span class="agileits_grid">
								<label>CLUB NAME</label>
								<input type="text" name="Task" placeholder="" >
							    </span>
						    </div>
						<!----DATE AND TIME---->
						    <div class="agileits_w3layouts_main_grid w3ls_main_grid">
							<span class="agileinfo_grid">
								<label class="required">DATE</label>
								<div class="agileits_w3layouts_main_gridl">
									<input class="date" id="datepicker" name="text" type="text" value="mm/dd/yyyy" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '';}" required=""><br>
								</div>
									<div class="clear"> </div>
							</span>
						</div>
						<div class="agileits_w3layouts_main_grid w3ls_main_grid">
							<span class="agileinfo_grid">
								<label class="required">TIME</label>
								<div class="agileits_w3layouts_main_gridr">
									<input type="time" name="time" placeholder="" required="">
								</div>
									<div class="clear"> </div>
							</span>
						</div>
						<!----VENUE---->
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label class="required">VENUE</label>						
									<select required=""  name="venue"  data-val-required="Please select gender"
										onchange="if(this.options[this.selectedIndex].value=='customOption'){
										toggleField(this,this.nextSibling);
										this.selectedIndex='0';
										}">
					                    <option value="0" disabled selected ></option>
										<option value="1" >Seminar Hall</option>
                                        <option value="2" >Multi Purpose Hall</option>
                                        <option value="3" >A & V Chamber</option>
                                        <option value="customOption">Other</option>
										
										 </select><input name="venue" style="display:none;" disabled="disabled" 
											onblur="if(this.value==''){toggleField(this,this.previousSibling);}">
																									
                                    <br>
							</span>
						</div>
						
					    <!----FACULTY IN-CHARGE---->
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label class="required">COORDINATE NAME</label>
								<input type="text" name="cn" placeholder="" required="">
							</span>
						</div>
						<!----FACULTY CONTACT NUMBER---->
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label class="required">COORDINATE CONTACT-NO</label>
								<input type="text" name="ccn" placeholder="" required="">
						</span>		
						</div>
						
						<!----END OF EVENT DETAILS--->

						
						<!------SUBMIT----->
					 <div class="w3_main_grid">
							<div class="row" >
								<input type="submit" style="width:100px;" value="NEXT" name="su">
							</div>
						<div>	
				</form>
			</div>
		
		<!-- Calendar -->
			<link rel="stylesheet" href="css/jquery-ui.css" />
				<script src="js/jquery-ui.js"></script>
					<script>
						$(function() {
							$( "#datepicker" ).datepicker();
						});
					</script>
		<!-- //Calendar -->
			<div class="w3layouts_copy_right">
				<div class="container">
					<p> <a href="http://w3layouts.com"></a></p>
				</div>
			</div>
		</div>
	</div>
<!-- //footer -->
</body>
</html>

