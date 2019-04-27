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
    <!-- Bootstrap Toggle -->
	<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

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
    <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/bootstrap/js/bootstrap.min.js"></script>

	<!-- Bootstrap Toggle -->
	<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
	
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
function createNewOrder_typeOfWork(){
 var typeOfWork = document.getElementById("createUpdateOrder-typeOfWork").value;
 if(typeOfWork==='DOCUMENT'){
    document.getElementById("createUpdateOrder-div-wordcount").style.display='block';
	document.getElementById("createUpdateOrder-div-pleaseSpecify").style.display='none';
 } else if(typeOfWork==='OTHER'){
    document.getElementById("createUpdateOrder-div-wordcount").style.display='none';
	document.getElementById("createUpdateOrder-div-pleaseSpecify").style.display='block';
 } else {
    document.getElementById("createUpdateOrder-div-wordcount").style.display='none';
	document.getElementById("createUpdateOrder-div-pleaseSpecify").style.display='none';
 }
}
function createUpdateOrder_addDoc(){
 document.getElementById("createUpdateOrder_uploadFile").click();
}
$(document).ready(function(){ });
/* CREATE NEW ORDER - Email Id / Customer Id Check */
function customer_updateOrder_getOrderForm(){
 var orderId = document.getElementById("customer-updateOrder-orderId").value;
 if(orderId.length>0){
   htmlElementVisiblility('customer-updateOrder-orderId-warnings','hide');
   js_ajax('GET', PROJECT_URL+'backend/php/dac/controller.customers.orders.php',
   { action:'GETORDERINFO_BY_ORDERID', order_Id:orderId }, function(response){ 
    console.log(response); 
    customer_updateOrder_getOrderForm_loadCustomerInfo(response);
   });
 } else { div_display_warning('customer-updateOrder-orderId-warnings','W026'); } // W026: Missing Order Id.
}
/* CREATE NEW ORDER - loads Customer Information */
function customer_updateOrder_getOrderForm_loadCustomerInfo(response){
 htmlElementVisiblility('customer-updateOrder-form','show');
 response=JSON.parse(response);
 if(response.orders.length>0){
 var account_Id = response.orders[0].account_Id;
 var name = response.orders[0].name;
 var gender = response.orders[0].gender;
 var email_Id = response.orders[0].email_Id;
 var country = response.orders[0].country;
 var tz = response.orders[0].tz;
 var currency = response.orders[0].currency;
 var order_Id = response.orders[0].order_Id;
 var topic = response.orders[0].topic;
 var topic_desc = response.orders[0].topic_desc;
 var exp_time = response.orders[0].exp_time;
 var workType = response.orders[0].workType;
 var wordCount = response.orders[0].wordCount;
 var others = response.orders[0].others;
 
 var content='<div class="row mtop15p">';
     content+='<div class="col-lg-12">';
	 content+='<hr/><div class="pad3" style="background-color:#eee;">';
	 content+='<h5><b>&nbsp;&nbsp;CUSTOMER INFORMATION</b></h5></div><hr/>';
	 content+='</div>';
	 content+='</div>';
	 content+='<div class="row mtop15p">';
	 content+='<div class="col-lg-12">';
	 content+='<div class="col-lg-4">';
	 content+='<div class="form-group">';
	 content+='<label>Account Id</label>';
	 content+='<div class="list-group">';
	 content+='<div class="list-group-item" style="border-radius:4px;">';
	 content+='<span class="font-grey">'+account_Id+'</span>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
	 
	 content+='<div class="col-lg-4">';
	 content+='<div class="form-group">';
	 content+='<label>Name</label>';
	 content+='<div class="list-group">';
	 content+='<div class="list-group-item" style="border-radius:4px;">';
	 content+='<span class="font-grey">'+name+'</span>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
     content+='</div>';
	 
	 content+='<div class="col-lg-4">';
	 content+='<div class="form-group">';
	 content+='<label>Gender</label>';
	 content+='<div class="list-group">';
	 content+='<div class="list-group-item" style="border-radius:4px;">';
	 content+='<span class="font-grey">'+gender+'</span>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
	 
	 content+='<div class="col-lg-4">';
	 content+='<div class="form-group">';
	 content+='<label>Email</label>';
	 content+='<div class="list-group">';
	 content+='<div class="list-group-item" style="border-radius:4px;">';
	 content+='<span class="font-grey">'+email_Id+'</span>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';

	 content+='<div class="col-lg-4">';
	 content+='<div class="form-group">';
	 content+='<label>Country</label>';
	 content+='<div class="list-group">';
	 content+='<div class="list-group-item" style="border-radius:4px;">';
	 content+='<span class="font-grey">'+country+'</span>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
	
	 content+='<div class="col-lg-4">';
	 content+='<div class="form-group">';
	 content+='<label>Timezone</label>';
	 content+='<div class="list-group">';
	 content+='<div class="list-group-item" style="border-radius:4px;">';
	 content+='<span class="font-grey">'+tz+'</span>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
	
	 content+='<div class="col-lg-4">';
	 content+='<div class="form-group">';
	 content+='<label>Currency</label>';
	 content+='<div class="list-group">';
	 content+='<div class="list-group-item" style="border-radius:4px;">';
	 content+='<span class="font-grey">'+currency+'</span>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
	 
	 content+='</div>';
	 content+='</div>';
	 
	 content+='<div class="row mtop15p">';
     content+='<div class="col-lg-12">';
	 content+='<hr/><div class="pad3" style="background-color:#eee;">';
	 content+='<h5><b>&nbsp;&nbsp;ORDER INFORMATION</b></h5></div><hr/>';
	 content+='</div>';
	 content+='</div>';
	 
	 content+='<div class="row mtop15p">';
	 content+='<div class="col-lg-6">';
	 content+='<div class="col-lg-12">';
	 content+='<div class="form-group">';
	 content+='<label>Order Id</label>';
	 content+='<div class="list-group">';
	 content+='<div class="list-group-item">';
	 content+='<span class="font-grey">'+order_Id+'</span>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
			
	 content+='<div class="row">';
     content+='<div class="col-lg-6">';
				
	 content+='<div class="col-lg-12">';
	 content+='<div class="form-group">';
	 content+='<label>Topic</label>';
	 content+='<input id="createUpdateOrder-topic" type="text" class="form-control" ';
	 content+='placeholder="Enter your Topic Title" value="'+topic+'"/>';
	 content+='</div>';
	 content+='</div>';
				 
	 content+='<div class="col-lg-12">';
	 content+='<div class="form-group">';
	 content+='<label>Topic Description</label>';
	 content+='<textarea id="createUpdateOrder-topicDesc" class="form-control" ';
	 content+='placeholder="Enter Topic Description">'+topic_desc+'</textarea>';
	 content+='</div>';
	 content+='</div>';
				 
	 content+='</div>';
	  
	 content+='<div class="col-lg-6">';
	 content+='<div class="col-lg-12">';
	 content+='<div class="form-group">';
	 content+='<label>Expected Time to complete</label>';
	 content+='<div class="container-fluid">';
	 content+='<div class="row">';
	 content+='<div class="col-xs-6 pad0">';
	 content+='<input id="createUpdateOrder-expdate" type="date" class="form-control" value="'+exp_time.split(" ")[0]+'"/>';
	 content+='</div>';
	 content+='<div class="col-xs-6 pad0">';
	 content+='<input id="createUpdateOrder-exptime" type="time" class="form-control" value="'+exp_time.split(" ")[1]+'"/>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
				 
	 content+='<div class="col-lg-6">';
	 content+='<div class="form-group">';
	 content+='<label>Type of work</label>';
	 content+='<select id="createUpdateOrder-typeOfWork" class="form-control" ';
	 content+='onchange="javascript:createNewOrder_typeOfWork();">';
	 content+='<option value="">Select type of work</option>';
	 content+='<option value="DOCUMENT">Document</option>';
	 content+='<option value="WEB_DESIGN">Web Design</option>';
	 content+='<option value="QUIZ">Quiz</option>';
	 content+='<option value="OTHER">Other</option>';
	 content+='</select>';
	 content+='</div>';
	 content+='</div>';
		
	 content+='<div class="col-lg-6">';
	 content+='<div id="createUpdateOrder-div-wordcount" class="form-group hide-block">';
	 content+='<label>Word Count</label>';
	 content+='<input id="createUpdateOrder-wordcount" type="text" class="form-control" ';
	 content+='placeholder="Enter your word count" value="'+wordCount+'"/>';
	 content+='</div>';

	 content+='<div id="createUpdateOrder-div-pleaseSpecify" class="form-group hide-block">';
	 content+='<label>Please Specify</label>';
	 content+='<input id="createUpdateOrder-pleaseSpecify" type="text" class="form-control" ';
	 content+='placeholder="Enter your choice" value="'+others+'"/>';
	 content+='</div>';
	 content+='</div>';
	
	 content+='</div>';
	 content+='</div>';
			
  document.getElementById("customer-updateOrder-form-customerInfo").innerHTML=content;	
  customer_updateOrder_getOrderForm_enableOrderInfo();
  customer_updateOrder_getOrderForm_orderInfoWorkType(workType);
  customer_createUpdateOrder_form_suppFiles_fileUploadForm();
  } else { div_display_warning('customer-updateOrder-orderId-warnings','W025'); }
}
function customer_updateOrder_getOrderForm_orderInfoWorkType(workType){
  document.getElementById("createUpdateOrder-typeOfWork").value=workType;
  if(workType==='DOCUMENT'){
    document.getElementById("createUpdateOrder-div-wordcount").style.display='block';
	document.getElementById("createUpdateOrder-div-pleaseSpecify").style.display='none';
 } else if(workType==='OTHER'){
    document.getElementById("createUpdateOrder-div-wordcount").style.display='none';
	document.getElementById("createUpdateOrder-div-pleaseSpecify").style.display='block';
 } else {
    document.getElementById("createUpdateOrder-div-wordcount").style.display='none';
	document.getElementById("createUpdateOrder-div-pleaseSpecify").style.display='none';
 }
}
function customer_updateOrder_getOrderForm_enableOrderInfo(){
  document.getElementById("createUpdateOrder-topic").disabled=true;
  document.getElementById("createUpdateOrder-topicDesc").disabled=true;
  document.getElementById("createUpdateOrder-expdate").disabled=true;
  document.getElementById("createUpdateOrder-exptime").disabled=true;
  document.getElementById("createUpdateOrder-typeOfWork").disabled=true;
  document.getElementById("createUpdateOrder-wordcount").disabled=true;
  document.getElementById("createUpdateOrder-pleaseSpecify").disabled=true;
}
function customer_updateOrder_getOrderForm_disableOrderInfo(){
  document.getElementById("createUpdateOrder-topic").disabled=false;
  document.getElementById("createUpdateOrder-topicDesc").disabled=false;
  document.getElementById("createUpdateOrder-expdate").disabled=false;
  document.getElementById("createUpdateOrder-exptime").disabled=false;
  document.getElementById("createUpdateOrder-typeOfWork").disabled=false;
  document.getElementById("createUpdateOrder-wordcount").disabled=false;
  document.getElementById("createUpdateOrder-pleaseSpecify").disabled=false;
}
/* Add Supporting Files ::: START */
function customer_createUpdateOrder_form_suppFiles_fileUploadForm(){
 var content='<div class="col-lg-12">';
	 content+='<div class="form-group">';
	 content+='<button class="btn btn-default pull-right" onclick="javascript:createUpdateOrder_addDoc();" disabled>';
	 content+='<b>Add Supporting Files - {Only Zip Files}</b>';
	 content+='</button>';
	 content+='<form name="fileuploadForm" id="fileuploadForm" action="#" method="POST" enctype="multipart/form-data">';
	 content+='<input id="createUpdateOrder_uploadFile" name="uploadFile" type="file" style="visibility:hidden;" ';
	 content+='onchange="javascript:customer_createUpdateOrder_getOrderForm_fileUpload();" ';
	 content+='accept=".zip"/>';
	 content+='</form>';
     content+='</div>';
	 content+='</div>';
 document.getElementById("customer-createUpdateOrder-form-suppFiles-fileUploadForm").innerHTML=content; 
}
function customer_createUpdateOrder_getOrderForm_fileUpload(){
  var order_Id = document.getElementById("customer-updateOrder-orderId").value;
  var form = $('#fileuploadForm')[0];
  var formData = new FormData(form);
      formData.append("path","data");
      formData.append("dirName",order_Id);
  $.ajax({type: "POST", enctype: 'multipart/form-data', url:PROJECT_URL+"backend/php/dac/controller.app.files.uploader.php",
  data: formData, processData: false, contentType: false, cache: false, timeout: 600000, success: function (response) {  
  console.log("SUCCESS : "+response);customer_createUpdateOrder_listOfSupportingFiles(); }, 
  error: function (e) { console.log("ERROR : "+e); } });
}
function customer_createUpdateOrder_listOfSupportingFiles(){
var order_Id = document.getElementById("customer-updateOrder-orderId").value;
js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.customers.orders.php',
{ action:'GET_SUPPORTINGFILES_ON_ORDER', dirName:order_Id, path:'data' }, function(response){
 console.log(response);
 response=response.split('|');
 var content='';
 for(var index=0;index<response.length;index++){
   if(response[index].trim().length>0){
   content+='<div align="center" class="col-lg-2">';
   content+='<div><i class="fa fa-5x fa-file-archive-o" aria-hidden="true"></i></div>';
   content+='<div class="mtop15p">'+response[index]+'</div>';
   content+='<div class="mtop15p">';
   content+='<button class="btn btn-default hide-block" id="customer-createUpdateOrder-supportFiles-remove-'+response[index]+'" ';
   content+='onclick="javascript:customer_createUpdateOrder_deleteSupportFiles(\''+response[index]+'\');">';
   content+='Remove&nbsp;<i class="fa fa-close"></i></button>';
   content+='</div>';
   content+='</div>';
   }
 }
 document.getElementById("customer-createUpdateOrder-form-addSupportingFilesList").innerHTML=content;
});			 
}
/* Add Supporting Files ::: END */
function customer_createUpdateOrder_addMilestones(){
 var milestones = document.getElementById("customer-createUpdateOrder-addMilestones").value;
 if(milestones==='YES'){
   htmlElementVisiblility('customer-createUpdateOrder-div-numMilestones','show');
 } else { 
   document.getElementById("customer-createUpdateOrder-numMilestones").value='';
   htmlElementVisiblility('customer-createUpdateOrder-div-numMilestones','hide'); 
 }
}
function customer_createUpdateOrder_setMilestones(){
 var milestoneNumber = document.getElementById("customer-createUpdateOrder-numMilestones").value;
 var content='<div class="col-lg-12">'; 
 for(var index=1;index<=milestoneNumber;index++){
	 content+='<div class="col-lg-4">';
	 content+='<div class="list-group">';
	 content+='<div class="list-group-item">';
	 content+='<div class="container-fluid">';
	 content+='<div class="row">';
	 content+='<div align="center" class="col-lg-12">';
	 content+='<h5><b>MILESTONE#'+index+'</b></h5><hr/>';
	 content+='</div>';
	 content+='</div>';
	 content+='<div class="row">';
	 content+='<div class="form-group">';
	 content+='<label>Target Date</label>';
	 content+='<input id="customer-createUpdateOrder-milestoneDate-'+index+'" type="date" class="form-control"/>';
	 content+='</div>';
	 content+='<div class="form-group">';
	 content+='<label>Target Task</label>';
	 content+='<textarea id="customer-createUpdateOrder-milestoneTargetTask-'+index+'" class="form-control" ';
	 content+='placeholder="Enter your Target Task"></textarea>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>'; 
	 content+='</div>';
   } 
	 content+='</div>';
 document.getElementById("customer-createUpdateOrder-milestoneList").innerHTML=content;		
}
</script>
</body>
</html>
