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
    <link href="<?php echo $_SESSION["HWG_PROJECT_URL"]; ?>backend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="<?php echo $_SESSION["HWG_PROJECT_URL"]; ?>backend/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo $_SESSION["HWG_PROJECT_URL"]; ?>backend/dist/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo $_SESSION["HWG_PROJECT_URL"]; ?>backend/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
	  
	  <div class="row mtop15p">
	    <div class="col-md-6">
		
		  <div class="list-group">
		  <div class="list-group-item">
		  
			 <div class="mbot15p">
			   <h4><b>View Shift Timings</b><hr/></h4>
			 </div>
			 
			 <div class="mtop15p">
			 <div class="form-group">
			   <label>Select Timezone</label>
			   <div class="input-group">
				<select id="livesupport_selectTimezone" class="form-control">
				 <option value="">Select Timezone</option>
				</select>
				<span class="input-group-addon curpoint" onclick="javascript:viewLSTimings();"><b>View Timings</b></span>
			   </div>
			 </div>
			 </div>
		 
			 <div>
			  <div class="form-group">
				<div id="tbl_viewListOfTimings" class="table-responsive"></div>	
			  </div>
			 </div>
		 
		 </div>
		 </div>
		 
		</div>
		<div class="col-md-6">
		   
		   
		   <!-- Form -->
		   <div class="list-group">
		   <div class="list-group-item">
		   
		   <div class="mbot15p">
		     <h4><b>Update Shift Timings</b>
		  <i class="fa fa-2x fa-info-circle pull-right" data-toggle="collapse" 
		  data-target="#livesupport_info_updateShiftTimings" aria-hidden="true"></i>
		  <hr/></h4>
		   </div>
		   
		   <div id="livesupport_info_updateShiftTimings" class="collapse">
		    <div class="alert alert-warning">
			  <strong>Shift Timings</strong> are of 24-hours Clock time in a day.<br/><br/> The day's 24-hours Clock time
			  was divided into three shifts:<br/>
			  <b>Early Morning</b>, <b>Morning</b> and <b>Evening</b><br/><br/>
			  By Default, you can change Shift timings in your zone, that will automatically reflect in 
			  other timezones as per their timings.
		    </div>
		   </div>
		   
		   <div class="form-group mtop15p">
		     <label>Shift Timings</label>
			 <div class="list-group">
			   <div class="list-group-item" style="border-radius:5px;">
			     <?php if(isset($_SESSION["HWG_ADMINISTRATOR_TIMEZONE"])){ echo $_SESSION["HWG_ADMINISTRATOR_TIMEZONE"]; } ?>
			   </div>
			 </div>
		   </div>
		   
		   <div class="list-group">
		     <!-- Early Morning ::: Start -->
		     <div class="list-group-item">
		        <!-- -->
				<div class="form-group mtop15p">
				  <label>Early Morning</label><hr/>
				  <div class="row">
					<div class="col-md-6">
					   <label>From</label>
					   <select id="livesupport_earlyMrng_from" class="form-control" 
					    onchange="javascript:display_toTime();">
						  <option value="">Select Time</option>
					   </select>
					</div>
					<div class="col-md-6">
					   <label>To</label>
					   <div class="list-group">
					     <div id="livesupport_earlyMrng_toDiv" class="list-group-item" style="border-radius:5px;padding:8px 10px;border:1px solid #ccc;">
					       To Time
					     </div>
					   </div>
					</div> 
				  </div>
		        </div>
				<!-- -->
		        <!-- -->
				<div class="form-group">
				  <label>Morning</label><hr/>
				  <div class="row">
					<div class="col-md-6">
					   <label>From</label>
					   <div class="list-group">
					     <div id="livesupport_mrng_fromDiv" class="list-group-item" style="border-radius:5px;padding:8px 10px;border:1px solid #ccc;">
					       To Time
					     </div>
					   </div>
					</div>
					<div class="col-md-6">
					   <label>To</label>
					   <div class="list-group">
					     <div id="livesupport_mrng_toDiv" class="list-group-item" style="border-radius:5px;padding:8px 10px;border:1px solid #ccc;">
					       To Time
					     </div>
					   </div>
					</div>
				  </div>
		        </div>
				<!-- -->
		        <!-- -->
				<div class="form-group">
				  <label>Evening</label><hr/>
				  <div class="row">
					<div class="col-md-6">
					   <label>From</label>
					   <div class="list-group">
					     <div id="livesupport_evng_fromDiv" class="list-group-item" style="border-radius:5px;padding:8px 10px;border:1px solid #ccc;">
					       To Time
					     </div>
					   </div>
					</div>
					<div class="col-md-6">
					   <label>To</label>
					   <div class="list-group">
					     <div id="livesupport_evng_toDiv" class="list-group-item" style="border-radius:5px;padding:8px 10px;border:1px solid #ccc;">
					       To Time
					     </div>
					   </div>
					</div>
				  </div>
		        </div>
				<!-- -->
		     </div>
			 <!-- Evening ::: End -->
		   </div>
	   
		   <div align="center" class="form-group">
		     <div class="btn-group">
			   <button class="btn btn-success" onclick="javascript:updateShiftTimings();"><b>Update Shift Timings</b></button>
			   <button class="btn btn-danger" onclick="javascript:resetShiftTimings();"><b>Reset</b></button>
			 </div>
		   </div>
		   
		   </div>
		   </div>
		</div>
		
		</div>
		
	  </div>
	</div>
  </div>
  
    <!-- jQuery -->
    <script src="<?php echo $_SESSION["HWG_PROJECT_URL"]; ?>backend/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $_SESSION["HWG_PROJECT_URL"]; ?>backend/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo $_SESSION["HWG_PROJECT_URL"]; ?>backend/vendor/metisMenu/metisMenu.min.js"></script>

	<script src="<?php echo $_SESSION["HWG_PROJECT_URL"]; ?>backend/dist/load-data-on-scroll.js"></script>
	
    <script type="text/javascript" src="<?php echo $_SESSION["HWG_PROJECT_URL"]; ?>js/jquery-ui.js"></script>
    <script type="text/javascript" src="<?php echo $_SESSION["HWG_PROJECT_URL"]; ?>js/jquery.ui.chatbox.js"></script>
    <script type="text/javascript" src="<?php echo $_SESSION["HWG_PROJECT_URL"]; ?>js/cookies.js"></script>
	<script src="<?php echo $_SESSION["HWG_PROJECT_URL"]; ?>js/moment.js"></script>
    <link type="text/css" href="<?php echo $_SESSION["HWG_PROJECT_URL"]; ?>styles/jquery.ui.chatbox.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo $_SESSION["HWG_PROJECT_URL"]; ?>styles/jquery-ui.css">
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo $_SESSION["HWG_PROJECT_URL"]; ?>backend/dist/sb-admin-2.js"></script>
<script type="text/javascript">
var INITIAL_EARLYMRNG_FROM;
var INITIAL_EARLYMRNG_TO;
var INITIAL_MRNG_FROM;
var INITIAL_MRNG_TO;
var INITIAL_EVNG_FROM;
var INITIAL_EVNG_TO;
var EARLYMRNG_FROM;
var EARLYMRNG_TO;
var MRNG_FROM;
var MRNG_TO;
var EVNG_FROM;
var EVNG_TO;
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
		content+='<td align="center"><b>LiveSupport Agents</b></td>';
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
	 var agents = response[index].agents;
	 /* */
	 if(timezone===ADMINISTRATOR_TIMEZONE){
	   if(shift==='Early Morning') { 
	     INITIAL_EARLYMRNG_FROM = startTime; INITIAL_EARLYMRNG_TO = endTime;
		 EARLYMRNG_FROM = startTime; EARLYMRNG_TO = endTime;
		 document.getElementById("livesupport_earlyMrng_from").value = EARLYMRNG_FROM;
		 document.getElementById("livesupport_earlyMrng_toDiv").innerHTML = EARLYMRNG_TO;
	   }
	   else if(shift==='Morning') { 
	     INITIAL_MRNG_FROM = startTime; INITIAL_MRNG_TO = endTime;
	     MRNG_FROM = startTime; MRNG_TO = endTime;
		 document.getElementById("livesupport_mrng_fromDiv").innerHTML = MRNG_FROM;
		 document.getElementById("livesupport_mrng_toDiv").innerHTML = MRNG_TO;
	   }
	   else if(shift==='Evening') { 
	     INITIAL_EVNG_FROM = startTime; INITIAL_EVNG_TO = endTime;
	     EVNG_FROM = startTime;  EVNG_TO = endTime;
		 document.getElementById("livesupport_evng_fromDiv").innerHTML = EVNG_FROM;
		 document.getElementById("livesupport_evng_toDiv").innerHTML = EVNG_TO;
	   }
	 } 
	 content+='<tr>';
	 content+='<td align="center">'+timezone+'</td>';
	 content+='<td align="center">'+shift+'</td>';
	 content+='<td align="center">'+agents+'</td>';
	 content+='<td align="center">'+startTime+' - '+endTime+'</td>';
	 content+='</tr>';
   }
	content+='</tbody>';
	content+='</table>';
	document.getElementById("tbl_viewListOfTimings").innerHTML=content;
 });
}
function pageloader(){
  sel_optTimezone('livesupport_selectTimezone','');
  document.getElementById("livesupport_selectTimezone").value=ADMINISTRATOR_TIMEZONE;
  load_clockTimings('livesupport_earlyMrng_from');
  viewLSTimings();
}
$(document).ready(function(){
 pageloader();
});

