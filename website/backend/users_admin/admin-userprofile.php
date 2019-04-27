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
    <!-- Bootstrap Toggle -->
	<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

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
	  <div class="col-lg-1"></div>
	  <div class="col-lg-4">
	    <?php include_once 'templates/admin-myprofileForm.php'; ?>
	  </div>
	  <div class="col-lg-2"></div>
	  <div class="col-lg-4">
	    <div class="form-group">
		  <h4 class="page-header"><b>Update Password</b></h4>
		</div>
	    <div id="myProfileForm_updatePassword_warning" class="form-group"></div>
	    <div class="form-group">
		  <label>Current Password <span class="font-red">*</span></label>
		  <input type="password" id="myProfileForm_updatePassword_oldPassword" class="form-control" placeholder="Enter Old Password"/>
		</div>
		<div class="form-group">
		  <label>New Password <span class="font-red">*</span></label>
		  <input type="password" id="myProfileForm_updatePassword_newPassword" class="form-control" placeholder="Enter New Password"/>
		</div>
		<div class="form-group">
		  <label>Confirm New Password <span class="font-red">*</span></label>
		  <input type="password" id="myProfileForm_updatePassword_confirmNewPassword" class="form-control" placeholder="Enter Confirm New Password"/>
		</div>
		<div align="center" class="form-group">
		  <div class="btn-group">
		    <button class="btn btn-success" onclick="javascript:updatePwd_accountUpdatePwdForm();"><b>Update Password</b></button>
			<button class="btn btn-danger" onclick="javascript:resetPwd_accountUpdatePwdForm();"><b>Reset</b></button>
		  </div>
		</div>
	  </div> 
	  <div class="col-lg-1"></div>
	</div>
 
		</div>
	</div>

	 <!-- jQuery -->
    <script src="<?php echo $_SESSION["HWG_PROJECT_URL"]; ?>backend/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $_SESSION["HWG_PROJECT_URL"]; ?>backend/vendor/bootstrap/js/bootstrap.min.js"></script>

	<!-- Bootstrap Toggle -->
	<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
	
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo $_SESSION["HWG_PROJECT_URL"]; ?>backend/vendor/metisMenu/metisMenu.min.js"></script>

	<script src="<?php echo $_SESSION["HWG_PROJECT_URL"]; ?>backend/dist/load-data-on-scroll.js"></script>
	
    <script type="text/javascript" src="<?php echo $_SESSION["HWG_PROJECT_URL"]; ?>js/jquery-ui.js"></script>
    <script type="text/javascript" src="<?php echo $_SESSION["HWG_PROJECT_URL"]; ?>js/jquery.ui.chatbox.js"></script>
    <script type="text/javascript" src="<?php echo $_SESSION["HWG_PROJECT_URL"]; ?>js/cookies.js"></script>
    <link type="text/css" href="<?php echo $_SESSION["HWG_PROJECT_URL"]; ?>styles/jquery.ui.chatbox.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo $_SESSION["HWG_PROJECT_URL"]; ?>styles/jquery-ui.css">
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo $_SESSION["HWG_PROJECT_URL"]; ?>backend/dist/sb-admin-2.js"></script>
<script type="text/javascript">
function viewBtn_saveReset(){
if($('#myProfileForm_saveProfile').hasClass('hide-block')){ $('#myProfileForm_saveProfile').removeClass('hide-block'); }
if(!$('#myProfileForm_editProfile').hasClass('hide-block')){ $('#myProfileForm_editProfile').addClass('hide-block'); }
if($('#myProfileForm_reset').hasClass('hide-block')){ $('#myProfileForm_reset').removeClass('hide-block'); }
enableTxt_myprofileform();
}
function viewBtn_editReset(){
if(!$('#myProfileForm_saveProfile').hasClass('hide-block')){ $('#myProfileForm_saveProfile').addClass('hide-block'); }
if($('#myProfileForm_editProfile').hasClass('hide-block')){ $('#myProfileForm_editProfile').removeClass('hide-block'); }
if($('#myProfileForm_reset').hasClass('hide-block')){ $('#myProfileForm_reset').removeClass('hide-block'); }
disableTxt_myprofileform();
}
function enableTxt_myprofileform(){
 document.getElementById("myProfileForm_accountName").disabled=false;
 document.getElementById("myProfileForm_accountEmail").disabled=false;
 document.getElementById("myProfileForm_country").disabled=false;
 document.getElementById("myProfileForm_currency").disabled=false;
 document.getElementById("myProfileForm_timezone").disabled=false;
}
function disableTxt_myprofileform(){
 document.getElementById("myProfileForm_accountName").disabled=true;
 document.getElementById("myProfileForm_accountEmail").disabled=true;
 document.getElementById("myProfileForm_country").disabled=true;
 document.getElementById("myProfileForm_currency").disabled=true;
 document.getElementById("myProfileForm_timezone").disabled=true;
}
function save_myprofileform(){
 viewBtn_editReset();
 var account_Id = document.getElementById("myProfileForm_accountId").value;
 var accountName = document.getElementById("myProfileForm_accountName").value;
 var accountEmail = document.getElementById("myProfileForm_accountEmail").value;
 var country = document.getElementById("myProfileForm_country").value;
 var currency = document.getElementById("myProfileForm_currency").value;
 var timezone = document.getElementById("myProfileForm_timezone").value;
 if(accountName.length>0){
 if(accountEmail.length>0){
 if(country.length>0){
 if(currency.length>0){
 if(timezone.length>0){
   js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.administrator.authentication.php',
      { action:'ADMINISTRATOR_UPDATEPROFILE', account_Id :account_Id, accountName:accountName, email:accountEmail,
        country:country, currency:currency, timezone:timezone }, function(response){ 
    console.log(response);
	div_display_success('myProfileForm_warning','S004');
    });
 } else { div_display_warning('myProfileForm_warning','W015'); } // timezone
 } else { div_display_warning('myProfileForm_warning','W017'); } // currency
 } else { div_display_warning('myProfileForm_warning','W009'); } // country
 } else { div_display_warning('myProfileForm_warning','W002'); } // accountEmail
 } else { div_display_warning('myProfileForm_warning','W001'); } // accountName
}
function edit_myprofileform(){
 viewBtn_saveReset();
}
function reset_myprofileform(){
document.getElementById("myProfileForm_accountName").value=ADMINISTRATOR_NAME;
document.getElementById("myProfileForm_accountEmail").value=ADMINISTRATOR_EMAIL;
document.getElementById("myProfileForm_country").value=ADMINISTRATOR_COUNTRY;
document.getElementById("myProfileForm_createdon").value=get_stdDateTimeFormat01(ADMINISTRATOR_CREATEDON);
document.getElementById("myProfileForm_currency").value=ADMINISTRATOR_CURRENCY;
document.getElementById("myProfileForm_timezone").value=ADMINISTRATOR_TIMEZONE;
}
function pageloader(){
 document.getElementById("myProfileForm_createdon").value=get_stdDateTimeFormat01(ADMINISTRATOR_CREATEDON);
 sel_optcountries('myProfileForm_country',ADMINISTRATOR_COUNTRY);
 sel_optcurrencies('myProfileForm_currency',ADMINISTRATOR_CURRENCY);
 sel_optTimezone('myProfileForm_timezone',ADMINISTRATOR_TIMEZONE);
 viewBtn_editReset();
}
$(document).ready(function(){
 pageloader();
});
function updatePwd_accountUpdatePwdForm(){
 var oldPwd = document.getElementById("myProfileForm_updatePassword_oldPassword").value;
 var newPwd = document.getElementById("myProfileForm_updatePassword_newPassword").value;
 var confrmPwd = document.getElementById("myProfileForm_updatePassword_confirmNewPassword").value;
 document.getElementById("myProfileForm_updatePassword_warning").innerHTML='';
 if(oldPwd.length>0){
   if(newPwd.length>0){
      if(confrmPwd.length>0){ 
	    if(newPwd===confrmPwd){
		  js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.administrator.authentication.php',
            { action:'ADMINISTRATOR_UPDATEPWD', account_Id :ADMINISTRATOR_ACCOUNT_ID, old_acc_pwd:oldPwd, 
			  new_acc_pwd:newPwd  },function(response){ 
            console.log(response);
			if(response==='INVALID_PASSWORD'){
			  div_display_warning('myProfileForm_updatePassword_warning','W014');
			} else { 
			  div_display_success('myProfileForm_updatePassword_warning','S003');
			}
          });
	    } else { div_display_warning('myProfileForm_updatePassword_warning','W013'); } // newPwd=#=confrmPwd
      } else { div_display_warning('myProfileForm_updatePassword_warning','W012'); } // confrmPwd
   } else { div_display_warning('myProfileForm_updatePassword_warning','W011'); } // newPwd
 } else { div_display_warning('myProfileForm_updatePassword_warning','W010'); }// OldPwd
}
function resetPwd_accountUpdatePwdForm(){
 document.getElementById("myProfileForm_updatePassword_oldPassword").value="";
 document.getElementById("myProfileForm_updatePassword_newPassword").value="";
 document.getElementById("myProfileForm_updatePassword_confirmNewPassword").value="";	  
}
</script>
</body>
</html>