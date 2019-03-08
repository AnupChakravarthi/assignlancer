<script type="text/javascript">
function view_div_updateAccountForm(){
 view_btn_editDeleteReset();
 sel_optcountries('custupdateAccount-form-country','');
 sel_optcurrencies('custupdateAccount-form-defcurrency','');
 sel_optTimezone('custupdateAccount-form-deftimezone','');
}
function updateAccountForm_getAccountDetails_delete(){
 js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.customers.authentication.php',
 { action:'CUSTOMER_DELETEACCOUNT', account_Id:UPDATEACCOUNTFORM_ACCOUNTID },
 function(response){ console.log(response);alert_display_success('S012','#'); });
 $('#alertWarningModal').modal('hide');
 customer_updateAccountForm_resetFullForm();
 
}
function view_popup_deleteAccountDetails(){
 var content='<div>';
     content+='Are you sure to delete Customer Account Details?&nbsp;&nbsp;';
     content+='<div class="btn-group">';
	 content+='<button class="btn btn-success" onclick="javascript:updateAccountForm_getAccountDetails_delete();"><b>Yes</b></button>';
	 content+='<button class="btn btn-danger" data-dismiss="modal"><b>No</b></button>';
	 content+='</div>';
     content+='</div>';
 alert_display_warningByContent(content);
}
function customer_updateAccountForm_resetFullForm(){
 document.getElementById("updateAccountForm-emailOrCustomerId").value='';
 htmlElementVisiblility('div-updateAccountForm-accountDetailsAndPwdUpdate','hide');
}
var UPDATEACCOUNTFORM_EMAILVERIFYCODE=(Math.floor(Math.random() * (99999 - 10000))+10000).toString();
var UPDATEACCOUNTFORM_ACCOUNTID;
var UPDATEACCOUNTFORM_NAME;
var UPDATEACCOUNTFORM_GENDER;
var UPDATEACCOUNTFORM_EMAIL;
var UPDATEACCOUNTFORM_COUNTRY;
var UPDATEACCOUNTFORM_TIMEZONE;
var UPDATEACCOUNTFORM_CURRENCY;
/* Tab#1: UpdateAccountForm (Details) ::: Start */
function updateAccountForm_getAccountDetails(){
 var emailOrCustomerId = document.getElementById("updateAccountForm-emailOrCustomerId").value;
 if(emailOrCustomerId.length>0){
  js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.customers.authentication.php',
  { action:'CUSTOMER_GETACCOUNTINFOBYEMAILORID', emailOrCustomerId:emailOrCustomerId },
  function(response){ 
  console.log(response); 
  var response = JSON.parse(response);
  if(response.length>0){
    UPDATEACCOUNTFORM_ACCOUNTID = response[0].account_Id;
	UPDATEACCOUNTFORM_NAME = response[0].name;
	UPDATEACCOUNTFORM_GENDER = response[0].gender;
	UPDATEACCOUNTFORM_EMAIL = response[0].email_Id;
	UPDATEACCOUNTFORM_COUNTRY = response[0].country;
	UPDATEACCOUNTFORM_TIMEZONE = response[0].tz;
	UPDATEACCOUNTFORM_CURRENCY = response[0].currency;
    htmlElementVisiblility('div-updateAccountForm-accountDetailsAndPwdUpdate','show');
	updateAccountForm_getAccountDetails_reset();
  } else { div_display_warning('updateAccountForm-warnings-emailOrCustomerId','W022'); }
  });
 } else { div_display_warning('updateAccountForm-warnings-emailOrCustomerId','W021'); }
} 
function tab_customerUpdateAccountForm(id){
 var arry_Id=["custupdateAccount-tab-details","custupdateAccount-tab-updateEmail","custupdateAccount-tab-updatePwd"];
 var arry_Id_content=["custupdateAccount-content-details","custupdateAccount-content-updateEmail","custupdateAccount-content-updatePwd"];
 for(var index=0;index<arry_Id.length;index++){
   if(arry_Id[index]===id){
     if(!$('#'+arry_Id[index]).hasClass('active')){ $('#'+arry_Id[index]).addClass('active'); }
     if($('#'+arry_Id_content[index]).hasClass('hide-block')){ $('#'+arry_Id_content[index]).removeClass('hide-block'); } 
   } 
   else { 
    if($('#'+arry_Id[index]).hasClass('active')){ $('#'+arry_Id[index]).removeClass('active'); }
     if(!$('#'+arry_Id_content[index]).hasClass('hide-block')){ $('#'+arry_Id_content[index]).addClass('hide-block'); } 
   }
 }
 if(id==="custupdateAccount-tab-updateEmail"){ view_updateAccountForm_tab_loadEmailAddress(); }
} 
function enable_form_updateAccountForm(){
 document.getElementById("custupdateAccount-form-name").disabled =  false;
 document.getElementById("custupdateAccount-form-gender").disabled = false;
 document.getElementById("custupdateAccount-form-country").disabled = false;
 document.getElementById("custupdateAccount-form-deftimezone").disabled = false; 
 document.getElementById("custupdateAccount-form-defcurrency").disabled = false;
}
function disable_form_updateAccountForm(){
 document.getElementById("custupdateAccount-form-name").disabled =  true;
 document.getElementById("custupdateAccount-form-gender").disabled = true;
 document.getElementById("custupdateAccount-form-country").disabled = true;
 document.getElementById("custupdateAccount-form-deftimezone").disabled = true; 
 document.getElementById("custupdateAccount-form-defcurrency").disabled = true;
}
function view_btn_editDeleteReset(){
 htmlElementVisiblility('custupdateAccount-btn-edit','show'); 
 htmlElementVisiblility('custupdateAccount-btn-save','hide'); 
 htmlElementVisiblility('custupdateAccount-btn-delete','show'); 
 htmlElementVisiblility('custupdateAccount-btn-reset','show'); 
}
function view_btn_saveDeleteReset(){
 htmlElementVisiblility('custupdateAccount-btn-edit','hide'); 
 htmlElementVisiblility('custupdateAccount-btn-save','show'); 
 htmlElementVisiblility('custupdateAccount-btn-delete','show'); 
 htmlElementVisiblility('custupdateAccount-btn-reset','show'); 
}
function updateAccountForm_getAccountDetails_edit(){
 enable_form_updateAccountForm();
 view_btn_saveDeleteReset();
}
function updateAccountForm_getAccountDetails_save(){
 disable_form_updateAccountForm();
 view_btn_editDeleteReset();
 UPDATEACCOUNTFORM_NAME = document.getElementById("custupdateAccount-form-name").value;
 UPDATEACCOUNTFORM_GENDER = document.getElementById("custupdateAccount-form-gender").value;
 UPDATEACCOUNTFORM_COUNTRY = document.getElementById("custupdateAccount-form-country").value;
 UPDATEACCOUNTFORM_TIMEZONE = document.getElementById("custupdateAccount-form-deftimezone").value; 
 UPDATEACCOUNTFORM_CURRENCY = document.getElementById("custupdateAccount-form-defcurrency").value;
 if(UPDATEACCOUNTFORM_NAME.length>0){
 if(UPDATEACCOUNTFORM_GENDER.length>0){
 if(UPDATEACCOUNTFORM_COUNTRY.length>0){
 if(UPDATEACCOUNTFORM_TIMEZONE.length>0){
 if(UPDATEACCOUNTFORM_CURRENCY.length>0){
   js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.customers.authentication.php',
    { action:'CUSTOMER_ACCOUNTUPDATEGENERALINFO', account_Id:UPDATEACCOUNTFORM_ACCOUNTID, name:UPDATEACCOUNTFORM_NAME, 
	  gender:UPDATEACCOUNTFORM_GENDER, country:UPDATEACCOUNTFORM_COUNTRY, tz:UPDATEACCOUNTFORM_TIMEZONE, 
	  currency:UPDATEACCOUNTFORM_CURRENCY }, function(response){ console.log(response); });
 } else { div_display_warning('custupdateAccount-content-details-warnings','W017'); } // W017: Missing Currency
 } else { div_display_warning('custupdateAccount-content-details-warnings','W015'); } // W015: Missing Timezone
 } else { div_display_warning('custupdateAccount-content-details-warnings','W018'); } // W018: Missing Country
 } else { div_display_warning('custupdateAccount-content-details-warnings','W019'); } // W019: Missing Gender
 } else { div_display_warning('custupdateAccount-content-details-warnings','W001'); } // W001: Missing Name
}
function updateAccountForm_getAccountDetails_reset(){
  document.getElementById("custupdateAccount-form-accountId").innerHTML = UPDATEACCOUNTFORM_ACCOUNTID;
  document.getElementById("custupdateAccount-form-name").value =  UPDATEACCOUNTFORM_NAME;
  document.getElementById("custupdateAccount-form-gender").value = UPDATEACCOUNTFORM_GENDER;
  document.getElementById("custupdateAccount-form-country").value = UPDATEACCOUNTFORM_COUNTRY;
  document.getElementById("custupdateAccount-form-deftimezone").value = UPDATEACCOUNTFORM_TIMEZONE; 
  document.getElementById("custupdateAccount-form-defcurrency").value = UPDATEACCOUNTFORM_CURRENCY;
}
/* Tab#1: UpdateAccountForm (Details) ::: End */
/* Tab#2: UpdateAccountForm (UpdateEmail) ::: Start */
function view_updateAccountForm_tab_loadEmailAddress(){
 view_tab_updateAccountForm_updateEmailNonEditForm();
 document.getElementById("custupdateAccount-form-email").value = UPDATEACCOUNTFORM_EMAIL;
}
function view_updateAccountForm_loadUpdateEmailAddress(){
 view_tab_updateAccountForm_updateEmailEditForm();
 /* Update Email Addres - Edit Form (Reset) */
 document.getElementById("custupdateAccount-content-updateEmail-warnings").innerHTML='';
 document.getElementById("custupdateAccount-form-updateEmail").disabled=false;
 document.getElementById("custupdateAccount-form-updateEmail").value=UPDATEACCOUNTFORM_EMAIL;
 document.getElementById("custupdateAccount-form-updateEmailVerifyCode").value='';
}
function view_updateAccountForm_updateEmailAddress(){
 document.getElementById("custupdateAccount-content-updateEmail-warnings").innerHTML='';
 var updateEmail = document.getElementById("custupdateAccount-form-updateEmail").value;
 js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.customers.authentication.php',
 { action:'CUSTOMER_VALIDEMAILONUPDATE', account_Id:UPDATEACCOUNTFORM_ACCOUNTID, email_Id:updateEmail }, 
 function(response){
   console.log(response);
   if(response==='EMAIL_ALREADY_EXISTS'){
      div_display_warning('custupdateAccount-content-updateEmail-warnings','W023');
   } else {
      htmlElementVisiblility('custupdateAccount-content-updateEmail-emailVerifyCode','show');
      console.log("UPDATEACCOUNTFORM_EMAILVERIFYCODE: "+UPDATEACCOUNTFORM_EMAILVERIFYCODE);
      document.getElementById("custupdateAccount-form-updateEmail").disabled=true;
   }
 });
}
function view_tab_updateAccountForm_updateEmailNonEditForm(){
 htmlElementVisiblility('custupdateAccount-content-updateEmail-nonEditForm','show');
 htmlElementVisiblility('custupdateAccount-content-updateEmail-editForm','hide');
}
function view_tab_updateAccountForm_updateEmailEditForm(){
 htmlElementVisiblility('custupdateAccount-content-updateEmail-nonEditForm','hide');
 htmlElementVisiblility('custupdateAccount-content-updateEmail-editForm','show');
} 
function view_updateAccountForm_updateEmailVerifyCode(){
 var updateEmail = document.getElementById("custupdateAccount-form-updateEmail").value;
 var emailVerifyCode = document.getElementById("custupdateAccount-form-updateEmailVerifyCode").value;
 if(emailVerifyCode===UPDATEACCOUNTFORM_EMAILVERIFYCODE){
    js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.customers.authentication.php',
    { action:'CUSTOMER_EMAILADDRESSUPDATE', account_Id:UPDATEACCOUNTFORM_ACCOUNTID , email_Id:updateEmail }, 
	function(response){ console.log(response); });
   div_display_success('custupdateAccount-content-updateEmail-warnings','S011');
   UPDATEACCOUNTFORM_EMAIL = document.getElementById("custupdateAccount-form-updateEmail").value;
   view_updateAccountForm_tab_loadEmailAddress();
 } else { div_display_warning('custupdateAccount-content-updateEmail-warnings','W020'); }
}
/* Tab#2: UpdateAccountForm (UpdateEmail) ::: End */
/* Tab#3: UpdateAccountForm (UpdatePassword) ::: Start */
function view_updateAccountForm_updateAccountPassword(){
 var pwd = document.getElementById("custupdateAccount-form-accpwd").value;
 var confirmpwd = document.getElementById("custupdateAccount-form-confirmpwd").value;
 if(pwd.length>0){
 if(confirmpwd.length>0){
 if(pwd===confirmpwd){
   js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.customers.authentication.php',
   { action:'CUSTOMER_ACCOUNTUPDATEACCOUNTPASSWORD', account_Id:UPDATEACCOUNTFORM_ACCOUNTID, acc_pwd: pwd },
   function(response){ console.log(response); 
     div_display_success('custupdateAccount-content-updatePwd-warnings','S003');
	 view_updateAccountForm_resetAccountPassword();
   });
 } else { div_display_warning('custupdateAccount-content-updatePwd-warnings','W005'); } // W005: Password and Confirm Password not matched
 } else { div_display_warning('custupdateAccount-content-updatePwd-warnings','W004'); } // W004: Missing Confirm Password
 } else { div_display_warning('custupdateAccount-content-updatePwd-warnings','W003'); } // W003: Missing Password
}
function view_updateAccountForm_resetAccountPassword(){
 document.getElementById("custupdateAccount-form-accpwd").value='';
 document.getElementById("custupdateAccount-form-confirmpwd").value='';
}
	//   
