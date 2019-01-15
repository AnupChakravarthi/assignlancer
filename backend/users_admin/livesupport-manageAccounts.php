<?php 
session_start();
include_once '../../templates/api_params.php';
include_once '../../templates/api_js.php';
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
<style>
.mtop15p { margin-top:15px; }
.agentState-green { color: #02af09; }
.agentState-red { color: #e40e07; }
.font-grey { color:#777; }
.hide-block { display:none; }
.livesupportlist-item:hover { background-color:#fff4d4;cursor:pointer; }
.livesupportAccountslistview { max-height:450px;overflow-y:scroll; }
.livesupportAccountslistview::-webkit-scrollbar-track { -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
background-color: #F5F5F5; }         
.livesupportAccountslistview::-webkit-scrollbar { width: 4px;background-color: #F5F5F5; }         
.livesupportAccountslistview::-webkit-scrollbar-thumb { background-color: #e7e7e7; }
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
                <button id="liveSupportAccount-createBtn" class="btn btn-primary hide-block">
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
					
					<div class="panel-body livesupportAccountslistview pad0">
					 <div id="view-livesupportaccounts-list0" class="list-group mbot0">
					 
					  <div class="list-group-item livesupportlist-item">
					    <div>
						   <h5><i class="fa fa-circle fa-fw agentState-green"></i>&nbsp;&nbsp;<b>Nellutla L N Rao</b></h5>
						</div>
						<div><i>Morning - 09:00 AM to 05:00 PM</i></div>
					  </div>
					  
					  
					  
					   <div class="list-group-item livesupportlist-item">
					    <div>
						  <h5><i class="fa fa-circle fa-fw agentState-red"></i>&nbsp;&nbsp;<b>Nellutla L N Rao</b></h5>
						</div>
						<div><i>Morning - 09:00 AM to 05:00 PM</i></div>
					  </div>
					   <div class="list-group-item livesupportlist-item">
					    <div>
						  <h5><i class="fa fa-circle fa-fw agentState-red"></i>&nbsp;&nbsp;<b>Nellutla L N Rao</b></h5>
						</div>
						<div><i>Morning - 09:00 AM to 05:00 PM</i></div>
					  </div>
					   <div class="list-group-item livesupportlist-item">
					    <div>
						  <h5><i class="fa fa-circle fa-fw agentState-red"></i>&nbsp;&nbsp;<b>Nellutla L N Rao</b></h5>
						</div>
						<div><i>Morning - 09:00 AM to 05:00 PM</i></div>
					  </div>
					   <div class="list-group-item livesupportlist-item">
					    <div>
						  <h5><i class="fa fa-circle fa-fw agentState-red"></i>&nbsp;&nbsp;<b>Nellutla L N Rao</b></h5>
						</div>
						<div><i>Morning - 09:00 AM to 05:00 PM</i></div>
					  </div>
					   <div class="list-group-item livesupportlist-item">
					    <div>
						  <h5><i class="fa fa-circle fa-fw agentState-red"></i>&nbsp;&nbsp;<b>Nellutla L N Rao</b></h5>
						</div>
						<div><i>Morning - 09:00 AM to 05:00 PM</i></div>
					  </div>
					   <div class="list-group-item livesupportlist-item">
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
				  <?php include_once 'templates/livesupport-createAccountForm.php'; ?>
                  <!-- live Support Account - create ::: End -->
				  <!-- live Support Account - update ::: Start -->
				  <?php include_once 'templates/livesupport-updateAccountForm.php'; ?>
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

	<script src="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/dist/load-data-on-scroll.js"></script>
	
    <script type="text/javascript" src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/jquery-ui.js"></script>
    <script type="text/javascript" src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/jquery.ui.chatbox.js"></script>
    <script type="text/javascript" src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/cookies.js"></script>
    <link type="text/css" href="<?php echo $_SESSION["PROJECT_URL"]; ?>styles/jquery.ui.chatbox.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo $_SESSION["PROJECT_URL"]; ?>styles/jquery-ui.css">
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/dist/sb-admin-2.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  getListOfLiveSupportAccountsList()
  display_createLiveSupportAccountsForm();
});
/* Display Logic ::: Start */
function display_createLiveSupportAccountsForm(){
  if(!$('#liveSupportAccount-createBtn').hasClass('hide-block')){ 
     $('#liveSupportAccount-createBtn').addClass('hide-block'); 
  }
  if($('#liveSupportAccount-createForm-div').hasClass('hide-block')){ 
     $('#liveSupportAccount-createForm-div').removeClass('hide-block'); 
  }
  if(!$('#liveSupportAccount-updateForm-div').hasClass('hide-block')){ 
     $('#liveSupportAccount-updateForm-div').addClass('hide-block'); 
  }
}
function display_updateLiveSupportAccountsForm(){
 if($('#liveSupportAccount-createBtn').hasClass('hide-block')){ 
     $('#liveSupportAccount-createBtn').removeClass('hide-block'); 
  }
  if(!$('#liveSupportAccount-createForm-div').hasClass('hide-block')){ 
     $('#liveSupportAccount-createForm-div').addClass('hide-block'); 
  }
  if($('#liveSupportAccount-updateForm-div').hasClass('hide-block')){ 
     $('#liveSupportAccount-updateForm-div').removeClass('hide-block'); 
  }
}
function getListOfLiveSupportAccountsList(){
 // view-livesupportaccounts-list0
 js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.authentication.livesupport.php',
 { action:'GET_COUNT_LIVESUPPORTACCOUNTS' },function(total_data){
   scroll_loadInitializer('view-livesupportaccounts-list',10,getListOfLiveSupportAccountsListData,total_data);
 });
 
}
function getListOfLiveSupportAccountsListData(div_view, appendContent,limit_start,limit_end){
 js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.authentication.livesupport.php',
 { action:'GET_DATA_LIVESUPPORTACCOUNTS', limit_start:limit_start, limit_end:limit_end },function(response){
  console.log(response);
  response = JSON.parse(response);
  var content='';
  for(var index=0;index<response.length;index++){
   var account_Id = response[index].account_Id;
   var accountType = response[index].accountType;
   var availStatus = response[index].availStatus;
   var name = response[index].name;
   var email = response[index].email;
   var country = response[index].country;
   var shift = response[index].shift;
   var time_Id = response[index].time_Id;
   var startTime = response[index].startTime;
   var endTime = response[index].endTime;
   var timezone = response[index].timezone;
   content+='<div class="list-group-item livesupportlist-item" ';
   content+='onclick="javascript:view_livesupportUpdateForm(\''+account_Id+'\',\''+accountType+'\',';
   content+='\''+name+'\',\''+email+'\',\''+country+'\',\''+shift+'\',\''+startTime+'\',\''+endTime;
   content+='\',\''+timezone+'\',\''+time_Id+'\');">';
   content+='<h5>';
   if(availStatus==='ONLINE'){ content+='<i class="fa fa-circle fa-fw agentState-green"></i>';
   } else { content+='<i class="fa fa-circle fa-fw agentState-red"></i>'; }
   content+='&nbsp;&nbsp;<b>'+name+'</b>';
   content+='</h5>';
   content+='<div class="font-grey"><i><b>'+shift+'</b> ('+timezone+')';
   content+=' - '+startTime+' to '+endTime+'</i></div>';
   content+='</div>';
  }				  
  content+=appendContent;
  document.getElementById(div_view).innerHTML=content;
 });
}
function view_livesupportUpdateForm(account_Id,accountType,name,email,country,shift,startTime,endTime,timezone,time_Id){
 display_updateLiveSupportAccountsForm();
 document.getElementById("liveSupportAccount-update-accountType").value = accountType;
 document.getElementById("liveSupportAccount-update-name").value = name;
 document.getElementById("liveSupportAccount-update-email").value = email;
 document.getElementById("liveSupportAccount-update-accountPwd").value = '';
 document.getElementById("liveSupportAccount-update-confirmAccountPwd").value = '';
 document.getElementById("liveSupportAccount-update-country").value = country;
 document.getElementById("liveSupportAccount-update-timezone").value = timezone;
 document.getElementById("liveSupportAccount-update-shiftTimings").value = time_Id;
 document.getElementById("liveSupportAccount-update-24X7Support").innerHTMl ='';
}
/* Display Logic ::: End */
</script>
</body>

</html>
