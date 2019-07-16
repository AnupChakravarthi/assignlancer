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
                <div class="col-lg-12">
                    <h4 class="page-header"><b>Customers - Update Orders</b></h4>
                </div>
            </div>	
			<div class="row">
                <div class="col-lg-6">
				   <div id="customer-updateOrder-orderId-warnings" class="form-group"></div>
				</div>
			</div>
			<div class="row">
                <div class="col-lg-6">
				  <div class="input-group">
				    <input type="text" id="customer-updateOrder-orderId" class="form-control" placeholder="Enter Order Id"/>
					<span class="input-group-addon curpoint" onclick="javascript:customer_updateOrder_getOrderForm();"><b>Get Order Form</b></span>
				  </div>
				</div>
			</div>

			<div id="customer-updateOrder-form-customerInfo"></div>
			<div class="row">
                <div class="col-lg-12">
				  <hr/><div class="pad3" style="background-color:#eee;"><h5><b>&nbsp;&nbsp;ADD SUPPORTING FILES</b></h5></div><hr/>
				</div>
			</div>
			<div class="row mtop15p mbot15p">
                <div id="customer-createUpdateOrder-form-addSupportingFilesList" class="col-lg-12"></div>
			</div>
			<div class="row mtop15p mbot15p">
                <div id="customer-createUpdateOrder-form-suppFiles-fileUploadForm" class="col-lg-12"></div>
			</div>
			<div class="row">
                <div class="col-lg-12">
				  <hr/><div class="pad3" style="background-color:#eee;"><h5><b>&nbsp;&nbsp;MILESTONES</b></h5></div><hr/>
				</div>
			</div>
			<div class="row mtop15p">
			  <div class="col-lg-12">
                <div class="col-lg-3">
				   <!-- -->
				     <div class="form-group">
					   <label>Add Milestones</label>
					   <select id="customer-createUpdateOrder-addMilestones" class="form-control" 
					   onchange="javascript:customer_createUpdateOrder_addMilestones();">
					     <option value="">Select your Choice</option>
						 <option value="YES">Yes</option>
						 <option value="NO">No</option>
					   </select>
					 </div>
				   <!-- -->
				</div>
				
				<div class="col-lg-4">
				   <!-- -->
				     <div id="customer-createUpdateOrder-div-numMilestones" class="form-group hide-block">
					   <label>Number of Milestones</label>
					   <div class="input-group">
					     <select id="customer-createUpdateOrder-numMilestones" class="form-control">
					       <option value="">Select Number</option>
						   <option value="1">1</option>
						   <option value="2">2</option>
						   <option value="3">3</option>
						   <option value="4">4</option>
						   <option value="5">5</option>
					     </select>
					     <span class="input-group-addon" onclick="javascript:customer_createUpdateOrder_setMilestones();">
						   <b>Set Milestones</b>
						 </span>
					   </div>
					 </div>
				   <!-- -->
				</div>
			  </div>
			</div>
			<div class="row">
			  <div id="customer-createUpdateOrder-milestoneList" class="col-lg-12"></div> 
			</div>
			<div class="row">
			 <div class="col-lg-12"><hr/></div>
			</div>
			<div class="row">
                <div class="col-lg-12">
				  <!-- -->
				  <div align="center" class="col-lg-12">
				   <div class="btn-group mtop15p mbot15p">
				     <button class="btn btn-success"><b>Create New Order</b></button>
					 <button class="btn btn-danger"><b>Reset</b></button>
				   </div>
				  </div>
				  <!-- -->
				</div>
			</div>
		</div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

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
	<script type="text/javascript" src="<?php echo $_SESSION["HWG_PROJECT_URL"]; ?>backend/js/pages/customer-updateOrders.js"></script>
    <link type="text/css" href="<?php echo $_SESSION["HWG_PROJECT_URL"]; ?>styles/jquery.ui.chatbox.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo $_SESSION["HWG_PROJECT_URL"]; ?>styles/jquery-ui.css">
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo $_SESSION["HWG_PROJECT_URL"]; ?>backend/dist/sb-admin-2.js"></script>
<script type="text/javascript">

$(document).ready(function(){ });
</script>
</body>
</html>
