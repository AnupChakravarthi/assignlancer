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
</head>
<body>
<div id="wrapper">
 <?php include_once '..\..\templates\api_js.php'; ?>
 <?php include_once 'templates\panelheader.php'; ?>
 <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12"><h4 class="page-header"><b>Dashboard</b></h4></div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="panel panel-green">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3"><i class="fa fa-bar-chart fa-5x"></i></div>
              <div class="col-xs-9 text-right"><div class="huge">26</div><div><b>TOTAL ORDERS</b></div></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="panel panel-yellow">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3"><i class="fa fa-tasks fa-5x"></i></div>
              <div class="col-xs-9 text-right"><div class="huge">12</div><div><b>ORDERS DONE</b></div></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="panel panel-red">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-2"><i class="fa fa-shopping-cart fa-5x"></i></div>
              <div class="col-xs-10 text-right"><div class="huge">124</div><div><b>ORDERS ONGOING</b></div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">
		    <i class="fa fa-table fa-fw"></i> <b>Your Recent Orders</b>
	      </div>
		  <div class="panel-body">
            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
              <thead style="background-color:#eee;color:#000;">
                <tr>
                  <th>#</th>
                  <th>Order No</th>
                  <th>Topic</th>
                  <th>Order Amount</th>
                  <th>Paid Amount</th>
				  <th>Assignment Status</th>
				  <th>Payment Status</th>
                </tr>
              </thead>
              <tbody>
                <tr class="odd gradeX">
                  <td align="center">1</td>
                  <td align="center">12345</td>
                  <td align="center">Win 95+</td>
                  <td align="center">$.400</td>
                  <td align="center">$.200</td>
				  <td align="center"><span class="label label-default">Completed</span></td>
				  <td align="center"><span class="label label-default">Completed</span></td>
                </tr>
                <tr class="even gradeC">
                  <td align="center">2</td>
                  <td align="center">12345</td>
                  <td align="center">Win 95+</td>
                  <td align="center">$.400</td>
                  <td align="center">$.200</td>
				  <td align="center"><span class="label label-default">Completed</span></td>
				  <td align="center"><span class="label label-default">Completed</span></td>
                </tr>
              </tbody>
             </table>
           </div>
		</div>
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
<script type="text/javascript">
$(document).ready(function(){
 $('#dataTables-example').DataTable({ responsive: true });
 js_ajax("GET",PROJECT_URL+'backend/php/dac/controller.livechat.php',{ action: 'GET_ONLINE_QUEUELIST' },function(response){
    console.log("response: "+response);
	response=JSON.parse(response);
	var content='';
	for(var index=0;index<response.length;index++){
	  var queue_Id=response[index].queue_Id;
	  var IPAddress=response[index].IPAddress;
	  var SessionId=response[index].SessionId;
	  var queueOn=response[index].queueOn;
	  var title=IPAddress+'<b>@</b>'+SessionId;
	      content+='<a href="#" class="list-group-item">';
		  content+='<div class="container-fluid">';
		  content+='<div class="row">';
          content+='<i class="fa fa-comment fa-fw"></i> '+title;
          content+='<span class="pull-right text-muted">'+queueOn+'</span>';
		  content+='</div>';
		  content+='<div class="row">';
		  content+='<div class="btn-group pull-right" style="margin-top:10px;">';
		  content+='<button class="btn btn-default"><b>Manage Details</b></button>';
		  content+='<button class="btn btn-default" onclick="javascript:chatBoxInitializer(\'chat_div'+index+'\',\''+IPAddress+'\',\''+SessionId+'\');"><b>Chat with Customer</b></button>';
		  content+='</div>';
		  content+='</div>';
		  content+='</div>';
          content+='</a>'; 
	}
	document.getElementById("div_newCustomersInQueue").innerHTML=content;
 });
});  
</script>
</body>

</html>
