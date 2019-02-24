<?php 
session_start();
include_once '../../templates/api/api_params.php';
include_once '../../templates/api/api_js.php';
?>
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

</head>
<body>
  <div id="wrapper">
    <?php include_once 'templates/panelheader.php'; ?>
    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h4 class="page-header"><b>Live Support - Shift Timings</b></h4>
        </div>
      </div>
	  <div class="row">
	    <div class="col-md-6 divRightMargin">
		 <div class="form-group">
		   <label>Select Timezone</label>
		   <div class="input-group">
		    <select id="livesupport_selectTimezone" class="form-control">
		     <option value="">Select Timezone</option>
			 <option value="Asia/Kolkata">Asia/Kolkata</option>
			 <option value="Australia/Adelaide">Australia/Adelaide</option>
			 <option value="Australia/Brisbane">Australia/Brisbane</option>
			 <option value="Australia/Broken_Hill">Australia/Broken_Hill</option>
			 <option value="Australia/Currie">Australia/Currie</option>
			 <option value="Australia/Darwin">Australia/Darwin</option>
			 <option value="Australia/Eucla">Australia/Eucla</option>
			 <option value="Australia/Hobart">Australia/Hobart</option>
			 <option value="Australia/Lindeman">Australia/Lindeman</option>
			 <option value="Australia/Lord_Howe">Australia/Lord_Howe</option>
			 <option value="Australia/Melbourne">Australia/Melbourne</option>
			 <option value="Australia/Perth">Australia/Perth</option>
			 <option value="Australia/Sydney">Australia/Sydney</option>
		    </select>
			<span class="input-group-addon curpoint" onclick="javascript:viewLSTimings();"><b>View Timings</b></span>
		   </div>
		 </div>
		 <div class="form-group">
		  <div id="tbl_viewListOfTimings" class="table-responsive"></div>	
		 </div>
		</div>
		<div class="col-md-6">
		 <!-- -->

		     <div class="list-group mbot0" style="border-bottom:1px solid #ccc;">
			   <div class="list-group-item pad0" style="background-color:#eee;">
			     <div class="container-fluid">
				   <div class="row">
				     <div class="col-xs-6">
					   <div align="center"><h5><b>Live Support Accounts</b></h5><span>(Asia/Kolkatta)</span></div>
					 </div>
					 <div align="center" class="col-xs-6 divLeftMargin">
					   <h2><b>8</b></h2>
					 </div>
				   </div>
				 </div>
			   </div>
			   <div class="livesupportAccountslistview">
		       <div class="list-group-item">
			      <h5><i class="fa fa-circle fa-fw agentState-green"></i>&nbsp;&nbsp;<b>Nellutla L N Rao</b></h5>
			      <div align="right" class="font-grey"><i><b>Early Morning</b> (Asia/Kolkata) - 01:00 AM to 09:00 AM</i></div>
			   </div>
			   <div class="list-group-item">
			      <h5><i class="fa fa-circle fa-fw agentState-green"></i>&nbsp;&nbsp;<b>Nellutla L N Rao</b></h5>
			      <div align="right" class="font-grey"><i><b>Early Morning</b> (Asia/Kolkata) - 01:00 AM to 09:00 AM</i></div>
			   </div>
			   <div class="list-group-item">
			      <h5><i class="fa fa-circle fa-fw agentState-green"></i>&nbsp;&nbsp;<b>Nellutla L N Rao</b></h5>
			      <div align="right" class="font-grey"><i><b>Early Morning</b> (Asia/Kolkata) - 01:00 AM to 09:00 AM</i></div>
			   </div>
			   <div class="list-group-item">
			      <h5><i class="fa fa-circle fa-fw agentState-green"></i>&nbsp;&nbsp;<b>Nellutla L N Rao</b></h5>
			      <div align="right" class="font-grey"><i><b>Early Morning</b> (Asia/Kolkata) - 01:00 AM to 09:00 AM</i></div>
			   </div>
			   <div class="list-group-item">
			      <h5><i class="fa fa-circle fa-fw agentState-green"></i>&nbsp;&nbsp;<b>Nellutla L N Rao</b></h5>
			      <div align="right" class="font-grey"><i><b>Early Morning</b> (Asia/Kolkata) - 01:00 AM to 09:00 AM</i></div>
			   </div>
			   <div class="list-group-item">
			      <h5><i class="fa fa-circle fa-fw agentState-green"></i>&nbsp;&nbsp;<b>Nellutla L N Rao</b></h5>
			      <div align="right" class="font-grey"><i><b>Early Morning</b> (Asia/Kolkata) - 01:00 AM to 09:00 AM</i></div>
			   </div>
			   <div class="list-group-item">
			      <h5><i class="fa fa-circle fa-fw agentState-green"></i>&nbsp;&nbsp;<b>Nellutla L N Rao</b></h5>
			      <div align="right" class="font-grey"><i><b>Early Morning</b> (Asia/Kolkata) - 01:00 AM to 09:00 AM</i></div>
			   </div>
			   </div>
			 </div>
		   <!--/div-->

		 </div>
		</div>
		
	  </div>
	</div>
  </div>
  
    <!-- jQuery -->
    <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/metisMenu/metisMenu.min.js"></script>

	<script src="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/dist/load-data-on-scroll.js"></script>
	
    <script type="text/javascript" src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/jquery-ui.js"></script>
    <script type="text/javascript" src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/jquery.ui.chatbox.js"></script>
    <script type="text/javascript" src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/cookies.js"></script>
    <link type="text/css" href="<?php echo $_SESSION["PROJECT_URL"]; ?>styles/jquery.ui.chatbox.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo $_SESSION["PROJECT_URL"]; ?>styles/jquery-ui.css">
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/dist/sb-admin-2.js"></script>
<script type="text/javascript">
function viewLSTimings(){
 var timezone = document.getElementById("livesupport_selectTimezone").value;
 js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.livesupport.timings.php',
 { action:'GETAGENT_TIMINGS_BYTIMEZONE',req_timezone:timezone },function(response){
   console.log(response); 
   response = JSON.parse(response);
    var content='<table class="table" style="border:1px solid #ccc;font-size:12px;">';
		content+='<thead style="background-color:#eee;font-size:13px;">';
		content+='<tr>';
		content+='<td align="center"><b>Timezone</b></td>';
		content+='<td align="center"><b>Shift</b></td>';
		content+='<td align="center"><b>Timings</b></td>';
		content+='</tr>';
        content+='</thead>';
        content+='<tbody>';
   for(var index=0;index<response.length;index++){
     var time_Id = response[index].time_Id;
	 var shift = response[index].shift;
	 var startTime = response[index].startTime;
	 var endTime = response[index].endTime;
	 var timezone = response[index].timezone;
	 content+='<tr>';
	 content+='<td align="center">'+timezone+'</td>';
	 content+='<td align="center">'+shift+'</td>';
	 content+='<td align="center">'+startTime+' - '+endTime+'</td>';
	 content+='</tr>';
   }
	content+='</tbody>';
	content+='</table>';
	document.getElementById("tbl_viewListOfTimings").innerHTML=content;
 });
}
$(document).ready(function(){
  
});

</script>
</body>

</html>
