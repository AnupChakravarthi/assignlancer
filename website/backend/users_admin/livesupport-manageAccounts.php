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
<!-- Modal ::: Start -->
<div id="updateLiveSupportAccountModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h5 class="modal-title"><b>Update Live Support Account</b></h5>
      </div>
      <div class="modal-body">
	   <!-- live Support Account - create ::: Start -->
	   <?php include_once 'templates/livesupport-updateAccountForm.php'; ?>
       <!-- live Support Account - create ::: End -->
      </div>
    </div>

  </div>
</div>
<!-- Modal ::: End -->

<!-- Modal ::: Start -->
<div id="createLiveSupportAccountModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h5 class="modal-title"><b>Create Live Support Account</b></h5>
      </div>
      <div class="modal-body">
	   <!-- live Support Account - create ::: Start -->
	   <?php include_once 'templates/livesupport-createAccountForm.php'; ?>
       <!-- live Support Account - create ::: End -->
      </div>
    </div>

  </div>
</div>
<!-- Modal ::: End -->
    <div id="wrapper">

        <?php include_once 'templates/panelheader.php'; ?>
        <div id="page-wrapper">
            <div class="row">
              <div class="col-lg-12">
                 <h4 class="page-header"><b>Live Support - Manage Accounts</b></h4>
              </div>
            </div>
			<div class="row mtop15p mbot15p">
			 <div class="col-lg-12">
			   <button class="btn btn-default pull-right" data-toggle="modal" data-target="#createLiveSupportAccountModal">
			      <b>(+) Create Live Support Account</b>
			   </button>
			 </div>
			</div>
			<div class="row mtop15p mbot15p">
			 <div class="col-lg-12"><hr/></div>
			</div>
			<div class="row">
			  <div id="liveSupportAccountsTblDiv" class="col-lg-12">
				 
			  </div>
			</div>
			<div class="row">
              <div align="right" class="col-lg-12">
                <button id="liveSupportAccount-createBtn" class="btn btn-primary hide-block" 
				onclick="javascript:display_createLiveSupportAccountsForm();">
				  <b><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Create New Live Support Account</b>
				</button>  
              </div>
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
  load_livesupport_createForm();
  load_livesupport_updateForm();
  load_livesupport_viewAccounts();
});
function load_livesupport_viewAccounts(){
var content='<table id="liveSupportAccountsTbl" width="100%" class="table table-striped table-bordered table-hover">';
    content+='</table>';
document.getElementById("liveSupportAccountsTblDiv").innerHTML=content;
js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.livesupport.authentication.php',
{ action:'LIVESUPPORT_VIEWALLACCOUNTS', adminTimezone:ADMINISTRATOR_TIMEZONE },function(response){
 document.getElementById("liveSupportAccountsTbl").innerHTML=response;
 load_dataTable_liveSupportAccounts();
});
}
var UPDATEDATA_LIVESUPPORTACCOUNTFORM_ACCOUNTID;
var UPDATEDATA_LIVESUPPORTACCOUNTFORM_NAME;
var UPDATEDATA_LIVESUPPORTACCOUNTFORM_COUNTRY;
var UPDATEDATA_LIVESUPPORTACCOUNTFORM_AGENTTIMEZONE;
var UPDATEDATA_LIVESUPPORTACCOUNTFORM_SHIFT;
var UPDATEDATA_LIVESUPPORTACCOUNTFORM_TIMEID;
function load_dataTable_liveSupportAccounts(){
var table = $('#liveSupportAccountsTbl').DataTable({ responsive: true });
 $('#liveSupportAccountsTbl tbody').on('click', 'tr', function () {
  var rowData = table.row(this).data();
  UPDATEDATA_LIVESUPPORTACCOUNTFORM_ACCOUNTID=rowData[1];
  UPDATEDATA_LIVESUPPORTACCOUNTFORM_NAME=rowData[2];
  UPDATEDATA_LIVESUPPORTACCOUNTFORM_COUNTRY=rowData[3];
  UPDATEDATA_LIVESUPPORTACCOUNTFORM_AGENTTIMEZONE=rowData[4];
  UPDATEDATA_LIVESUPPORTACCOUNTFORM_SHIFT=rowData[5];
  UPDATEDATA_LIVESUPPORTACCOUNTFORM_TIMEID=rowData[6];
  $('#updateLiveSupportAccountModal').modal();
  tabMenu_updatelivesupportAccount('updatelivesupportAccount-tabMenu-generalInfo');
  document.getElementById("liveSupportAccount-update-name").value=UPDATEDATA_LIVESUPPORTACCOUNTFORM_NAME;
  document.getElementById("liveSupportAccount-update-country").value=UPDATEDATA_LIVESUPPORTACCOUNTFORM_COUNTRY;
  document.getElementById("liveSupportAccount-update-timezone").value=UPDATEDATA_LIVESUPPORTACCOUNTFORM_AGENTTIMEZONE;
  selopt_shiftTimingsByUsrTz('liveSupportAccount-update-shiftTimings',
			UPDATEDATA_LIVESUPPORTACCOUNTFORM_AGENTTIMEZONE,UPDATEDATA_LIVESUPPORTACCOUNTFORM_TIMEID);
  view_btn_editDeleteReset();
 });
}

</script>
</body>

</html>
