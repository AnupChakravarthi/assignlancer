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

</head>
<body>
  <div id="wrapper">
    <?php include_once 'templates/panelheader.php'; ?>
    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h4 class="page-header"><b>Live Support - Shift Timings</b></h4>
        </div>
      </div>
	  <div class="row">
	    <div class="col-md-6 divRightMargin">
		 <div class="form-group">
		   <label>Select Timezone</label>
		   <div class="input-group">
		    <select class="form-control">
		     <option value="">Select Timezone</option>
			
			
		    </select>
			<span class="input-group-addon curpoint"><b>View Timings</b></span>
		   </div>
		 </div>
		 <div class="form-group">
		  <div class="table-responsive">          
		   <table class="table" style="border:1px solid #ccc;font-size:12px;">
			<thead style="background-color:#eee;font-size:13px;">
			  <tr>
			    <td align="center"><b>Timezone</b></td>
				<td align="center"><b>Shift</b></td>
				<td align="center"><b>Timings</b></td>
			 </tr>
            </thead>
            <tbody>
              <tr>
				<td align="center">Asia/Kolkatta</td>
				<td align="center">Early Morning</td>
				<td align="center">01:00 AM - 09:00 AM</td>
			  </tr>
			  <tr>
				<td align="center">Asia/Kolkatta</td>
				<td align="center">Morning</td>
				<td align="center">09:00 AM - 05:00 PM</td>
			  </tr>
			  <tr>
				<td align="center">Asia/Kolkatta</td>
				<td align="center">Evening</td>
				<td align="center">05:00 PM - 01:00 AM</td>
			  </tr>
			</tbody>
		   </table>
		  </div>	
		 </div>
		</div>
		<div class="col-md-6">
		 <!-- -->

		     <div class="list-group mbot0" style="border-bottom:1px solid #ccc;">
			   <div class="list-group-item pad0" style="background-color:#eee;">
			     <div class="container-fluid">
				   <div class="row">
				     <div class="col-xs-6">
					   <div align="center"><h5><b>Live Support Accounts</b></h5><span>(Asia/Kolkatta)</span></div>
					 </div>
					 <div align="center" class="col-xs-6 divLeftMargin">
					   <h2><b>8</b></h2>
					 </div>
				   </div>
				 </div>
			   </div>
			   <div class="livesupportAccountslistview">
		       <div class="list-group-item">
			      <h5><i class="fa fa-circle fa-fw agentState-green"></i>&nbsp;&nbsp;<b>Nellutla L N Rao</b></h5>
			      <div align="right" class="font-grey"><i><b>Early Morning</b> (Asia/Kolkata) - 01:00 AM to 09:00 AM</i></div>
			   </div>
			   <div class="list-group-item">
			      <h5><i class="fa fa-circle fa-fw agentState-green"></i>&nbsp;&nbsp;<b>Nellutla L N Rao</b></h5>
			      <div align="right" class="font-grey"><i><b>Early Morning</b> (Asia/Kolkata) - 01:00 AM to 09:00 AM</i></div>
			   </div>
			   <div class="list-group-item">
			      <h5><i class="fa fa-circle fa-fw agentState-green"></i>&nbsp;&nbsp;<b>Nellutla L N Rao</b></h5>
			      <div align="right" class="font-grey"><i><b>Early Morning</b> (Asia/Kolkata) - 01:00 AM to 09:00 AM</i></div>
			   </div>
			   <div class="list-group-item">
			      <h5><i class="fa fa-circle fa-fw agentState-green"></i>&nbsp;&nbsp;<b>Nellutla L N Rao</b></h5>
			      <div align="right" class="font-grey"><i><b>Early Morning</b> (Asia/Kolkata) - 01:00 AM to 09:00 AM</i></div>
			   </div>
			   <div class="list-group-item">
			      <h5><i class="fa fa-circle fa-fw agentState-green"></i>&nbsp;&nbsp;<b>Nellutla L N Rao</b></h5>
			      <div align="right" class="font-grey"><i><b>Early Morning</b> (Asia/Kolkata) - 01:00 AM to 09:00 AM</i></div>
			   </div>
			   <div class="list-group-item">
			      <h5><i class="fa fa-circle fa-fw agentState-green"></i>&nbsp;&nbsp;<b>Nellutla L N Rao</b></h5>
			      <div align="right" class="font-grey"><i><b>Early Morning</b> (Asia/Kolkata) - 01:00 AM to 09:00 AM</i></div>
			   </div>
			   <div class="list-group-item">
			      <h5><i class="fa fa-circle fa-fw agentState-green"></i>&nbsp;&nbsp;<b>Nellutla L N Rao</b></h5>
			      <div align="right" class="font-grey"><i><b>Early Morning</b> (Asia/Kolkata) - 01:00 AM to 09:00 AM</i></div>
			   </div>
			   </div>
			 </div>
		   <!--/div-->

		 </div>
		</div>
		
	  </div>
	</div>
  </div>
  
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
  
});
</script>
</body>

</html>