/* Tab#3: UpdateAccountForm (UpdatePassword) ::: End */
</script>
<div class="panel panel-default">
  <div class="panel-heading">
    <b>Update Existing Account</b>
    <i class="fa fa-refresh pull-right" onclick="javascript:javascript:customer_updateAccountForm_resetFullForm();"></i>
  </div>
  <div class="panel-body">
    <!-- Search Form : Start -->
    <div class="container-fluid">
	  <div class="row">
	    <div class="col-lg-12">
		  <div id="updateAccountForm-warnings-emailOrCustomerId" class="form-group"></div>
		</div>
	  </div>
	  <div class="row">
	    <div class="col-lg-12">
		  
		  <div class="input-group">
		    <input type="text" id="updateAccountForm-emailOrCustomerId" class="form-control" placeholder="Enter Email Address/ Customer Id"/>
			<span class="input-group-addon" onclick="javascript:updateAccountForm_getAccountDetails();"><b>Get Account</b></span>
		  </div>
		</div>
	  </div>
	</div>
	<!-- Search Form : End -->
	<!-- Update Existing Account Form : Start -->	
    <div id="div-updateAccountForm-accountDetailsAndPwdUpdate" class="container-fluid mtop15p hide-block">
      <div class="row">
	    <div class="col-lg-12"><hr/>
          <table style="font-size:12px;">
		    <tr>
			  <td><b>Customer Account Id</b></td><td><b>&nbsp;&nbsp; : &nbsp;&nbsp;</b></td>
			  <td><span id="custupdateAccount-form-accountId"></span>
			      <button class="btn btn-danger" onclick="javascript:view_popup_deleteAccountDetails();">
				    <b>Delete Account</b>
				  </button>
			  </td>
			</tr>
		  </table>
		</div>
	  </div>
	  <div class="row mtop15p">
	    <div class="col-lg-12">
		  <!-- Tab : Start -->
		  <ul class="nav nav-tabs">
			<li id="custupdateAccount-tab-details" onclick="javascript:tab_customerUpdateAccountForm(this.id);">
			   <a href="#"><b>Details</b></a>
			</li>
			<li id="custupdateAccount-tab-updateEmail" onclick="javascript:tab_customerUpdateAccountForm(this.id);">
			   <a href="#"><b>Update Email</b></a>
			</li>
			<li id="custupdateAccount-tab-updatePwd" onclick="javascript:tab_customerUpdateAccountForm(this.id);">
			   <a href="#"><b>Update Password</b></a>
			</li>
		  </ul>
		  <!-- Tab : End -->
		</div>
	  </div>

	  <div class="row">
	    <div class="col-lg-12">
		  <!-- Details Tab Content : Start -->
		  <div id="custupdateAccount-content-details" class="list-group hide-block">
		    <div class="list-group-item">
			    <!-- Details Form : Start -->
		        <div class="container-fluid">
				  <div class="row">
					<div class="col-lg-12">
					  <!-- -->
					  <div id="custupdateAccount-content-details-warnings" class="form-group"></div>
					  <!-- -->
					</div>
				  </div>
				  <div class="row">
					<div class="col-lg-12">
					  <!-- Name -->
					  <div class="form-group">
						<label>Name</label>
						<input type="text" id="custupdateAccount-form-name" class="form-control" 
						placeholder="Enter Account Name" disabled/>
					  </div>
					</div>
				  </div>
				  
				  <div class="row">
					 <div class="col-lg-6">
					   <!-- Gender -->
					   <div class="form-group">
						  <label>Gender</label>
						  <select id="custupdateAccount-form-gender" class="form-control" disabled>
						    <option value="">Select Gender</option>
							<option value="MALE">Male</option>
							<option value="FEMALE">Female</option>
						  </select>
					  </div>
					</div>
						
					<div class="col-lg-6">
					  <!-- Country -->
					  <div class="form-group">
						<label>Country</label>
						<select id="custupdateAccount-form-country" class="form-control" disabled>
						  <option value="">Select your Country</option>
						</select>
					  </div>
					</div>
				  </div>
		
				  <div class="row">
					<!-- Timezone -->
					<div class="col-lg-6">
					  <div class="form-group">
						<label>Default Timezone</label>
						<select id="custupdateAccount-form-deftimezone" class="form-control" disabled>
						   <option value="">Select your Timezone</option>
						</select>
					  </div>
					</div>
						
					<!-- Currency -->
					<div class="col-lg-6">
					  <div class="form-group">
						<label>Default Currency</label>
						<select id="custupdateAccount-form-defcurrency" class="form-control" disabled>
						  <option value="">Select your Currency</option>
						</select>
					  </div>
					</div>
				  </div>

				  <div class="row">
				       <div align="center" class="col-lg-12">
					      <div class="btn-group">
						    <button id="custupdateAccount-btn-edit" class="btn btn-success hide-block" onclick="javascript:updateAccountForm_getAccountDetails_edit();">
							  <b>Edit</b>
							</button>
							<button id="custupdateAccount-btn-save" class="btn btn-success hide-block" onclick="javascript:updateAccountForm_getAccountDetails_save();">
							  <b>Save</b>
							</button>
						    <button id="custupdateAccount-btn-reset" class="btn btn-danger  hide-block"  onclick="javascript:updateAccountForm_getAccountDetails_reset();">
							  <b>Reset</b>
							</button>
					      </div>
					   </div>
				  </div>
				  
				</div>
				<!-- Details Form : End -->
		    </div>
		  </div>
		  <!-- Details Tab Content : End -->

		  <div id="custupdateAccount-content-updateEmail" class="list-group hide-block">
		    <div class="list-group-item">
			    <div class="container-fluid">
				  <div id="custupdateAccount-content-updateEmail-warnings" class="form-group">
				  
				  </div>
				</div>
			    <div id="custupdateAccount-content-updateEmail-nonEditForm" class="container-fluid hide-block">
				   <div class="row">
				     <!-- -->
				     <div class="col-sm-12">
				       <label>Email Address</label>
					   <input type="text" id="custupdateAccount-form-email"  class="form-control" placeholder="Enter your Email Address" disabled/>
					 </div>
					  <!-- -->
				   </div>
				   <div class="row">
				     <!-- -->
				     <div align="center" class="col-sm-12 mtop15p">
					   <button class="btn btn-success" onclick="javascript:view_updateAccountForm_loadUpdateEmailAddress();"><b>Update Email Address</b></button>
					 </div>
					 <!-- -->
				   </div>
				</div>
			    <!-- Details Form : Start -->
		        <div id="custupdateAccount-content-updateEmail-editForm" class="container-fluid hide-block">
				 <div class="row">
				   <!-- -->
				   <div class="col-sm-12">
				    <label>Email Address</label>
					<div class="input-group">
					  <input type="text" id="custupdateAccount-form-updateEmail"  class="form-control" placeholder="Enter your Email Address"/>
					  <span class="input-group-addon" onclick="javascript:view_updateAccountForm_updateEmailAddress();"><b>Next</b></span>
					</div>
				   </div>
				   <!-- -->
				   <!-- -->
				   <div id="custupdateAccount-content-updateEmail-emailVerifyCode" class="col-sm-12 mtop15p hide-block">
				    <label>Email Verification Code</label>
					<div class="input-group">
					  <input type="text" id="custupdateAccount-form-updateEmailVerifyCode" class="form-control" placeholder="Enter your Email Verification Code"/>
					  <span class="input-group-addon"  onclick="javascript:view_updateAccountForm_updateEmailVerifyCode()"><b>Verify and Update Email Address</b></span>
					</div>
				   </div>
				   <!-- -->
				 </div>
				</div>
			</div>
		  </div>
		  
		  <!-- Update Password Tab Content : Start -->
		  <div id="custupdateAccount-content-updatePwd" class="list-group hide-block">
		    <div class="list-group-item">
			    <!-- Update Password Form : Start -->
		        <div class="container-fluid">
				   <div class="row">
				     <div class="col-lg-12">
					   <div id="custupdateAccount-content-updatePwd-warnings" class="form-group"></div>
					 </div>
				   </div>
				   <div class="row">
					  <!-- Password -->
					  <div class="col-lg-6">
						<div class="form-group">
						  <label>Password</label>
			 			  <input id="custupdateAccount-form-accpwd" type="password" class="form-control" placeholder="Enter Password"/>
					    </div>
					  </div>
					
					  <!-- Confirm Password -->
					  <div class="col-lg-6">
					    <div class="form-group">
						  <label>Confirm Password</label>
						  <input id="custupdateAccount-form-confirmpwd" type="password" class="form-control" placeholder="Enter Confirm Password"/>
					    </div>
					  </div>
				   </div>
		
				   <div class="row">
				      <div align="center" class="col-lg-12">
					    <div class="btn-group">
						  <button class="btn btn-success" onclick="javascript:view_updateAccountForm_updateAccountPassword();"><b>Update Account Password</b></button>
						  <button class="btn btn-danger" onclick="javascript:view_updateAccountForm_resetAccountPassword();"><b>Reset</b></button>
					    </div>
					  </div>
				   </div>
				   
				</div>
				<!-- Update Password Form : End -->
		    </div>
		  </div>
		  <!-- Update Password Tab Content : End -->
		</div>
	  </div>
	  
	</div>
	 
	  
					  
	 
					  
	 
	</div>
    <!-- Update Existing Account Form : End -->			
  </div>