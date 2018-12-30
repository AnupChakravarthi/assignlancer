<?php session_start(); include_once '../../templates/api_params.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Assignlancer - Dashboard</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
	<!-- DataTables CSS -->
    <link href="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
    <!-- DataTables Responsive CSS -->
    <link href="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/dist/sb-admin-2.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
th { font-size:14px; }
td { font-size:12px; }
</style>
</head>
<body>
<!-- jQuery -->
    <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/metisMenu/metisMenu.min.js"></script>
    <!-- DataTables JavaScript -->
    <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/datatables-responsive/dataTables.responsive.js"></script>
   
	<script type="text/javascript" src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/jquery-ui.js"></script>
    <script type="text/javascript" src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/jquery.ui.chatbox.js"></script>
    <script type="text/javascript" src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/cookies.js"></script>
  
    <link type="text/css" href="<?php echo $_SESSION["PROJECT_URL"]; ?>styles/jquery.ui.chatbox.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo $_SESSION["PROJECT_URL"]; ?>styles/jquery-ui.css">
   <!-- Custom Theme JavaScript -->
    <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/dist/sb-admin-2.js"></script>
<script type="text/javascript">
$(document).ready(function(){
 display_editProfile();
});
function display_editProfile(){
 if(!$('#myProfileForm_saveProfile').hasClass('hide-block')){ $('#myProfileForm_saveProfile').addClass('hide-block'); }
 if($('#myProfileForm_editProfile').hasClass('hide-block')){ $('#myProfileForm_editProfile').removeClass('hide-block'); }
 if($('#myProfileForm_reset').hasClass('hide-block')){ $('#myProfileForm_reset').removeClass('hide-block'); }
 /* Enable */
 document.getElementById("myProfileForm_accountId").value=ACCOUNT_ID;
 document.getElementById("myProfileForm_accountType").value=ACCOUNT_TYPE;
 document.getElementById("myProfileForm_accountName").value=ACCOUNT_NAME;
 document.getElementById("myProfileForm_accountEmail").value=ACCOUNT_EMAIL;
 document.getElementById("myProfileForm_country").value=ACCOUNT_COUNTRY;
 var content='<b>Your Profile was created on <br/>'+get_stdDateTimeFormat01(ACCOUNT_CREATED)+'</b>';
 document.getElementById("myProfileForm_createdOn").innerHTML=content;
 document.getElementById("myProfileForm_accountId").disabled=true;
 document.getElementById("myProfileForm_accountType").disabled=true;
 document.getElementById("myProfileForm_accountName").disabled=true;
 document.getElementById("myProfileForm_accountEmail").disabled=true;
 document.getElementById("myProfileForm_country").disabled=true;
}
function store_editProfile(){
 display_editProfile();
 var accountId = document.getElementById("myProfileForm_accountId").value;
 var accountType = document.getElementById("myProfileForm_accountType").value;
 var accountName = document.getElementById("myProfileForm_accountName").value;
 var accountEmail = document.getElementById("myProfileForm_accountEmail").value;
 var country = document.getElementById("myProfileForm_country").value;
 
 console.log("accountId: "+accountId);
 console.log("accountType: "+accountType);
 console.log("accountName: "+accountName);
 console.log("accountEmail: "+accountEmail);
 console.log("country: "+country);
 
 if(accountName.length>0){
   if(accountEmail.length>0){
   /* Validate */
     js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.authentication.php',
      { action:'CHECK_EMAILDUPLICATE_OTHERACCOUNTS', email:accountEmail, account_Id:accountId },
      function(response){ console.log(response);
        if(response==='NONDUPLICATE'){
	      if(country.length>0){
		     document.getElementById("myProfileForm_warning").innerHTML='';
		     js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.authentication.php',
			 { action:'UPDATE_ACCOUNT_PROFILE', account_Id:accountId, name:accountName, email:accountEmail,
			 country:country },
			 function(response){ 
			    console.log(response);
				div_display_success('myProfileForm_warning','S004');
			 });
          } else { div_display_warning('myProfileForm_warning','W009'); }
	    } else {
	 
	    }
   });
   } else { div_display_warning('myProfileForm_warning','W002'); }
 } else { div_display_warning('myProfileForm_warning','W001'); }
 
 
 
}
function display_saveProfile(){
 if($('#myProfileForm_saveProfile').hasClass('hide-block')){ $('#myProfileForm_saveProfile').removeClass('hide-block'); }
 if(!$('#myProfileForm_editProfile').hasClass('hide-block')){ $('#myProfileForm_editProfile').addClass('hide-block'); }
 if($('#myProfileForm_reset').hasClass('hide-block')){ $('#myProfileForm_reset').removeClass('hide-block'); } 
 /* Disable */
 document.getElementById("myProfileForm_accountName").disabled=false;
 document.getElementById("myProfileForm_accountEmail").disabled=false;
 document.getElementById("myProfileForm_country").disabled=false;
}
</script>
<div id="wrapper">
 <?php include_once '..\..\templates\api_js.php'; ?>
 <?php include_once 'templates\panelheader.php'; ?>
 <div id="page-wrapper">
	<div class="row">
	  <div class="col-lg-1"></div>
	  <div class="col-lg-4">
	    <!-- Account Id ::: Start -->
	    <div id="myProfileForm_warning" class="form-group">
	      <h4 class="page-header"><b>My Profile</b></h4>
	    </div>
		<!-- Account Id ::: End -->
		
	    <!-- Account Id ::: Start -->
	    <div class="form-group">
	      <label>Account Id <span class="red">*</span></label>
		  <input type="text" id="myProfileForm_accountId" class="form-control" placeholder="Enter your Account Id" 
		   value="<?php echo $_SESSION["ACCOUNT_ID"]; ?>" disabled/>
	    </div>
		<!-- Account Id ::: End -->
		<!-- Account Type ::: Start -->
	    <div class="form-group">
	      <label>Account Type <span class="red">*</span></label>
		  <input type="text" id="myProfileForm_accountType" class="form-control" placeholder="Enter your Account Type" 
		   value="<?php echo $_SESSION["ACCOUNT_TYPE"]; ?>" disabled/>
	    </div>
		<!-- Account Type ::: End -->
		<!-- Account Created ::: Start -->
	    <div align="right" id="myProfileForm_createdOn" class="form-group"></div>
		<!-- Account Created ::: End -->
		<!-- Account Name ::: Start -->
	    <div class="form-group">
	      <label>Account Name <span class="red">*</span></label>
		  <input type="text" id="myProfileForm_accountName" class="form-control" placeholder="Enter your Account Name" 
		   value="<?php echo $_SESSION["ACCOUNT_NAME"]; ?>" disabled/>
	    </div>
		<!-- Account Name ::: End -->
		<!-- Account Email ::: Start -->
	    <div class="form-group">
	      <label>Account Email <span class="red">*</span></label>
		  <input type="text" id="myProfileForm_accountEmail" class="form-control" placeholder="Enter your Account Email" 
		   value="<?php echo $_SESSION["ACCOUNT_EMAIL"]; ?>" disabled/>
	    </div>
		<!-- Account Email ::: End -->
		
		<!-- Country ::: Start -->
	    <div class="form-group">
	      <label>Country <span class="red">*</span></label>
		  <select id="myProfileForm_country" class="form-control">
		    <option value="">Select your Country</option>
			<option value="India">India</option>
			<option value="Australia">Australia</option>
		  </select>
	    </div>
		<!-- Country ::: End -->
		<div align="center" class="form-group">
		  <div class="btn-group">
		    <button id="myProfileForm_saveProfile" class="btn btn-success hide-block" 
			onclick="javascript:store_editProfile();"><b>Save Profile</b></button>
	        <button id="myProfileForm_editProfile" class="btn btn-success hide-block" 
			onclick="javascript:display_saveProfile();"><b>Edit Profile</b></button>
			<button id="myProfileForm_reset" class="btn btn-danger hide-block" 
			onclick="javascript:display_editProfile();"><b>Reset</b></button>
		  </div>
	    </div>
	  </div>
	  <div class="col-lg-2"></div>
	  <div class="col-lg-4">
	    <div class="form-group">
		  <h4 class="page-header"><b>Update Password</b></h4>
		</div>
	    <div id="myProfileForm_updatePassword_warning" class="form-group">
		
		</div>
	    <div class="form-group">
		  <label>Current Password <span class="red">*</span></label>
		  <input type="password" id="myProfileForm_updatePassword_oldPassword" class="form-control" placeholder="Enter Old Password"/>
		</div>
		<div class="form-group">
		  <label>New Password <span class="red">*</span></label>
		  <input type="password" id="myProfileForm_updatePassword_newPassword" class="form-control" placeholder="Enter New Password"/>
		</div>
		<div class="form-group">
		  <label>Confirm New Password <span class="red">*</span></label>
		  <input type="password" id="myProfileForm_updatePassword_confirmNewPassword" class="form-control" placeholder="Enter Confirm New Password"/>
		</div>
		<div align="center" class="form-group">
		  <div class="btn-group">
		    <button class="btn btn-success" onclick="javascript:myProfileForm_updatePassword();">
		     <b>Update Password</b>
		    </button>
			<button class="btn btn-danger" onclick="javascript:myProfileForm_resetPasswordForm();">
		     <b>Reset</b>
		    </button>
		  </div>
		</div>
	  </div>
	  <div class="col-lg-1"></div>
	</div>
 </div>
