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
table { font-size:12px; }
table>tbody>tr>td { padding-top:10px;padding:bottom:10px; }
</style>
<script type="text/javascript">
function searchInfo_byCustomer(){
 var data='';
 searchBycustomer_load_customerInformation(data);
 searchBycustomer_load_orderInformation(data);
 searchBycustomer_load_ongoingorders(data);
}
function searchBycustomer_load_customerInformation(data){
 var content='<div class="panel panel-default">';
	 content+='<div class="panel-heading"><b>Customer Information</b></div>';
	 content+='<div class="panel-body">';
	 content+='<table>';
	 content+='<tr><td><b>Customer Id</b></td><td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp;</td><td>1234567</td></tr>';
	 content+='<tr><td><b>Customer Name</b></td><td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp;</td><td>N.L.N.Rao</td></tr>';
	 content+='<tr><td><b>Email Address</b></td><td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp;</td><td>nellutlalnrao@gmail.com</td></tr>';
	 content+='<tr><td><b>Country</b></td><td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp;</td><td>India</td></tr>';
	 content+='<tr><td><b>Timezone</b></td><td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp;</td><td>Asia/kolkatta</td></tr>';
	 content+='<tr><td><b>Created on</b></td><td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp;</td><td>January 19th, 2018 <br/>10:10 PM</td></tr>';
	 content+='</table>';
	 content+='</div>';
	 content+='</div>';
 document.getElementById("manageOrder-customerInformation").innerHTML=content;
}
function searchBycustomer_load_orderInformation(data){
 var content='<div class="panel panel-default">';
	 content+='<div class="panel-heading"><b>Order Information</b></div>';
	 content+='<div class="panel-body">';
	 content+='<table>';
	 content+='<tr><td><b>Total Orders Completed</b></td><td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp;</td><td>10</td></tr>';
	 content+='<tr><td><b>Ongoing Orders</b></td><td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp;</td><td>2</td></tr>';
	 content+='</table>';
	 content+='</div>';
	 content+='</div>';
 document.getElementById("manageOrder-orderInformation").innerHTML=content;								
}
function searchBycustomer_load_ongoingorders(data){
 var content='<div class="panel panel-default">';
     content+='<div class="panel-heading">';
	 content+='<b>ON-GOING ORDERS</b>';
	 content+='</div>';
	 content+='<div class="panel-body">';
	 content+='<div class="table-responsive">';
	 content+='<table class="table" style="border:1px solid #ccc;">';
	 content+='<thead align="center">';
	 content+='<tr style="background-color:#eee;">';
	 content+='<td><b>Order Id</b></td>';
	 content+='<td><b>Payment Status</b></td>';
	 content+='<td><b>Work Status</b></td>';
	 content+='<td><b>Assigned on</b></td>';
	 content+='<td><b>Deadline</b></td>';
	 content+='</tr>';
	 content+='</thead>';
	 content+='<tbody align="center">';
	 content+='<tr>';
	 content+='<td>12345</td>';
	 content+='<td><span class="label label-primary">Paid</span></td>';
	 content+='<td><span class="label label-primary">On-going</span></td>';
	 content+='<td>Jan 10,2019</td>';
	 content+='<td>Mar 1, 2019</td>';
	 content+='</tr>';
	 content+='</tbody>';
	 content+='</table>';
	 content+='</div>';
	 content+='</div>';
     content+='</div>';
 document.getElementById("manageOrder-ongoingorders").innerHTML=content;
}

function searchByOrder_sel_ordertabs(id){
 var arry_Id=["searchbyOrder_tab_orderDetails","searchbyOrder_tab_milestones"];
 var arry_Id_content=["searchbyOrder_content_orderDetails","searchbyOrder_content_milestones"];
 for(var index=0;index<arry_Id.length;index++){
   if(arry_Id[index]===id){
    if(!$('#'+arry_Id[index]).hasClass('active')){ $('#'+arry_Id[index]).addClass('active'); }
    if($('#'+arry_Id_content[index]).hasClass('hide-block')){ $('#'+arry_Id_content[index]).removeClass('hide-block'); } 
   } else {
    if($('#'+arry_Id[index]).hasClass('active')){ $('#'+arry_Id[index]).removeClass('active'); }
    if(!$('#'+arry_Id_content[index]).hasClass('hide-block')){ $('#'+arry_Id_content[index]).addClass('hide-block'); }
   }
 }
}

