<script type="text/javascript">
function load_livesupport_updateForm(){
 document.getElementById("liveSupportAccount-create-warnings").innerHTML='';
 sel_optcountries('liveSupportAccount-update-country','');
 sel_optTimezone('liveSupportAccount-update-timezone','');
}
function tabMenu_updatelivesupportAccount(id){
 var arry_Id = ["updatelivesupportAccount-tabMenu-generalInfo","updatelivesupportAccount-tabMenu-updatePwd"];
 var arry_Id_content = ["updatelivesupportAccount-div-generalInfo","updatelivesupportAccount-div-updatePwd"];
 for(var index=0;index<arry_Id.length;index++){
  if(arry_Id[index]===id){
    if(!$('#'+arry_Id[index]).hasClass('active')){ $('#'+arry_Id[index]).addClass('active'); }
	if($('#'+arry_Id_content[index]).hasClass('hide-block')){ $('#'+arry_Id_content[index]).removeClass('hide-block'); }
  } else {
    if($('#'+arry_Id[index]).hasClass('active')){ $('#'+arry_Id[index]).removeClass('active'); }
	if(!$('#'+arry_Id_content[index]).hasClass('hide-block')){ $('#'+arry_Id_content[index]).addClass('hide-block'); }
  }
 }
} 
function enable_updateLiveSupport_generalInfo(){
 document.getElementById("liveSupportAccount-update-name").disabled=false;
 document.getElementById("liveSupportAccount-update-country").disabled=false;
 document.getElementById("liveSupportAccount-update-timezone").disabled=false;
 document.getElementById("liveSupportAccount-update-shiftTimings").disabled=false;
}
function disable_updateLiveSupport_generalInfo(){
 document.getElementById("liveSupportAccount-update-name").disabled=true;
 document.getElementById("liveSupportAccount-update-country").disabled=true;
 document.getElementById("liveSupportAccount-update-timezone").disabled=true;
 document.getElementById("liveSupportAccount-update-shiftTimings").disabled=true;
}
function edit_updateLiveSupportForm(){
 enable_updateLiveSupport_generalInfo();
 view_btn_saveDeleteReset();
}
function save_updateLiveSupportForm(){
 var name =document.getElementById("liveSupportAccount-update-name").value;
 var country =document.getElementById("liveSupportAccount-update-country").value;
 var timezone =document.getElementById("liveSupportAccount-update-timezone").value;
 var shiftTimings =document.getElementById("liveSupportAccount-update-shiftTimings").value;
 disable_updateLiveSupport_generalInfo();
 view_btn_editDeleteReset();
 /* Update Request */
 js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.livesupport.authentication.php',
 { action:'LIVESUPPORT_UPDATEACCOUNTGENERALINFO', account_Id:UPDATEDATA_LIVESUPPORTACCOUNTFORM_ACCOUNTID, 
   name:name,  country:country,  usr_tz:timezone,  time_Id:shiftTimings },
 function(response){ 
   console.log(response);
   div_display_success('liveSupportAccount-update-warnings','S008');
   load_livesupport_viewAccounts();
 });
}
function deleteRequest_updateLiveSupportForm(){
 /* Delete Request */
 var content='<div class="alert alert-warning alert-dismissible">';
     content+='<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
     content+='<strong>Warning!</strong> Are you sure to delete this LiveSupport Account?&nbsp;&nbsp;'; 
	 content+='<div class="btn-group">';
	 content+='<button class="btn btn-success" onclick="javascript:delete_updateLiveSupportForm();"><b>Yes</b></button>';
	 content+='<button class="btn btn-danger" onclick="javascript:empty_divwarning_updateLiveSupportForm();">';
	 content+='<b>No</b></button>';
	 content+='</div>';
     content+='</div>';
 document.getElementById("liveSupportAccount-update-warnings").innerHTML=content;
}
function delete_updateLiveSupportForm(){
 /* Delete code */
 $('#updateLiveSupportAccountModal').modal('hide');
 js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.livesupport.authentication.php',{ action:'LIVESUPPORT_DELETEACCOUNT',
 account_Id: UPDATEDATA_LIVESUPPORTACCOUNTFORM_ACCOUNTID },function(response){
  console.log('Deleted');
  alert_display_success('S007','#');
  load_livesupport_viewAccounts();
 });
}
function empty_divwarning_updateLiveSupportForm(){
 document.getElementById("liveSupportAccount-update-warnings").innerHTML='';
}
function reset_updateLiveSupportForm(){
 document.getElementById("liveSupportAccount-update-name").value=UPDATEDATA_LIVESUPPORTACCOUNTFORM_NAME;
 document.getElementById("liveSupportAccount-update-country").value=UPDATEDATA_LIVESUPPORTACCOUNTFORM_COUNTRY;
 document.getElementById("liveSupportAccount-update-timezone").value=UPDATEDATA_LIVESUPPORTACCOUNTFORM_AGENTTIMEZONE;
 document.getElementById("liveSupportAccount-update-shiftTimings").value=UPDATEDATA_LIVESUPPORTACCOUNTFORM_TIMEID;
}
function view_btn_editDeleteReset(){
 if($('#liveSupportAccount-update-editBtn').hasClass('hide-block')){ 
   $('#liveSupportAccount-update-editBtn').removeClass('hide-block'); }
 if(!$('#liveSupportAccount-update-saveBtn').hasClass('hide-block')){ 
   $('#liveSupportAccount-update-saveBtn').addClass('hide-block'); }
 if($('#liveSupportAccount-update-deleteBtn').hasClass('hide-block')){ 
   $('#liveSupportAccount-update-deleteBtn').removeClass('hide-block'); }
 if($('#liveSupportAccount-update-resetBtn').hasClass('hide-block')){ 
   $('#liveSupportAccount-update-resetBtn').removeClass('hide-block'); }
}
function view_btn_saveDeleteReset(){
 if(!$('#liveSupportAccount-update-editBtn').hasClass('hide-block')){ 
   $('#liveSupportAccount-update-editBtn').addClass('hide-block'); }
 if($('#liveSupportAccount-update-saveBtn').hasClass('hide-block')){ 
   $('#liveSupportAccount-update-saveBtn').removeClass('hide-block'); }
 if($('#liveSupportAccount-update-deleteBtn').hasClass('hide-block')){ 
   $('#liveSupportAccount-update-deleteBtn').removeClass('hide-block'); }
 if($('#liveSupportAccount-update-resetBtn').hasClass('hide-block')){ 
   $('#liveSupportAccount-update-resetBtn').removeClass('hide-block'); }
}
</script>
	<!-- live Support Account - create form ::: Start -->
	<div class="container-fluid">
	  <div class="row">
		<div id="liveSupportAccount-update-warnings" class="col-md-12"></div>
	  </div>
	  <div class="row mtop15p">
	   <div class="col-md-12">
	   
		<ul class="nav nav-tabs">
	      <li id="updatelivesupportAccount-tabMenu-generalInfo" 
		    onclick="javascript:tabMenu_updatelivesupportAccount(this.id);">
			 <a href="#"><b>General Information</b></a>
		  </li>
		  <li id="updatelivesupportAccount-tabMenu-updatePwd" onclick="javascript:tabMenu_updatelivesupportAccount(this.id);">
		     <a href="#"><b>Update Password</b></a>
		  </li>
		</ul>
		
		<div id="updatelivesupportAccount-div-generalInfo" class="list-group hide-block">
		<div class="list-group-item">
		
		<div class="container-fluid">
		<div class="row">
		<div class="col-md-12">
		
		  <div class="form-group">
			<label>Name</label>
			<input id="liveSupportAccount-update-name" type="text" class="form-control" placeholder="Enter your Name" disabled/>
		  </div>
		 
		  <div class="form-group">
			<label>Country</label>
			<select id="liveSupportAccount-update-country" class="form-control" disabled>
				<option value="">Select your Country</option>
			</select>
		  </div>
							
		  <div class="form-group">
			<label>Timezone</label>
			<select id="liveSupportAccount-update-timezone" class="form-control" 
				onchange="javascript:view_liveSupportAccount_shiftTimings();" disabled>
				<option value="">Select your Timezone</option>
			</select>
		  </div>
							
		  <div class="form-group">
			<label>Shift Timings</label>
			<select id="liveSupportAccount-update-shiftTimings" class="form-control" disabled>
				<option value="">Select ShiftTimings</option>
			</select>
		  </div>
					
		</div>
	    </div>
		
		<div class="row">
		 <div class="col-md-12">
			<div align="center" class="form-group">
			   <div class="btn-group">
				  <button id="liveSupportAccount-update-editBtn" class="btn btn-success hide-block" 
				  onclick="javascript:edit_updateLiveSupportForm();"><b>Edit</b></button>
				  <button id="liveSupportAccount-update-saveBtn" class="btn btn-success hide-block"
				  onclick="javascript:save_updateLiveSupportForm();"><b>Save</b></button>
				  <button id="liveSupportAccount-update-deleteBtn" class="btn btn-primary hide-block"
				  onclick="javascript:deleteRequest_updateLiveSupportForm();"><b>Delete</b></button>
				  <button id="liveSupportAccount-update-resetBtn" class="btn btn-danger hide-block"
				  onclick="javascript:reset_updateLiveSupportForm();"><b>Reset</b></button>
			   </div>
			</div>
		  </div>
	    </div>
		
		
		</div>
		
		</div>
		</div>
	   
	    <div id="updatelivesupportAccount-div-updatePwd" class="list-group hide-block">
		  <div class="list-group-item">
		  
		    <div class="container-fluid">
		     <div class="row">
		      <div class="col-md-12">   
			    <div class="form-group">
			      <label>Account Password</label>
			      <input id="liveSupportAccount-update-accountPwd" type="password" class="form-control" 
			       placeholder="Enter your Account Password"/>
		        </div>
							
		        <div class="form-group">
			      <label>Confirm Account Password</label>
			      <input id="liveSupportAccount-update-confirmAccountPwd" type="password" class="form-control" 
			       placeholder="Enter your Confirm Password"/>
		        </div>
		  
			  </div>
			 </div>
