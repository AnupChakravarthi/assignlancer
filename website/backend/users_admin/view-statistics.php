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
    
	<!-- jquery-ui -->
	<link type="text/css" href="<?php echo $_SESSION["PROJECT_URL"]; ?>styles/jquery.ui.chatbox.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo $_SESSION["PROJECT_URL"]; ?>styles/jquery-ui.css">
	<!-- jqvmap -->
	<link href="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/jqvmap/dist/jqvmap.css" media="screen" rel="stylesheet" type="text/css"/>
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
          <h4 class="page-header"><b>View Statistics - Customers and Live Support Agents </b></h4>
      </div>
	  
	  <div class="row">
	    
		<div class="col-lg-4">
		
		  <div class="panel panel-primary">
            <div class="panel-heading">
               <div class="row">
                 <div class="col-xs-3">
                   <i class="fa fa-comments fa-5x"></i>
                 </div>
                 <div class="col-xs-9 text-right">
                   <div class="huge">26</div>
                   <div><b>Now Customers Online</b></div>
                 </div>
               </div>
            </div>
          </div>
		  
		</div>
		
		<div class="col-lg-4">
		  
		  <div class="panel panel-green">
            <div class="panel-heading">
               <div class="row">
                 <div class="col-xs-3">
                   <i class="fa fa-comments fa-5x"></i>
                 </div>
                 <div class="col-xs-9 text-right">
                   <div class="huge">26</div>
                   <div><b>Now Live Support Agents Online</b></div>
                 </div>
               </div>
            </div>
          </div>
		  
		</div>
		
		<div class="col-lg-4">
		  
		  <div class="panel panel-yellow">
            <div class="panel-heading">
               <div class="row">
                 <div class="col-xs-3">
                   <i class="fa fa-comments fa-5x"></i>
                 </div>
                 <div class="col-xs-9 text-right">
                   <div class="huge">26</div>
                   <div><b>Business expansion (in Countries)</b></div>
                 </div>
               </div>
            </div>
          </div>
		  
		</div>
		
	  </div>
	  
	  <div class="row">
	    <div class="col-lg-6">
		 <div id="vmap" style="width: 100%; height: 300px;"></div>
		</div>
		
		<div class="col-lg-6">
	      <div id="vmap-response">
		     <h4><b>World</b></h4><hr>
			 <div class="list-group" style="color:grey;">
			   <div class="list-group-item">
			     <b>Customers / LiveSupport Ratio : <span class="pull-right">2 : 1</span></b>
			   </div>
			 </div>
			 <div align="center"><h5><b>Customers</b></h5></div>
			 <div class="list-group" style="color:grey;">
			   <div class="list-group-item">
			     <b>Total Registered Customers till Now : <span class="pull-right">0</span></b>
			   </div>
			   <div class="list-group-item">
			      <b>Customers registered today : <span class="pull-right">0</span></b>
			   </div>
			 </div>
			 <div align="center"><h5><b>Live Support Agent</b></h5></div>
			 <div class="list-group" style="color:grey;">
			   <div class="list-group-item"><b>Total Registered Agents till Now : <span class="pull-right">0</span></b></div>
			   <div class="list-group-item"><b>Agents registered today : <span class="pull-right">0</span></b></div>
			 </div>
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
	<!-- Load Data on Scroll Javascript -->
	<script src="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/dist/load-data-on-scroll.js"></script>
	
	<!-- jqvmap -->
	<script type="text/javascript" src="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/jqvmap/dist/jquery.vmap.js"></script>
	<script type="text/javascript" src="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/jqvmap/dist/maps/jquery.vmap.world.js" charset="utf-8"></script>
	<script type="text/javascript" src="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/jqvmap/dist/jquery.vmap.sampledata.js"></script>
	
	<!-- jquery-ui -->
    <script type="text/javascript" src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/jquery-ui.js"></script>
    <script type="text/javascript" src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/jquery.ui.chatbox.js"></script>
    <!-- cookies -->
	<script type="text/javascript" src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/cookies.js"></script>
	
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/dist/sb-admin-2.js"></script>

<script type="text/javascript">

function viewmap(){
  $('#vmap').vectorMap({ map: 'world_en', backgroundColor: '#f7f7f7', color: '#ffffff',
   hoverOpacity: 0.7, selectedColor: '#666666', enableZoom: true, showTooltip: true,
   scaleColors: ['#C8EEFF', '#006491'], values: sample_data, normalizeFunction: 'polynomial', 
    onRegionOver: function(element, code, region){
	var message='<h4><b>'+region+' ('+code.toUpperCase()+')</b></h4><hr/>';
	    message+='<div class="list-group" style="color:grey;">';
		message+='<div class="list-group-item">';
		message+='<b>Customers / LiveSupport Ratio : <span class="pull-right">2 : 1</span></b>';
		message+='</div>';
		message+='</div>';
		message+='<div align="center"><h5><b>Customers</b></h5></div>';
	    message+='<div class="list-group" style="color:grey;">';
		message+='<div class="list-group-item">';
		message+='<b>Total Registered Customers till Now : <span class="pull-right">0</span></b>';
		message+='</div>';
		message+='<div class="list-group-item">';
		message+='<b>Customers registered today : <span class="pull-right">0</span></b>';
		message+='</div>';
		message+='</div>';
		message+='<div align="center"><h5><b>Live Support Agent</b></h5></div>';
		message+='<div class="list-group" style="color:grey;">';
		message+='<div class="list-group-item">';
		message+='<b>Total Registered Agents till Now : <span class="pull-right">0</span></b>';
		message+='</div>';
		message+='<div class="list-group-item">';
		message+='<b>Agents registered today : <span class="pull-right">0</span></b>';
		message+='</div>';
		message+='</div>';
    document.getElementById("vmap-response").innerHTML=message;
  } });
}
$(document).ready(function(){
 viewmap();
});
</script>

</body>

</html>
