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
   
    <!-- Morris Charts JavaScript -->
    <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/raphael/raphael.min.js"></script>
    <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/morrisjs/morris.min.js"></script>
    <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/data/morris-data.js"></script>
	
	<script type="text/javascript" src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/jquery-ui.js"></script>
    <script type="text/javascript" src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/jquery.ui.chatbox.js"></script>
    <script type="text/javascript" src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/cookies.js"></script>
  
    <link type="text/css" href="<?php echo $_SESSION["PROJECT_URL"]; ?>styles/jquery.ui.chatbox.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo $_SESSION["PROJECT_URL"]; ?>styles/jquery-ui.css">
   <!-- Custom Theme JavaScript -->
    <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/dist/sb-admin-2.js"></script>
<div id="wrapper">
 <?php include_once 'templates\panelheader.php'; ?>
 <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-4"><h4 class="page-header"><b>My Profile</b></h4></div>
	  <div class="col-lg-4"><h4 class="page-header"><b>My Currency</b></h4></div>
    </div>
	<div class="row">
	  <div class="col-lg-4">
	    <!-- Account Id ::: Start -->
	    <div class="form-group">
	      <label>Account Id <span class="red">*</span></label>
		  <input type="text" class="form-control" placeholder="Enter your Account Id" 
		   value="<?php echo $_SESSION["ACCOUNT_ID"]; ?>" disabled/>
	    </div>
		<!-- Account Id ::: End -->
		<!-- Account Type ::: Start -->
	    <div class="form-group">
	      <label>Account Type <span class="red">*</span></label>
		  <input type="text" class="form-control" placeholder="Enter your Account Type" 
		   value="<?php echo $_SESSION["ACCOUNT_TYPE"]; ?>" disabled/>
	    </div>
		<!-- Account Type ::: End -->
		<!-- Account Name ::: Start -->
	    <div class="form-group">
	      <label>Account Name <span class="red">*</span></label>
		  <input type="text" class="form-control" placeholder="Enter your Account Name" 
		   value="<?php echo $_SESSION["ACCOUNT_NAME"]; ?>" disabled/>
	    </div>
		<!-- Account Name ::: End -->
		<!-- Account Email ::: Start -->
	    <div class="form-group">
	      <label>Account Email <span class="red">*</span></label>
		  <input type="text" class="form-control" placeholder="Enter your Account Email" 
		   value="<?php echo $_SESSION["ACCOUNT_EMAIL"]; ?>" disabled/>
	    </div>
		<!-- Account Email ::: End -->
		<!-- Account Created ::: Start -->
	    <div class="form-group">
	      <label>Account Created on <span class="red">*</span></label>
		  <input type="text" class="form-control" placeholder="Enter your Account Created On" 
		   value="<?php echo $_SESSION["ACCOUNT_CREATED"]; ?>" disabled/>
	    </div>
		<!-- Account Created ::: End -->
		<!-- Country ::: Start -->
	    <div class="form-group">
	      <label>Country</label>
		  <select class="form-control">
		    <option value="">Select your Country</option>
			<option value="India">India</option>
			<option value="Australia">Australia</option>
		  </select>
	    </div>
		<!-- Country ::: End -->
		<div align="center" class="form-group">
		  <div class="btn-group">
	        <button class="btn btn-success"><b>Edit Profile</b></button>
			<button class="btn btn-danger"><b>Reset</b></button>
		  </div>
	    </div>
	  </div>
	  <div class="col-lg-4">
	    <div class="form-group">
		  <label>Currency</label>
		  <div class="input-group">
		    <select class="form-control">
			  <option value="">Choose Currency</option>
			  <option value="Indian Rupee">Indian Rupee</option>
			  <option value="Australia Dollar">Australia Dollar</option>
			</select>
			<span class="input-group-addon"><b>Update</b></span>
		  </div>
		</div>
	  </div>
	</div>
 </div>
</div>
</body>
</html>