<script type="text/javascript">
function updateLiveSupportAccount_updatePwd(){
 var accountPwd = document.getElementById("liveSupportAccount-update-accountPwd").value;
 var confirmAccountPwd = document.getElementById("liveSupportAccount-update-confirmAccountPwd").value;
 if(accountPwd.length>0){
 if(confirmAccountPwd.length>0){
 if(accountPwd===confirmAccountPwd){
  $('#updateLiveSupportAccountModal').modal('hide');
  updateLiveSupportAccount_reset();
 js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.livesupport.authentication.php',
  { action:'LIVESUPPORT_UPDATEACCOUNTPASSWORD', account_Id:ADMINISTRATOR_ACCOUNT_ID , acc_pwd:accountPwd },
  function(response){
    console.log(response);
	alert_display_success('S009','#');
  });
 } else { div_display_warning('liveSupportAccount-update-warnings','W013'); }
 } else { div_display_warning('liveSupportAccount-update-warnings','W012'); }
 } else { div_display_warning('liveSupportAccount-update-warnings','W011'); }
}
function updateLiveSupportAccount_reset(){
 document.getElementById("liveSupportAccount-update-accountPwd").value='';
 document.getElementById("liveSupportAccount-update-confirmAccountPwd").value='';
}
</script>
			 <div class="row">
		      <div class="col-xs-12">
			    <div align="center" class="form-group">
			     <div class="btn-group">
				  <button class="btn btn-success" onclick="javascript:updateLiveSupportAccount_updatePwd();"><b>Update Live Support Account</b></button>
				  <button class="btn btn-danger" onclick="javascript:updateLiveSupportAccount_reset();"><b>Reset</b></button>
			     </div>
			    </div>
		      </div>
	         </div>
			 
			</div>
			
		  </div>
		</div>
		
	   </div>
	  </div>
	  
	</div>
	<!-- live Support Account - create form ::: End -->
  