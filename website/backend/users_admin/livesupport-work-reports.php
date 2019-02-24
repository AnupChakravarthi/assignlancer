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
    <!-- Morris Charts CSS -->
    <link href="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/morrisjs/morris.css" rel="stylesheet">

	<link type="text/css" href="<?php echo $_SESSION["PROJECT_URL"]; ?>styles/jquery.ui.chatbox.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo $_SESSION["PROJECT_URL"]; ?>styles/jquery-ui.css">
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
          <h4 class="page-header"><b>Live Support - Work Report</b></h4>
      </div>
	  
	  <div class="row">
	    <div class="col-lg-4 divRightMargin">
		  
		  <div class="form-group">
		    <label>Employee</label>
			<div class="input-group">
			  <input type="text" class="form-control" placeholder="Enter Employee Name"/>
			  <span class="input-group-addon"><b>Select</b></span>
			</div>
		  </div>
		  
		  <div class="form-group">
		    <div class="list-group">
			  <div class="list-group-item">
			     <b>Nellutla L N Rao</b>
				 <i class="fa fa-times-circle pull-right"></i>
			  </div>
			</div>
		  </div>
		  
		  <div align="center" class="form-group">
		    <div style="background-color:#eee;padding-top:1px;padding-bottom:1px;border:1px solid #ccc;">
			  <h5><b>Work Reports</b></h5>
			</div>
		  </div>
		  
		  <div class="form-group">
		    <label>From</label>
			<input type="date" class="form-control" placeholder="Enter Date"/>
		  </div>
		  
		  <div class="form-group">
		    <label>To</label>
			<input type="date" class="form-control" placeholder="Enter Date"/>
		  </div>
		  
		  <div class="form-group">
		    <button class="btn btn-primary form-control"><b>Generate Report</b></button>
		  </div>
		  
		</div>
		<div class="col-lg-8">
		
		  <div class="form-group">
		  <div id="morris-area-chart"></div>
		  </div>
		  
		  <div class="form-group">
			<button class="btn btn-danger"><b>View Detailed Report</b></button>
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
	<!-- Morris Charts JavaScript -->
    <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/raphael/raphael.min.js"></script>
    <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/morrisjs/morris.min.js"></script>
	
    <!-- jquery ui -->
    <script type="text/javascript" src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/jquery-ui.js"></script>
    <script type="text/javascript" src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/jquery.ui.chatbox.js"></script>
	
	<!-- cookies -->
    <script type="text/javascript" src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/cookies.js"></script>
	
    
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/dist/sb-admin-2.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  Morris.Area({ element: 'morris-area-chart',
  data: [{ period: '2011-01-21', work: 5.0 }, 
         { period: '2011-01-22', work: 6.0 }, 
		 { period: '2011-02-23', work: 7.0 }, 
		 { period: '2011-02-24', work: 8.0 }, 
		 { period: '2011-02-25', work: 9.0 },
		 { period: '2011-02-26', work: 5.0 }, 
		 { period: '2011-02-27', work: 6.0 }, 
		 { period: '2011-02-28', work: 7.0 }, 
		 { period: '2011-03-01', work: 8.0 },
		 { period: '2011-03-02', work: 5.0 }, 
		 { period: '2011-03-03', work: 5.21 }, 
		 { period: '2011-03-04', work: 6.11 }, 
		 { period: '2011-03-05', work: 3.02 },
         { period: '2012-01-21', work: 5.0 }, 
         { period: '2012-01-22', work: 6.0 }, 
		 { period: '2012-02-23', work: 7.0 }, 
		 { period: '2012-02-24', work: 8.0 }, 
		 { period: '2012-02-25', work: 9.0 },
		 { period: '2012-02-26', work: 5.0 }, 
		 { period: '2012-02-27', work: 6.0 }, 
		 { period: '2012-02-28', work: 7.0 }, 
		 { period: '2012-03-01', work: 8.0 },
		 { period: '2012-03-02', work: 5.0 }, 
		 { period: '2012-03-03', work: 5.21 }, 
		 { period: '2012-03-04', work: 6.11 }, 
		 { period: '2012-03-05', work: 3.02 }],
		 parseTime: false,
        xkey: 'period',
        ykeys: [ 'work'],
        labels: ['work (in hours)'],
		xLabels: 'day',
		xLabelFormat: function (d) {
		  var dateObject = d.src.period;
		  var mon=["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Dec"];
		  var date=dateObject.split("-")[2];
		  var month=mon[parseInt(dateObject.split("-")[1])-1];
		  var year=dateObject.split("-")[0];
		  return month+' '+date+' ('+year+')';
		},
        pointSize: 4,
        hideHover: 'auto',
        resize: true
    }); 
});
</script>
</body>

</html>