</div>
<script type="text/javascript">
function myProfileForm_resetPasswordForm(){
 document.getElementById("myProfileForm_updatePassword_oldPassword").value = '';
 document.getElementById("myProfileForm_updatePassword_newPassword").value = '';
 document.getElementById("myProfileForm_updatePassword_confirmNewPassword").value = '';
}
function myProfileForm_updatePassword(){
 var oldPassword = document.getElementById("myProfileForm_updatePassword_oldPassword").value;
 var newPassword =  document.getElementById("myProfileForm_updatePassword_newPassword").value;
 var confirmNewPassword = document.getElementById("myProfileForm_updatePassword_confirmNewPassword").value;
 if(oldPassword.length>0){
   if(newPassword.length>0){
     if(confirmNewPassword.length>0){
	   if(newPassword===confirmNewPassword){
         js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.authentication.php',
		 { action:'UPDATE_ACCOUNT_PASSWORD', account_Id:ACCOUNT_ID, oldPassword:oldPassword, newPassword:newPassword },
		 function(response){
		    console.log(response);
			if(response==='INVALID_PASSWORD'){
			  div_display_warning('myProfileForm_updatePassword_warning','W014');
			} else {
			  div_display_success('myProfileForm_updatePassword_warning','S003');
			}
		 });
	   } else { div_display_warning('myProfileForm_updatePassword_warning','W013'); } 
     } else { div_display_warning('myProfileForm_updatePassword_warning','W012'); } 
   } else { div_display_warning('myProfileForm_updatePassword_warning','W011');  } 
 } else { div_display_warning('myProfileForm_updatePassword_warning','W010');  }
}
</script>
</body>
</html>