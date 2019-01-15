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
 
}

function view_liveSupportAccount_shiftTimings(){
 var timezone = document.getElementById("liveSupportAccount-create-timezone").value;
 var shiftTimings = document.getElementById("liveSupportAccount-create-shiftTimings").value;
 if(timezone.length>0){
 if(shiftTimings.length>0){
   js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.utils.php',
   { action:'GET_LIVESUPPORT_TIMINGS', reqTimezone:timezone, time_Id:shiftTimings },function(response){
     console.log(response); 
     response = JSON.parse(response);
     shift = response.shift;
     startTime = response.startTime;
     endTime = response.endTime;
     timezone = response.timezone;
     var content='<label>24 X 7 Support</label>';
         content+='<div class="font-grey">';
         content+='<b><i>Sunday to Saturday</i> - '+startTime+' to '+endTime+'</b>';
	     content+='<div>';
     document.getElementById("liveSupportAccount-create-24X7Support").innerHTML=content;
   });
 } else { div_display_warning('liveSupportAccount-create-warnings','W016'); }
 } else { div_display_warning('liveSupportAccount-create-warnings','W015');  } 
}	
</script>
<div id="liveSupportAccount-createForm-div" class="panel panel-default hide-block">
  <div class="panel-heading">
	<i class="fa fa-users"></i>&nbsp;&nbsp;&nbsp;<b>Create Live Support Accounts</b>
  </div>
  <div class="panel-body">
	<!-- live Support Account - create form ::: Start -->
	<div class="container-fluid">
	  <div class="row">
		<div id="liveSupportAccount-create-warnings" class="col-md-12"></div>
	  </div>
	  <div class="row mtop15p">
		<div class="col-md-6">
						    
		  <div class="form-group">
			<label>Account Type</label>
			<input id="liveSupportAccount-create-accountType" type="text" class="form-control" value="CUSTOMER_LIVESUPPORT"
				placeholder="Enter your Account Type" disabled/>
		  </div>

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
			<input id="liveSupportAccount-create-accountPwd" type="password" class="form-control" 
			placeholder="Enter your Account Password"/>
		  </div>
							
		  <div class="form-group">
			 <label>Confirm Account Password</label>
			 <input id="liveSupportAccount-create-confirmAccountPwd" type="password" class="form-control" 
			 placeholder="Enter your Confirm Password"/>
		  </div>
							
		</div>
		<div class="col-md-6">
						    
		  <div class="form-group">
			<label>Country</label>
			<select id="liveSupportAccount-create-country" class="form-control">
				<option value="">Select your Country</option>
				<option value="India">India</option>
				<option value="Australia">Australia</option>
			</select>
		  </div>
							
		  <div class="form-group">
			<label>Timezone</label>
			<select id="liveSupportAccount-create-timezone" class="form-control" 
				onchange="javascript:view_liveSupportAccount_shiftTimings();">
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
			<div id="liveSupportAccount-create-24X7Support"></div>
		  </div>
							
		</div>
	  </div>
	  <div class="row">
		 <div class="col-xs-12">
			<div align="center" class="form-group">
			   <div class="btn-group">
				  <button class="btn btn-success"><b>Create Live Support Account</b></button>
				  <button class="btn btn-danger"><b>Reset</b></button>
			   </div>
			</div>
		  </div>
	  </div>
	</div>
	<!-- live Support Account - create form ::: End -->
  </div>
</div>