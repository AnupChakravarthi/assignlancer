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

    <!-- Custom Fonts -->
    <link href="<?php echo $_SESSION["HWG_PROJECT_URL"]; ?>backend/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
.label { font-size:13px; }
td { font-size:12px;padding-top:5px;padding-bottom:5px; }
</style>
</head>
<body>

    <div id="wrapper">

        <?php include_once 'templates/panelheader.php'; ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-header"><b>Customers - Worksheet</b></h4>
                </div>
            </div>	
			<div class="row">
                <div class="col-lg-12">
				  <ul class="nav nav-tabs">
					<li class="active"><a href="#"><b>Past</b></a></li>
					<li><a href="#"><b>Current</b></a></li>
					<li><a href="#"><b>Upcoming</b></a></li>
				  </ul>
				  <div class="list-group">
					<div class="list-group-item">
				      <div class="container-fluid">
					    <div class="row">
						  <div class="col-lg-4">
						    <!-- -->
							<div class="list-group">
							 <div class="list-group-item">
							   <b>Order: #12345</b>
							 </div>
							 <div class="list-group-item">
							   <b>Customer requests Order with an Order Title "Write a program in 
							   java programming language"</b>
							 </div>
							 <div class="list-group-item">
							   <table>
							    <tr>
								  <td><b>Status</b></td><td><b>&nbsp;&nbsp;:&nbsp;&nbsp;</b></td>
								  <td><span class="label label-success">Done</span></td>
								</tr>
								<tr>
								  <td><b>Customer Review</b></td><td><b>&nbsp;&nbsp;:&nbsp;&nbsp;</b></td>
								  <td>
								  <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
								  </td>
								</tr>
								<tr>
								  <td><b>Milestone Date</b></td><td><b>&nbsp;&nbsp;:&nbsp;&nbsp;</b></td>
								  <td><i>Jan 31, 2018</i></td>
								</tr>
							   </table>
							 </div>
							</div>
							<!-- -->
						  </div>
						  <div class="col-lg-4">
						  
						  </div>
						  <div class="col-lg-4">
						  
						  </div>
						</div>
					  </div>
				    </div>
				  </div>
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
$(document).ready(function(){

});
</script>
</body>

</html>
