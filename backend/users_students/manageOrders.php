<?php include_once '../../templates/api_params.php'; ?>
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
   
    <!-- Morris Charts JavaScript -->
    <!--script src="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/raphael/raphael.min.js"></script>
    <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/morrisjs/morris.min.js"></script>
    <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/data/morris-data.js"></script-->
	
	<script type="text/javascript" src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/jquery-ui.js"></script>
    <script type="text/javascript" src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/jquery.ui.chatbox.js"></script>
    <script type="text/javascript" src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/cookies.js"></script>
  
    <link type="text/css" href="<?php echo $_SESSION["PROJECT_URL"]; ?>styles/jquery.ui.chatbox.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo $_SESSION["PROJECT_URL"]; ?>styles/jquery-ui.css">
   <!-- Custom Theme JavaScript -->
    <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/dist/sb-admin-2.js"></script>
<script type="text/javascript">
$(document).ready(function(){
 sel_tab_createNewOrder('createNewOrder_tab_howItWorks');
});
</script>
<div id="wrapper">
 <?php include_once 'templates/panelheader.php'; ?>
 <div id="page-wrapper">
    <div class="row">
	
      <div class="col-lg-6">
	    <?php include_once 'templates/createNewOrder.php'; ?>
	  </div>
	  
	  <div class="col-lg-6">
	    <!-- -->
		<div class="panel panel-default"  style="margin-top:15px;">
	      <div class="panel-heading">
	        <i class="fa fa-table fa-fw"></i> <b>My Orders</b>
	      </div>
		  <div class="panel-body" style="padding:0px;">
		   <div class="list-group" style="margin-bottom:0px;">
		    <div class="list-group-item">
			  <div><h5><b>Order Id:</b> #12345</h5></div>
			  <div><i>Coit20247 Assessment Item 1A Entity Relationship Diagram (ERD)</i></div>
			  <div style="margin-top:10px;">
			  
			   <div style="margin-top:10px;">
			     <span class="label label-primary"><i class="fa fa-check"></i> You placed Order</span>
			     <span class="label label-success"><i class="fa fa-check"></i> You received Price Quotation</span>
			     <span class="label label-warning"><i class="fa fa-spinner fa-spin"></i> Price Bargain Process</span>
			   </div>
			   <div style="margin-top:10px;">
			    <span class="label label-danger"><i class="fa fa-check"></i> Price Fixed</span>
				<span class="label label-primary"><i class="fa fa-check"></i> Amount Paid</span>
			   </div>
			   
			  </div>
			</div>
			<div class="list-group-item">
			  <div align="right" style="margin-top:10px;">
			   <span class="label label-default"><i class="fa fa-cog"></i> Order Status</span>
			  </div>
			  
		    </div>
		   </div>
		  </div>
		</div>
		<!-- -->
	  </div>
	  
    </div>
    <div class="row">
      
	</div>
	<div class="row">
      <div class="col-lg-6">
	    
	  </div>
	</div>
 </div>
 <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->


</body>

</html>
