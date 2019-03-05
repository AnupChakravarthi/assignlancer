<script type="text/javascript">
var EMAIL_VERIFYCODE=(Math.floor(Math.random() * (99999 - 10000))+10000).toString();

function view_div_createAccountForm(){
 sel_optcountries('customer-createAccountForm-country','');
 sel_optcurrencies('customer-createAccountForm-currency','');
 sel_optTimezone('customer-createAccountForm-timezone','');
}
function customer_createAccountForm_emailValidate(){
 document.getElementById('div-customers-createAccountForm-warnings-emailvalidation').innerHTML='';
 var email = document.getElementById("customer-createAccountForm-email").value;
 console.log("EMAIL_VERIFYCODE: "+EMAIL_VERIFYCODE);
 if(email.length>0 && validate_emailAddress(email)==='VALID'){
   
    js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.customers.authentication.php',
    { action:'CUSTOMER_CHECKEMAIL', email:email }, function(response){
       if(response==='EMAIL_NOT_EXISTS'){
	     document.getElementById("customer-createAccountForm-email").disabled=true;
		 htmlElementVisiblility('div-customers-createAccountForm-emailVerify','show');
	   } else {
	      div_display_warning('div-customers-createAccountForm-warnings-emailvalidation','W006');
	   }

	});
 } else { div_display_warning('div-customers-createAccountForm-warnings-emailvalidation','W002'); } 
}
function customer_createAccountForm_emailVerifyValidate(){
 var emailVerifyCode = document.getElementById("customer-createAccountForm-emailVerifyCode").value;
 if(EMAIL_VERIFYCODE===emailVerifyCode){
   htmlElementVisiblility('div-customers-createAccountForm-emailVerify','hide');
   htmlElementVisiblility('customer-createAccountForm-label-emailvalidated','show');
   htmlElementVisiblility('div-customers-createAccountForm-customerInfo','show');
 } else { div_display_warning('div-customers-createAccountForm-warnings-emailvalidation','W020'); } 
}
function customer_createAccountForm(){
 document.getElementById("div-customers-createAccountForm-warnings-customerInfo").innerHTML='';
 var name = document.getElementById("customer-createAccountForm-name").value;
 var email = document.getElementById("customer-createAccountForm-email").value;
 var gender = document.getElementById("customer-createAccountForm-gender").value;
 var country = document.getElementById("customer-createAccountForm-country").value;
 var timezone = document.getElementById("customer-createAccountForm-timezone").value;
 var currency = document.getElementById("customer-createAccountForm-currency").value;
 var pwd = document.getElementById("customer-createAccountForm-pwd").value;
 var confirmpwd = document.getElementById("customer-createAccountForm-confirmpwd").value;
 if(name.length>0){
 if(gender.length>0){
 if(country.length>0){
 if(timezone.length>0){
 if(currency.length>0){
 if(pwd.length>0){
 if(confirmpwd.length>0){
 if(pwd===confirmpwd){
  js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.customers.authentication.php', 
  { action:'CUSTOMER_ADDNEWACCOUNT', name:name, gender:gender, email_Id:email, acc_pwd:pwd, 
    country:country, tz:timezone, currency:currency }, function(response){ console.log(response); 
	customer_createAccountForm_resetFullForm();
     alert_display_success('S010','#');
	});
 } else { div_display_warning('div-customers-createAccountForm-warnings-customerInfo','W013'); } // W013
 } else { div_display_warning('div-customers-createAccountForm-warnings-customerInfo','W004'); } // confirmpwd: W004
 } else { div_display_warning('div-customers-createAccountForm-warnings-customerInfo','W003'); } // pwd: W003
 } else { div_display_warning('div-customers-createAccountForm-warnings-customerInfo','W017'); } // currency: W017
 } else { div_display_warning('div-customers-createAccountForm-warnings-customerInfo','W015'); } // timezone: W015
 } else { div_display_warning('div-customers-createAccountForm-warnings-customerInfo','W009'); } // country: W009
 } else { div_display_warning('div-customers-createAccountForm-warnings-customerInfo','W019'); } // gender: W019
 } else { div_display_warning('div-customers-createAccountForm-warnings-customerInfo','W001'); } // name : W001
}
/* Reset Form */
function customer_createAccountForm_resetFullForm(){
 document.getElementById("div-customers-createAccountForm-warnings-emailvalidation").innerHTML='';
 document.getElementById("div-customers-createAccountForm-warnings-customerInfo").innerHTML='';
 document.getElementById("customer-createAccountForm-email").value='';
 document.getElementById("customer-createAccountForm-email").disabled=false;
 document.getElementById("customer-createAccountForm-emailVerifyCode").value='';
 htmlElementVisiblility('customer-createAccountForm-label-emailvalidated','hide');
 htmlElementVisiblility('div-customers-createAccountForm-emailVerify','hide');
 htmlElementVisiblility('div-customers-createAccountForm-customerInfo','hide');
 customer_createAccountForm_resetCustomerInfo();
}
function customer_createAccountForm_resetCustomerInfo(){
 document.getElementById("customer-createAccountForm-name").value='';
 document.getElementById("customer-createAccountForm-email").value='';
 document.getElementById("customer-createAccountForm-gender").value='';
 document.getElementById("customer-createAccountForm-country").value='';
 document.getElementById("customer-createAccountForm-timezone").value='';
 document.getElementById("customer-createAccountForm-currency").value='';
 document.getElementById("customer-createAccountForm-pwd").value='';
 document.getElementById("customer-createAccountForm-confirmpwd").value='';
}
	
