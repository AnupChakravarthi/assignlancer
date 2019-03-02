<script type="text/javascript">
function load_livesupport_createForm(){
 document.getElementById("liveSupportAccount-create-warnings").innerHTML='';
 sel_optcountries('liveSupportAccount-create-country','');
 sel_optTimezone('liveSupportAccount-create-timezone','');
}
function reset_livesupportAccount(){
 document.getElementById("liveSupportAccount-create-name").value='';
 document.getElementById("liveSupportAccount-create-accountPwd").value='';
 document.getElementById("liveSupportAccount-create-confirmAccountPwd").value='';
 document.getElementById("liveSupportAccount-create-country").value='';
 document.getElementById("liveSupportAccount-create-timezone").value='';
 document.getElementById("div-createAccount-viewShiftTimings").innerHTML='';
}
function create_livesupportAccount(){
 var name=document.getElementById("liveSupportAccount-create-name").value;
 var pwd=document.getElementById("liveSupportAccount-create-accountPwd").value;
 var confirmPwd=document.getElementById("liveSupportAccount-create-confirmAccountPwd").value;
 var country=document.getElementById("liveSupportAccount-create-country").value;
 var timezone=document.getElementById("liveSupportAccount-create-timezone").value;
 var shiftTimings=document.getElementById("liveSupportAccount-create-shiftTimings").value;
 if(name.length>0){
 if(pwd.length>0){
 if(confirmPwd.length>0){
 if(country.length>0){
 if(timezone.length>0){
 if(shiftTimings.length>0){
  if(pwd===confirmPwd){
   js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.livesupport.authentication.php',
   { action:'LIVESUPPORT_AUTHENTICATION', name:name, acc_pwd:pwd, country:country, usr_tz:timezone, time_Id:shiftTimings },
	function(response){ console.log(response); 
	 if(response.trim()==='Success'){
	  $('#createLiveSupportAccountModal').modal('hide');
	  reset_livesupportAccount();
	  alert_display_success('S006','#');
	  load_livesupport_viewAccounts();
	 }
	});
  } else { div_display_warning('liveSupportAccount-create-warnings','W013'); } // pwd =#= confirmPwd
 } else { div_display_warning('liveSupportAccount-create-warnings','W016'); } // shiftTimings 
 } else { div_display_warning('liveSupportAccount-create-warnings','W015'); } // timezone 
 } else { div_display_warning('liveSupportAccount-create-warnings','W018'); } // country 
 } else { div_display_warning('liveSupportAccount-create-warnings','W004'); } // confirmPwd 
 } else { div_display_warning('liveSupportAccount-create-warnings','W003'); } // pwd 
 } else { div_display_warning('liveSupportAccount-create-warnings','W001'); } // name 
}
function view_liveSupportAccount_shiftTimings(){
 if($('#div-createAccount-viewShiftTimings').hasClass('hide-block')){
  $('#div-createAccount-viewShiftTimings').removeClass('hide-block');
 }
 var content='<label>Agent Shift Timings in Agents Timezone</label>';
	 content+='<select id="liveSupportAccount-create-shiftTimings" class="form-control">';
	 content+='<option value="">Select ShiftTimings</option>';
	 content+='</select>';
 document.getElementById("div-createAccount-viewShiftTimings").innerHTML=content;	
 var timezone=document.getElementById("liveSupportAccount-create-timezone").value; 
 selopt_shiftTimingsByUsrTz('liveSupportAccount-create-shiftTimings',timezone,'');
}
</script>
	<!-- live Support Account - create form ::: Start -->
	<div class="container-fluid">
	  <div class="row">
		<div id="liveSupportAccount-create-warnings" class="col-md-12"></div>
	  </div>
	  <div class="row mtop15p">
		<div class="col-md-12">
						    
		  <div class="form-group">
			<label>Name</label>
			<input id="liveSupportAccount-create-name" type="text" class="form-control" placeholder="Enter Agent Name"/>
		  </div>
									
		  <div class="form-group">
			<label>Account Password</label>
			<input id="liveSupportAccount-create-accountPwd" type="password" class="form-control" 
			placeholder="Enter Agent Account Password"/>
		  </div>
							
		  <div class="form-group">
			 <label>Confirm Account Password</label>
			 <input id="liveSupportAccount-create-confirmAccountPwd" type="password" class="form-control" 
			 placeholder="Enter Agent Confirm Password"/>
		  </div>
													    
		  <div class="form-group">
			<label>Country</label>
			<select id="liveSupportAccount-create-country" class="form-control"></select>
		  </div>
							
		  <div class="form-group">
			<label>Agent Works in Timezone</label>
			<select id="liveSupportAccount-create-timezone" class="form-control" 
				onchange="javascript:view_liveSupportAccount_shiftTimings();">
			</select>
		  </div>
		
		  <div id="div-createAccount-viewShiftTimings" class="form-group hide-block">
			
		  </div>
						
		</div>
	  </div>
	  <div class="row">
		 <div class="col-xs-12">
			<div align="center" class="form-group">
			   <div class="btn-group">
				  <button class="btn btn-success" onclick="javascript:create_livesupportAccount();">
				    <b>Create Live Support Account</b>
				  </button>
				  <button class="btn btn-danger" onclick="javascript:reset_livesupportAccount();"><b>Reset</b></button>
			   </div>
			</div>
		  </div>
	  </div>
	</div>
	<!-- live Support Account - create form ::: End -->
  