function searchByOrder_load_orderInformation(){
 var content='<div class="panel panel-default">';
	 content+='<div class="panel-heading"><b>Order No # 12345</b></div>';
	 content+='<div class="panel-body">';
	 content+='<div class="container-fluid">';
	 content+='<div class="row">';
	 content+='<div class="col-lg-12">';
	 content+='<ul class="nav nav-tabs">';
	 content+='<li id="searchbyOrder_tab_orderDetails" onclick="javascript:searchByOrder_sel_ordertabs(this.id);"><a href="#"><b>Order Details</b></a></li>';
	 content+='<li id="searchbyOrder_tab_milestones" onclick="javascript:searchByOrder_sel_ordertabs(this.id);"><a href="#"><b>Milestones</b></a></li>';
	 content+='</ul>';
	 // Order Details : Start
	 content+='<div id="searchbyOrder_content_orderDetails" class="list-group hide-block">';
	 content+='<div class="list-group-item">';
	 content+='<div class="container-fluid">';
	 content+='<div class="row">';
	 content+='<div class="col-lg-6">';
	 
	 content+='<div class="form-group">';
	 content+='<label>Order Title</label>';
	 content+='<div class="list-group">';
	 content+='<div class="list-group-item">';
	 content+='<b>Customer requests Order with an Order Title "Write a program in  java programming language" </b>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>'; 
	 
	 content+='<div class="form-group">';
	 content+='<label>Order Description</label>';
	 content+='<div class="list-group">';
	 content+='<div class="list-group-item">';
	 content+='<b>Customer requests Order with an Order Title "Write a program in  java programming language" </b>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
	 
	 content+='<div class="form-group">';
	 content+='<label>Customer overall Rating</label>';
	 content+='<div>';
	 content+='<i class="fa fa-2x fa-star-o"></i><i class="fa fa-2x fa-star-o"></i><i class="fa fa-2x fa-star-o"></i>';
	 content+='<i class="fa fa-2x fa-star-o"></i><i class="fa fa-2x fa-star-o"></i>';
	 content+='</div>';
	 content+='</div>';
	 
	 content+='</div>'; // col-lg-6
	 
	 content+='<div class="col-lg-6">';
	 content+='<div class="row">';
	 content+='<div class="col-lg-6">';
	 
	 content+='<div class="form-group">';
	 content+='<label>Uploaded on</label>';
	 content+='<div class="list-group">';
	 content+='<div class="list-group-item"><b>Jan 10, 2019</b></div>';
	 content+='</div>';
	 content+='</div>';
	 
	 content+='<div class="form-group">';
	 content+='<label>Work started from</label>';
	 content+='<div class="list-group">';
	 content+='<div class="list-group-item"><b>Jan 10, 2019</b></div>';
	 content+='</div>';
	 content+='</div>';
	 
	 content+='<div class="form-group">';
	 content+='<label>Work timeline</label>';
	 content+='<div class="list-group">';
	 content+='<div class="list-group-item"><b>15 days</b></div>';
	 content+='</div>';
	 content+='</div>';
	 
	 content+='</div>'; // col-lg-6
	 
	 content+='<div class="col-lg-6">';
	 
	 content+='<div class="form-group">';
	 content+='<label>Paid on</label>';
	 content+='<div class="list-group">';
	 content+='<div class="list-group-item"><b>Jan 10, 2019</b></div>';
	 content+='</div>';
	 content+='</div>';
	 
	 content+='<div class="form-group">';
	 content+='<label>Deadline Date</label>';
	 content+='<div class="list-group">';
	 content+='<div class="list-group-item"><b>Jan 25, 2019</b></div>';
	 content+='</div>';
	 content+='</div>';
	 
	 content+='</div>';
	 
	 content+='</div>';
	 
	 content+='<div class="row">';
	 content+='<div class="col-lg-12">';
	 content+='<div class="form-group">';
	 content+='<label>Milestones</label>';
	 content+='<div class="list-group">';
	 content+='<div class="list-group-item">';
	 content+='<table>';
	 content+='<tr>';
	 content+='<td><b>Milestone # 1</b></td>';
	 content+='<td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp</td>';
	 content+='<td><b>Jan 13, 2019 <span class="label label-success">Done</span></b></td>';
	 content+='</tr>';
	 content+='<tr>';
	 content+='<td><b>Milestone # 2</b></td>';
	 content+='<td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp</td>';
	 content+='<td><b>Jan 16, 2019 <span class="label label-primary">On-going</span></b></td>';
	 content+='</tr>';
	 content+='<tr>';
	 content+='<td><b>Milestone # 3</b></td>';
	 content+='<td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp</td>';
	 content+='<td><b>Jan 19, 2019 <span class="label label-danger">Not Started</span></b></td>';
	 content+='</tr>';
	 content+='<tr>';
	 content+='<td><b>Milestone # 4</b></td>';
	 content+='<td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp</td>';
	 content+='<td><b>Jan 23, 2019 <span class="label label-danger">Not Started</span></b></td>';
	 content+='</tr>';
	 content+='</table>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
	 // Order Details : End
	 // MileStones Tab : Start 
	 content+='<div id="searchbyOrder_content_milestones" class="list-group hide-block">';
	 content+='<div class="list-group-item">';
	 
	 content+='<div class="container-fluid">';
	 content+='<div class="row">';
	 content+='<div class="col-lg-12">';
	 
	 content+='<div class="list-group">';
	 content+='<div class="list-group-item" data-toggle="collapse" data-target="#searchByOrder-milestone-1" ';
	 content+='style="background-color:#eee;">';
	 content+='<b>Milestone # 1</b>&nbsp;(Jan 13, 2019)&nbsp;<span class="label label-success">Done</span>';
	 content+='&nbsp;<i class="fa fa-angle-down pull-right"></i>';
	 content+='</div>'; 
	 content+='<div id="searchByOrder-milestone-1" class="collapse">';
	 content+='<div class="list-group-item pad0">';
	 
	 content+='<div class="container-fluid">';
	 content+='<div class="row">';
	 content+='<div align="justify" class="col-lg-4 pad10">';
	 
	 
	 content+='<div><b>Target</b></div>';
	 content+='<div class="mbot15p">';
	 content+='Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. ';
	 content+='Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh. ';
	 content+='Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a ';
	 content+='velit eu ante scelerisque vulputate.';
	 content+='</div>';
	 
	 content+='<div><b>Work Rating</b></div>';
	 content+='<div class="mbot15p">';
	 content+='<i class="fa fa-2x fa-star"></i><i class="fa fa-2x fa-star"></i><i class="fa fa-2x fa-star-o"></i>';
	 content+='<i class="fa fa-2x fa-star-o"></i><i class="fa fa-2x fa-star-o"></i>';
	 content+='</div>';
	 content+='</div>'; // col-lg-4
	 content+='<div class="col-lg-8 pad0" style="ckground-color:#eee;bborder-left:1px solid #ccc;">';
	 content+='<div class="list-group" style="margin-bottom:0px;">';
	 content+='<div class="list-group-item" style="background-color:#eee;">';
	 content+='<b>MileStone Conversation</b>';
	 content+='</div>';
	 
	 content+='<div class="scrollview" style="max-height:210px;overflow-y:scroll;">'; //
	 
	 content+='<div class="list-group-item">';
	 content+='<label>Rahul (Live Support Agent)</label>';
	 content+='<div>';
	 content+='<span style="color:#777;">Your Work for Milestone#1. Please check the work and provide your Feedback. ';
	 content+='So that we can continue to Milestone#2.</span>';
	 content+='</div>';
	 content+='<div class="container-fluid">';
	 content+='<div class="row">';
	 content+='<div align="center" class="col-lg-4">';
	 content+='<div>';
	 content+='<img style="width:100px;height:auto;" ';
	 content+='src="https://marketplace.canva.com/MAB_hiJYu8g/1/thumbnail_large/canva-zip-file-format-MAB_hiJYu8g.png"/>';
	 content+='</div>';
	 content+='<div style="color:#777;"><b>documents.zip</b></div>';
	 content+='</div>'; // col-lg-4
	 
	 content+='</div>'; // row
	 content+='</div>'; // container-fluid
	 content+='</div>';
	 
	 content+='<div class="list-group-item">';
	 content+='<label>CustomerName</label>';
	 content+='<div>';
	 content+='Work is good, gohead with Milestone#2.';
	 content+='</div>';
	 content+='</div>';
	 
	 content+='</div>'; // 
	 
	 content+='</div>';
	 content+='</div>';
	 
	 content+='</div>';
	 content+='</div>';
	 
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
	 
	 content+='</div>'; // col-lg-6
	 
	 
	 content+='</div>'; // row
	 content+='</div>'; // container-fluid
	 
	 content+='</div>'; // list-group-item
	 content+='</div>'; // list-group
	 // MileStones Tab : End 
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
  document.getElementById("manageOrder-vieworderdetails").innerHTML=content;
  searchByOrder_sel_ordertabs('searchbyOrder_tab_orderDetails');  
}
</script>
</head>
<body>

    <div id="wrapper">

        <?php include_once 'templates/panelheader.php'; ?>
        <div id="page-wrapper">
            <div class="row">
              <div class="col-lg-12">
                <h4 class="page-header"><b>Customers - Manage Orders</b></h4>
              </div>
            </div>
			<div class="row">
              <div class="col-lg-12">
				<!-- -->
				<div class="container-fluid">
				  <div class="row">
					<div class="col-xs-12">
					   <ul class="nav nav-tabs">
						  <li id="mo_tab_customersearch" onclick="javascript:sel_tab_manageOrders(this.id);">
						    <a href="#"><b>Search By Customer</b></a>
						  </li>
						  <li id="mo_tab_ordersearch" onclick="javascript:sel_tab_manageOrders(this.id);">
							<a href="#"><b>Search By Order</b></a>
						  </li>
					   </ul>
					   <div class="list-group">
						  <div class="list-group-item pad0">
							<div id="mo_content_customersearch" class="container-fluid mtop15p">
							  <div class="row">
								<div class="col-xs-6">
								
									<div class="input-group mbot15p">
									  <input class="form-control" placeholder="Enter Customer Email Address"/>
									  <span class="input-group-addon curpoint" onclick="javascript:searchInfo_byCustomer();"><b>Search</b></span>
									</div>

									<div id="manageOrder-customerInformation"></div>
								  
								</div><!-- col-xs-6 -->
								<div class="col-xs-6">
                                    <div id="manageOrder-orderInformation"></div>
								</div><!-- col-xs-6 -->
							  </div><!-- row -->
							  <div class="row">
							    <div class="col-xs-12">
								 <div id="manageOrder-ongoingorders"></div>
								</div><!-- col-xs-12 -->
							  </div><!-- row -->
							</div><!-- container-fluid -->

							<div id="mo_content_ordersearch" class="container-fluid mtop15p hide-block">
							  <div class="row">
								<div class="col-xs-6">
								  <div class="input-group mbot15p">
									<input class="form-control" placeholder="Enter Order Id"/>
									<span class="input-group-addon curpoint" 
									onclick="javascript:searchByOrder_load_orderInformation();"><b>Search</b></span>
								  </div>
								</div><!-- col-xs-6 -->
							  </div><!-- row -->
							  <div class="row">
							    <div class="col-xs-12">
								  <div id="manageOrder-vieworderdetails"></div>
								</div>
							  </div>					
						    </div><!-- row -->
						  </div><!-- container-fluid -->
					   </div>
					</div>
				  </div>
				</div>
    
			  </div>
			</div>
		</div>
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
sel_tab_manageOrders("mo_tab_customersearch");
});
function sel_tab_manageOrders(id){
 var arry_Id=["mo_tab_customersearch","mo_tab_ordersearch"];
 var arry_Id_content=["mo_content_customersearch","mo_content_ordersearch"];
 for(var index=0;index<arry_Id.length;index++){
 
 if(arry_Id[index]===id){
 
 if(!$('#'+arry_Id[index]).hasClass('active')){
  $('#'+arry_Id[index]).addClass('active');
 }
 if($('#'+arry_Id_content[index]).hasClass('hide-block')){
  $('#'+arry_Id_content[index]).removeClass('hide-block');
 }
 
 
 } else {
 if($('#'+arry_Id[index]).hasClass('active')){
  $('#'+arry_Id[index]).removeClass('active');
 }
  if(!$('#'+arry_Id_content[index]).hasClass('hide-block')){
  $('#'+arry_Id_content[index]).addClass('hide-block');
 }
 
 }
 
 }
 }
</script>
</body>

</html>