</script>
<div class="panel panel-default">
  <div class="panel-heading"><b>Create New Account 
    <i class="fa fa-refresh pull-right" onclick="javascript:customer_createAccountForm_resetFullForm();"></i></b>
  </div>
  <div class="panel-body">
	<!-- Create New Account Form : Start -->
	<div id="div-form-createNewAccount" class="container-fluid">
		
      <div class="row">
		<div class="col-lg-12">
		  <!-- Warnings -->
		  <div id="div-customers-createAccountForm-warnings-emailvalidation" class="form-group"></div>
		  <!-- Email -->
		  <div class="form-group">
		    <label>Email <span id="customer-createAccountForm-label-emailvalidated" class="label label-success hide-block">
					<i class="fa fa-check"></i> Validated</span>
			</label>
			<div class="input-group">
			  <input type="text" id="customer-createAccountForm-email" class="form-control" placeholder="Enter Email Address"/>
		      <span class="input-group-addon" onclick="javascript:customer_createAccountForm_emailValidate();"><b>Next</b></span>
			</div>
		  </div>
		  
		  <!-- Email Verification -->
		  <div id="div-customers-createAccountForm-emailVerify" class="hide-block">
		    <div class="alert alert-success">
				<strong>Success!</strong> An Verification code is sent to Customer's Email Address.
				Please Enter the Email Verification Code below:
			</div>
            <div class="form-group">
		      <label>Email Verification Code</label>
			  <div class="input-group">
			    <input type="text" id="customer-createAccountForm-emailVerifyCode" class="form-control" placeholder="Enter Email Verification Code"/>
		        <span class="input-group-addon" onclick="javascript:customer_createAccountForm_emailVerifyValidate();"><b>Validate</b></span>
			  </div>
		    </div>
		  </div>
		  
		</div>
	  </div>
	  
	  <div id="div-customers-createAccountForm-customerInfo" class="row hide-block">
	    <div class="col-lg-12">
		  <h4><b>Fill the Customer Information</b></h4><hr/>
		</div>
		<!-- Warnings -->
		<div class="col-lg-12 mtop15p">
		<div id="div-customers-createAccountForm-warnings-customerInfo" class="form-group"></div>
		</div>
		
		<div class="col-lg-12">
		  <!-- Name -->
		  <div class="form-group">
		    <label>Name</label>
			<input type="text" id="customer-createAccountForm-name" class="form-control" placeholder="Enter Account Name"/>
		  </div>
		</div>

		<div class="col-lg-6">
		  <!-- Gender -->
		  <div class="form-group">
			<label>Gender</label>
			<select id="customer-createAccountForm-gender" class="form-control">
			   <option value="">Select Gender</option>
			   <option value="MALE">Male</option>
			   <option value="FEMALE">Female</option>
			</select>
		  </div>
		  <!-- Gender -->
		  <!-- Timezone -->
		  <div class="form-group">
			<label>Default Timezone</label>
			<select id="customer-createAccountForm-timezone" class="form-control">
				<option value="">Select your Timezone</option>
			</select>
		  </div>
		  <!-- Timezone -->
		  <!-- Password -->
		  <div class="form-group">
			<label>Password</label>
			<input id="customer-createAccountForm-pwd" type="password" class="form-control" placeholder="Enter Password"/>
		  </div>
		  <!-- Password -->
		</div>
						
	    <div class="col-lg-6">
		  <!-- Country -->
		  <div class="form-group">
			<label>Country</label>
			<select id="customer-createAccountForm-country" class="form-control">
			  <option value="">Select your Country</option>
			</select>
		  </div>
		  <!-- Country -->
		  <!-- Currency -->
		  <div class="form-group">
			<label>Default Currency</label>
			<select id="customer-createAccountForm-currency" class="form-control">
			    <option value="">Select your Currency</option>
			</select>
		  </div>
		  <!-- Currency -->
		  <!-- Confirm Password -->
		   <div class="form-group">
			 <label>Confirm Password</label>
			 <input id="customer-createAccountForm-confirmpwd" type="password" class="form-control" placeholder="Enter Confirm Password"/>
		   </div>
		   <!-- Confirm Password -->
		</div>
	  
	    <div align="center" class="col-lg-12">
		  <div class="btn-group">
		    <button class="btn btn-success" onclick="javascript:customer_createAccountForm();"><b>Create Account</b></button>
		    <button class="btn btn-danger" onclick="javascrip:customer_createAccountForm_resetCustomerInfo();"><b>Reset</b></button>
		  </div>
	    </div>
	  </div>
	
		
	 
	</div>
	<!-- Create New Account Form : End -->
	<!-- Verification Code : Start -->
	<div id="div-form-verificationcode" class="container-fluid hide-block">
	
	</div>
	<!-- Verification Code : End -->
  </div>
</div>
			  