<?php 
session_start();
include_once '../../templates/api_params.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin : Live Support</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/dist/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
.mtop15p { margin-top:15px; }
.agentState-green { color: #02af09; }
.agentState-red { color: #e40e07; }
</style>
</head>
<body>

    <div id="wrapper">

        <?php include_once 'templates/panelheader.php'; ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-header"><b>Live Support - Manage Accounts</b></h4>
                </div>
            </div>
			<div class="row">
              <div align="right" class="col-lg-12">
                <button class="btn btn-primary">
				  <b><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Create New Live Support Account</b>
				</button>  
              </div>
            </div>
			<div class="row mtop15p">
			   <!-- -->
                <div class="col-lg-4">
                  <div class="panel panel-default">
					<div class="panel-heading">
					  <i class="fa fa-users"></i>&nbsp;&nbsp;&nbsp;<b>Live Support Accounts</b>
					</div>
					<div class="panel-body pad0">
					 <div class="list-group mbot0">
					 
					  <div class="list-group-item">
					    <div>
						   <h5><i class="fa fa-circle fa-fw agentState-green"></i>&nbsp;&nbsp;<b>Nellutla L N Rao</b></h5>
						</div>
						<div><i>Morning - 09:00 AM to 05:00 PM</i></div>
					  </div>
					  
					  <div class="list-group-item">
					    <div>
						  <h5><i class="fa fa-circle fa-fw agentState-red"></i>&nbsp;&nbsp;<b>Nellutla L N Rao</b></h5>
						</div>
						<div><i>Morning - 09:00 AM to 05:00 PM</i></div>
					  </div>
					  
					 </div>
					</div>
				  </div>
                </div>
			  <!-- -->
			  <!-- -->
			    <div class="col-lg-8">
				  <!-- live Support Account - create ::: Start -->
                  <div id="liveSupportAccount-create" class="panel panel-default">
					<div class="panel-heading">
					   <i class="fa fa-users"></i>&nbsp;&nbsp;&nbsp;<b>Create Live Support Accounts</b>
					</div>
					<div class="panel-body">
					  <!-- live Support Account - create form ::: Start -->
					  <div class="container-fluid">
					    <div class="row">
						  <div class="col-md-6">
						    
							<div class="form-group">
							  <label>Account Type</label>
							  <input id="liveSupportAccount-create-accountType" type="text" class="form-control" value="CUSTOMER_LIVESUPPORT"
							   placeholder="Enter your Account Type" disabled/>
							</div>
<script type="text/javascript">

function liveSupportAccount_createForm(){
 var accountType = document.getElementById("liveSupportAccount-create-accountType").value;
 var name = document.getElementById("liveSupportAccount-create-name").value;
 var email = document.getElementById("liveSupportAccount-create-email").value;
 var accountPwd = document.getElementById("liveSupportAccount-create-accountPwd").value;
 var confirmAccountPwd = document.getElementById("liveSupportAccount-create-confirmAccountPwd").value;
 var country = document.getElementById("liveSupportAccount-create-country").value;
 var timezone = document.getElementById("liveSupportAccount-create-timezone").value;
 var shiftTimings = document.getElementById("liveSupportAccount-create-shiftTimings").value;
 
 // 
}
function get_liveSupportAccount_shiftTimings(){

}
function view_liveSupportAccount_shiftTimings(){
 var timezone = document.getElementById("liveSupportAccount-create-timezone").value;
 var shiftTimings = document.getElementById("liveSupportAccount-create-shiftTimings").value;
 js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.utils.php',
 { action:'GET_LIVESUPPORT_TIMINGS', reqTimezone:timezone, time_Id:shiftTimings },function(response){
  console.log(response); 
  response = JSON.parse(response);
  shift = response.shift;
  startTime = response.startTime;
  endTime = response.endTime;
  timezone = response.timezone;
  var content='<div>';
      content+='<div>Sunday to Saturday - '+startTime+' to '+endTime+'</div>';
	  content+='<div>';
  document.getElementById("liveSupportAccount-create-24X7Support").innerHTML=content;
 });
}
   
    
	
</script>
							<div class="form-group">
							  <label>Name</label>
							  <input id="liveSupportAccount-create-name" type="text" class="form-control" placeholder="Enter your Name"/>
							</div>
							
							<div class="form-group">
							  <label>Email</label>
							  <input id="liveSupportAccount-create-email" type="text" class="form-control" placeholder="Enter your Email"/>
							</div>
							
							<div class="form-group">
							  <label>Account Password</label>
							  <input id="liveSupportAccount-create-accountPwd" type="password" class="form-control" placeholder="Enter your Account Password"/>
							</div>
							
							<div class="form-group">
							  <label>Confirm Account Password</label>
							  <input id="liveSupportAccount-create-confirmAccountPwd" type="password" class="form-control" placeholder="Enter your Confirm Password"/>
							</div>
							
							<div class="form-group">
							  <label>Country</label>
							  <select id="liveSupportAccount-create-country" class="form-control">
							    <option value="">Select your Country</option>
								<option value="India">India</option>
								<option value="Australia">Australia</option>
							  </select>
							</div>
							
						  </div>
						  <div class="col-md-6">
						    
							<div class="form-group">
							  <label>Timezone</label>
							  <select id="liveSupportAccount-create-timezone" class="form-control">
							    <option value="">Select your Timezone</option>
								<option value="Asia/Kolkata">Asia/Kolkata</option>
								<option value="Australia/ACT">Australia/ACT</option>
								<option value="Australia/Adelaide">Australia/Adelaide</option>
								<option value="Australia/Brisbane">Australia/Brisbane</option>
								<option value="Australia/Broken_Hill">Australia/Broken_Hill</option>
								<option value="Australia/Canberra">Australia/Canberra</option>
								<option value="Australia/Currie">Australia/Currie</option>
								<option value="Australia/Darwin">Australia/Darwin</option>
								<option value="Australia/Eucla">Australia/Eucla</option>
								<option value="Australia/Hobart">Australia/Hobart</option>
								<option value="Australia/LHI">Australia/LHI</option>
								<option value="Australia/Lindeman">Australia/Lindeman</option>
								<option value="Australia/Lord_Howe">Australia/Lord_Howe</option>
								<option value="Australia/Melbourne">Australia/Melbourne</option>
								<option value="Australia/North">Australia/North</option>
								<option value="Australia/NSW">Australia/NSW</option>
								<option value="Australia/Perth">Australia/Perth</option>
								<option value="Australia/Queensland">Australia/Queensland</option>
								<option value="Australia/South">Australia/South</option>
								<option value="Australia/Sydney">Australia/Sydney</option>
								<option value="Australia/Tasmania">Australia/Tasmania</option>
								<option value="Australia/Victoria">Australia/Victoria</option>
								<option value="Australia/West">Australia/West</option>
								<option value="Australia/Yancowinna">Australia/Yancowinna</option>
							  </select>
							</div>
							
						    <div class="form-group">
							  <label>Shift Timings</label>
							  <select id="liveSupportAccount-create-shiftTimings" class="form-control" 
							  onchange="javascript:view_liveSupportAccount_shiftTimings();">
							    <option value="">Select Shift Timings</option>
								<option value="1">Early Morning</option>
								<option value="2">Morning</option>
								<option value="3">Evening</option>
							  </select>
							</div>
							
							<div align="right" class="form-group">
							  <label>24 X 7 Support</label>
							  <div id="liveSupportAccount-create-24X7Support"></div>
							</div>
							
						  </div>
						</div>
					  </div>
					  <!-- live Support Account - create form ::: End -->
					</div>
				  </div>
				  <!-- live Support Account - create ::: End -->
				  <!-- live Support Account - update ::: Start -->
				  <div id="liveSupportAccount-update" class="panel panel-default">
					<div class="panel-heading">
					   <i class="fa fa-users"></i>&nbsp;&nbsp;&nbsp;<b>Update Live Support Accounts</b>
					</div>
					<div class="panel-body">
					  
					  
					  
					</div>
				  </div>
				  <!-- live Support Account - update ::: End -->
                </div>
			  <!-- -->
            </div>
			
		</div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/metisMenu/metisMenu.min.js"></script>

    <script type="text/javascript" src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/jquery-ui.js"></script>
    <script type="text/javascript" src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/jquery.ui.chatbox.js"></script>
  <script type="text/javascript" src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/cookies.js"></script>
  <link type="text/css" href="<?php echo $_SESSION["PROJECT_URL"]; ?>styles/jquery.ui.chatbox.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo $_SESSION["PROJECT_URL"]; ?>styles/jquery-ui.css">
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/dist/sb-admin-2.js"></script>
<script type="text/javascript">
$(document).ready(function(){

});  
</script>
</body>

</html>