function calculateNextEightHours(curTime){
 var date = moment(curTime, "hh:mm A");
     date.add(8, 'hours');
 return date.format("hh:mm A");
}
function display_toTime(){
 EARLYMRNG_FROM = document.getElementById('livesupport_earlyMrng_from').value;
 EARLYMRNG_TO = calculateNextEightHours(EARLYMRNG_FROM);
 MRNG_FROM = EARLYMRNG_TO;
 MRNG_TO  = calculateNextEightHours(EARLYMRNG_TO);
 EVNG_FROM = MRNG_TO;
 EVNG_TO  = calculateNextEightHours(MRNG_TO);
 document.getElementById("livesupport_earlyMrng_toDiv").innerHTML = EARLYMRNG_TO;
 document.getElementById("livesupport_mrng_fromDiv").innerHTML = MRNG_FROM;
 document.getElementById("livesupport_mrng_toDiv").innerHTML = MRNG_TO;
 document.getElementById("livesupport_evng_fromDiv").innerHTML = EVNG_FROM;
 document.getElementById("livesupport_evng_toDiv").innerHTML = EVNG_TO;
}
function load_clockTimings(div_Id){
 var time = ["01:00 AM","01:30 AM","02:00 AM","02:30 AM","03:00 AM","03:30 AM","04:00 AM","04:30 AM","05:00 AM",
 "05:30 AM","06:00 AM","06:30 AM","07:00 AM","07:30 AM","08:00 AM","08:30 AM","09:00 AM","09:30 AM","10:00 AM",
 "10:30 AM","11:00 AM","11:30 AM","12:00 AM","12:30 AM","01:00 PM","01:30 PM","02:00 PM","02:30 PM","03:00 PM",
 "03:30 PM","04:00 PM","04:30 PM","05:00 PM","05:30 PM","06:00 PM","06:30 PM","07:00 PM","07:30 PM","08:00 PM",
 "08:30 PM","09:00 PM","09:30 PM","10:00 PM","10:30 PM","11:00 PM","11:30 PM","12:00 PM","12:30 PM"];
 var content='<option value="">Select Time</option>';
 for(var index=0;index<time.length;index++){
   content+='<option value="'+time[index]+'">'+time[index]+'</option>';
 }
 document.getElementById(div_Id).innerHTML=content;
}
function updateShiftTimings(){
 console.log("EARLYMRNG_FROM: "+EARLYMRNG_FROM);
 console.log("EARLYMRNG_TO: "+EARLYMRNG_TO);
 console.log("MRNG_FROM: "+MRNG_FROM);
 console.log("MRNG_TO: "+MRNG_TO);
 console.log("EVNG_FROM: "+EVNG_FROM);
 console.log("EVNG_TO: "+EVNG_TO);
 js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.livesupport.timings.php',
 { action:'SETAGENT_TIMINGS_BYTIMEZONE', def_timezone:ADMINISTRATOR_TIMEZONE, def_earlyMrng_startTime:EARLYMRNG_FROM, 
   def_earlyMrng_endTime:EARLYMRNG_TO, def_mrng_startTime:MRNG_FROM, def_mrng_endTime:MRNG_TO,
   def_evng_startTime:EVNG_FROM,  def_evng_endTime:EVNG_TO }, function(response){
   console.log(response);
   alert_display_success('S014','#');
   pageloader();
 });
}
function resetShiftTimings(){
 EARLYMRNG_FROM = INITIAL_EARLYMRNG_FROM;
 EARLYMRNG_TO = INITIAL_EARLYMRNG_TO;
 MRNG_FROM = INITIAL_MRNG_FROM;
 MRNG_TO = INITIAL_MRNG_TO;
 EVNG_FROM = INITIAL_EVNG_FROM;
 EVNG_TO = INITIAL_EVNG_TO;
 
 document.getElementById("livesupport_earlyMrng_from").value = EARLYMRNG_FROM;
 document.getElementById("livesupport_earlyMrng_toDiv").innerHTML = EARLYMRNG_TO;
	
 document.getElementById("livesupport_mrng_fromDiv").innerHTML = MRNG_FROM;
 document.getElementById("livesupport_mrng_toDiv").innerHTML = MRNG_TO;
	 
 document.getElementById("livesupport_evng_fromDiv").innerHTML = EVNG_FROM;
 document.getElementById("livesupport_evng_toDiv").innerHTML = EVNG_TO;
}
</script>
</script>
</body>

</html>
