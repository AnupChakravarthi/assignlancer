<?php include_once '../../templates/api_params.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin 2 - Bootstrap Admin Theme</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/dist/sb-admin-2.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/morrisjs/morris.css" rel="stylesheet">
	<!-- DataTable CSS -->
    <link href="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
	<!-- DataTables Responsive CSS -->
	<link href="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
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
                    <h4 class="page-header"><b>Assignments</b></h4>
                </div>
            </div>
			<div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">
		    <i class="fa fa-table fa-fw"></i> <b>Overview</b>
	      </div>
		  <div class="panel-body">
            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
              <thead style="background-color:#eee;color:#000;">
                <tr>
                  <th>#</th>
				  <th>Date</th>
				  <th>Order Id</th>
                  <th>Customer Id</th>
                  <th>Topic</th>
				  <th>Amount ($)</th>
				  <th>Amount (<i class="fa fa-inr" aria-hidden="true"></i>)</th>
				  <th>Expert Price</th>
				  <th>Payment Type</th>
				  <th>Payment Status</th>
				  <th>Review</th>
                </tr>
              </thead>
              <tbody>
                <tr  align="center" class="odd gradeX">
                  <td>1</td>
				  <td>20-12-2018</td>
				  <td>12345</td>
                  <td>12345</td>
                  <td>Science Natural Living Being</td>
				  <td>120</td>
				  <td>6000</td>
				  <td>2000</td>
				  <td><span class="label label-primary">HALF</span>/<span class="label label-primary">FULL</span></td>
				  <td><i class="fa fa-circle" aria-hidden="true"></i></td>
				  <td><i class="fa fa-star" aria-hidden="true"></i>
					  <i class="fa fa-star" aria-hidden="true"></i>
					  <i class="fa fa-star" aria-hidden="true"></i>
					  <i class="fa fa-star" aria-hidden="true"></i>
					  <i class="fa fa-star" aria-hidden="true"></i>
				  </td>
                </tr>
                <tr align="center" class="even gradeC">
                  <td>2</td>
				  <td>21-12-2018</td>
				  <td>12345</td>
                  <td>12345</td>
                  <td>Science Natural Living Being</td>
				  <td>120</td>
				  <td>6000</td>
				  <td>2000</td>
				  <td><span class="label label-primary">HALF</span>/<span class="label label-primary">FULL</span></td>
				  <td><i class="fa fa-circle" aria-hidden="true"></i></td>
				  <td><i class="fa fa-star" aria-hidden="true"></i>
					  <i class="fa fa-star" aria-hidden="true"></i>
					  <i class="fa fa-star" aria-hidden="true"></i>
					  <i class="fa fa-star" aria-hidden="true"></i>
					  <i class="fa fa-star" aria-hidden="true"></i>
				  </td>
                </tr>
              </tbody>
             </table>
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

	<script type="text/javascript" src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/jquery-ui.js"></script>
    <script type="text/javascript" src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/jquery.ui.chatbox.js"></script>
    <script type="text/javascript" src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/cookies.js"></script>
	
	<script src="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/datatables/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
	<script src="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/datatables-responsive/dataTables.responsive.js"></script>
	
    <link type="text/css" href="<?php echo $_SESSION["PROJECT_URL"]; ?>styles/jquery.ui.chatbox.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo $_SESSION["PROJECT_URL"]; ?>styles/jquery-ui.css">
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/dist/sb-admin-2.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$('#dataTables-example').DataTable({ responsive: true });
});  
</script>
</body>

</html>
