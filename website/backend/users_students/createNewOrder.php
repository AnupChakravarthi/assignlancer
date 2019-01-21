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
function createNewOrder_addDoc(){
 document.getElementById("createNewOrder_fileBtn").click();
}
function sel_tab_createNewOrder(id){
 var arry_tab=["createNewOrder_tab_orderDetails","createNewOrder_tab_supportDoc","createNewOrder_tab_userAvailability"];
 var arry_content=["createNewOrder_content_orderDetails","createNewOrder_content_supportDoc",
				   "createNewOrder_content_userAvailability"];
 for(var index=0;index<arry_tab.length;index++){
  if(arry_tab[index]===id){
    if(!$('#'+arry_tab[index]).hasClass('active')){ $('#'+arry_tab[index]).addClass('active'); }
    if($('#'+arry_content[index]).hasClass('hide-block')){ $('#'+arry_content[index]).removeClass('hide-block'); }
  } else {
    if($('#'+arry_tab[index]).hasClass('active')){ $('#'+arry_tab[index]).removeClass('active'); }
    if(!$('#'+arry_content[index]).hasClass('hide-block')){ $('#'+arry_content[index]).addClass('hide-block'); }
  }
 }
}
$(document).ready(function(){
 gen_selOpt_userAvailableTimings('createNewOrder_selOpt_sundayFrom');
 gen_selOpt_userAvailableTimings('createNewOrder_selOpt_sundayTo');
 gen_selOpt_userAvailableTimings('createNewOrder_selOpt_mondayFrom');
 gen_selOpt_userAvailableTimings('createNewOrder_selOpt_mondayTo');
 gen_selOpt_userAvailableTimings('createNewOrder_selOpt_tuesdayFrom');
 gen_selOpt_userAvailableTimings('createNewOrder_selOpt_tuesdayTo');
 gen_selOpt_userAvailableTimings('createNewOrder_selOpt_wednesdayFrom'); 
 gen_selOpt_userAvailableTimings('createNewOrder_selOpt_wednesdayTo');
 gen_selOpt_userAvailableTimings('createNewOrder_selOpt_thursdayFrom');  
 gen_selOpt_userAvailableTimings('createNewOrder_selOpt_thursdayTo');
 gen_selOpt_userAvailableTimings('createNewOrder_selOpt_fridayFrom');  
 gen_selOpt_userAvailableTimings('createNewOrder_selOpt_fridayTo');
 gen_selOpt_userAvailableTimings('createNewOrder_selOpt_saturdayFrom'); 
 gen_selOpt_userAvailableTimings('createNewOrder_selOpt_saturdayTo');
 
 sel_tab_createNewOrder('createNewOrder_tab_orderDetails');
 
});
function gen_selOpt_userAvailableTimings(id){
 var arry_time=["00:00","01:00","02:00","03:00","04:00","05:00","06:00","07:00","08:00","09:00","10:00",
				"11:00","12:00","13:00","14:00","15:00","16:00","17:00","18:00","19:00","20:00","21:00",
				"22:00","23:00"];
 var selvalue = document.getElementById(id);
 for(var index=0;index<selvalue.options.length;index++){ selvalue.options.remove(index); }
 var optvalue = '<option value="">Select From</option>';
 for(var index=0;index<arry_time.length;index++){
   optvalue+= '<option value="'+arry_time[index]+'">'+arry_time[index]+'</option>';
 }
 document.getElementById(id).innerHTML=optvalue;
}
// S005
</script>
<div id="wrapper">
 <?php include_once '..\..\templates\api_js.php'; ?>
 <?php include_once 'templates/panelheader.php'; ?>
 <div id="page-wrapper">
    <div class="row mtop15p">
	   <div class="col-lg-8">
<div class="panel panel-default">
 <div class="panel-heading">
	<i class="fa fa-table fa-fw"></i> <b>Create New Order</b>
 </div>
 <div class="panel-body">
    <div>
	  <ul class="nav nav-tabs">
		<li id="createNewOrder_tab_orderDetails" onclick="javascript:sel_tab_createNewOrder(this.id);" class="active">
		  <a href="#"><b>Step-1</b></a>
		</li>
		<li id="createNewOrder_tab_supportDoc" onclick="javascript:sel_tab_createNewOrder(this.id);"> 
		   <a href="#"><b>Step-2</b></a>
		</li>
		<li id="createNewOrder_tab_userAvailability" onclick="javascript:sel_tab_createNewOrder(this.id);">
		   <a href="#"><b>Step-3</b></a>
		</li>
	  </ul>
    </div>
	<div id="createNewOrder_content_orderDetails" class="list-group hide-block">
	<div class="list-group-item" style="border-radius:0px;">
       <!-- -->
	   <div class="container-fluid">
	     <div class="row">
		   <div class="col-lg-12">
		     <div align="center" class="form-group">
			   <h4><b>Order Details</b></h4><hr/>
			 </div>
		   </div>
		 </div>
	     <div class="row">
		   <div class="col-lg-6">
		     <!-- Topic ::: Start -->
		     <div class="form-group">
				<label>Topic <span class="red">*</span></label>
				<input id="createNewOrder_input_topic" type="text" class="form-control" placeholder="Enter Topic Name"/>
			 </div>
			 <!-- Topic ::: End -->
		   </div>
		   <div class="col-lg-6">
		      <!-- Expected Time to Complete ::: Start -->
			  <div class="form-group">
				<label>Expected Time to Complete <span class="red">*</span></label>
				<div class="container-fluid">
				  <div class="row">
					 <div class="col-xs-6 pad0">
					    <input id="createNewOrder_input_expectedDate" type="date" class="form-control"/>
					 </div>
		             <div class="col-xs-6 pad0">
					    <input id="createNewOrder_input_expectedTime" type="time" class="form-control"/>
				     </div>
				  </div>
		        </div>
	          </div>
			  <!-- Expected Time to Complete ::: End -->
		   </div>
		 </div>
		 <div class="row">
		   <div class="col-lg-6">
		     <!-- Topic Description ::: Start -->
		     <div class="form-group">
			   <label>Topic Description <span class="red">*</span></label>
			   <textarea id="createNewOrder_input_topicDesc" class="form-control" placeholder="Enter Topic Description"></textarea>
	         </div>
			 <!-- Topic Description ::: End -->
		   </div>
		   <div class="col-lg-6">
		     <!-- -->
			 <div class="form-group">
				<label>Type of Work <span class="red">*</span></label>
				<select id="createNewOrder_input_typeOfWork" class="form-control" onchange="javascript:set_typeOfWork();">
				  <option value="">Select type of Work</option>
				  <option value="DOCUMENT">Document</option>
				  <option value="WEB_DESIGN">Web Design</option>
				  <option value="QUIZ">Quiz</option>
				  <option value="OTHER">Other</option>
				</select>
			 </div>
			 <!-- -->
		   </div>
		 </div>
<script type="text/javascript">
function set_typeOfWork(){
 var typeOfWork = document.getElementById("createNewOrder_input_typeOfWork").value;
 if(typeOfWork==='DOCUMENT'){
  if($('#createNewOrder_workType_workCount').hasClass('hide-block')){
    $('#createNewOrder_workType_workCount').removeClass('hide-block');
  }
  if(!$('#createNewOrder_workType_pleaseSpecify').hasClass('hide-block')){
    $('#createNewOrder_workType_pleaseSpecify').addClass('hide-block');
  }
 } else if(typeOfWork==='OTHER'){
   if(!$('#createNewOrder_workType_workCount').hasClass('hide-block')){
    $('#createNewOrder_workType_workCount').addClass('hide-block');
   }
   if($('#createNewOrder_workType_pleaseSpecify').hasClass('hide-block')){
    $('#createNewOrder_workType_pleaseSpecify').removeClass('hide-block');
   }
 } else {
    if(!$('#createNewOrder_workType_workCount').hasClass('hide-block')){
      $('#createNewOrder_workType_workCount').addClass('hide-block');
    }
    if(!$('#createNewOrder_workType_pleaseSpecify').hasClass('hide-block')){
     $('#createNewOrder_workType_pleaseSpecify').addClass('hide-block');
    }
 }
 
}
</script>
		 <div class="row">
		   <div class="col-lg-6">
		     <!-- -->
			 <div id="createNewOrder_workType_workCount" class="form-group hide-block">
				<label>Word Count <span class="red">*</span></label>
				<input type="number" class="form-control" placeholder="Enter your Word Count"/>
			 </div>
			 <!-- -->
			  <!-- -->
			 <div id="createNewOrder_workType_pleaseSpecify" class="form-group  hide-block">
				<label>Please Specify <span class="red">*</span></label>
				<input type="text" class="form-control" placeholder="Enter your Choice"/>
			 </div>
			 <!-- -->
		   </div>
		   <div class="col-lg-6">
		    
		   </div>
		 </div>
	     <div class="row">
		   <div align="center" class="col-lg-12">
		     <div class="btn-group">
			   <button class="btn btn-success"><b>Save Order Details</b></button>
			   <button class="btn btn-danger"><b>Reset</b></button>
			 </div>
		   </div>
		 </div>
	   </div>
	   
	</div>
	</div>
	<div id="createNewOrder_content_supportDoc" class="list-group hide-block">
	  <div class="list-group-item" style="border-radius:0px;">
	  
	    <div class="container-fluid">
		 <div class="row">
		   <div align="center" class="col-lg-12">
		     <h4><b>Add Supporting Documents</b></h4><hr/>
		   </div>
		 </div>
	     <div class="row">
		   <div class="col-lg-6">
		     
			  <div class="form-group">

				<div class="input-group">
				   <button class="btn btn-default" onclick="javascript:createNewOrder_addDoc();">
					 <b>Add Documents <span class="red">*</span></b>
				   </button>
				   <span class="input-group-addon" style="visibility:hidden;">
					  <input name="filesToUpload[]" id="createNewOrder_fileBtn" type="file" multiple="true"/>
				   </span>
			    </div>
		  
			  </div>
		   </div>
		 </div>
		</div>
		
	  </div>
	</div>
	<div id="createNewOrder_content_userAvailability" class="list-group hide-block">
	  <div class="list-group-item" style="border-radius:0px;">
	    	   
	   
	   <div align="center" class="form-group">
	    <h4><b>Your Available Timings to Contact</h4><hr/>
	   </div>
	   
	   <div class="form-group">
	     <!-- Sunday ::: Start -->
	       <div class="container-fluid mtop15p">
		    <div class="row">
			  <div class="col-xs-12"><label>Sunday <span class="red">*</span></label></div>
			</div>
			<div class="row">
			  <div class="col-xs-6">
			    <select id="createNewOrder_selOpt_sundayFrom" class="form-control">
				  <option value="">Select From</option>
				</select>
			  </div> 
		      <div class="col-xs-6">
			    <select id="createNewOrder_selOpt_sundayTo" class="form-control">
				  <option value="">Select To</option>
				</select>
			  </div>
		    </div>
		   </div>
		 <!-- Sunday ::: End -->
	     <!-- Monday ::: Start -->
	     <div class="container-fluid mtop15p">
		    <div class="row">
			  <div class="col-xs-12"><label>Monday <span class="red">*</span></label></div>
			</div>
			<div class="row">
			  <div class="col-xs-6">
			    <select id="createNewOrder_selOpt_mondayFrom" class="form-control">
				  <option value="">Select From</option>
				</select>
			  </div>
		      <div class="col-xs-6">
			    <select id="createNewOrder_selOpt_mondayTo" class="form-control">
				  <option value="">Select To</option>
				</select>
			  </div>
		    </div>
		  </div>
		  <!-- Monday ::: End -->
		  <!-- Tuesday ::: Start -->
	      <div class="container-fluid mtop15p">
		    <div class="row">
			  <div class="col-xs-12"><label>Tuesday <span class="red">*</span></label></div>
			</div>
			<div class="row">
			  <div class="col-xs-6">
			    <select id="createNewOrder_selOpt_tuesdayFrom" class="form-control">
				  <option value="">Select From</option>
				</select>
			  </div> 
		      <div class="col-xs-6">
			    <select id="createNewOrder_selOpt_tuesdayTo" class="form-control">
				  <option value="">Select To</option>
				</select>
			  </div>
		    </div>
		   </div>
		   <!-- Tuesday ::: End -->
		   <!-- Wednesday ::: Start -->
	       <div class="container-fluid mtop15p">
		    <div class="row">
			  <div class="col-xs-12"><label>Wednesday <span class="red">*</span></label></div>
			</div> 
			<div class="row">
			  <div class="col-xs-6">
			    <select id="createNewOrder_selOpt_wednesdayFrom" class="form-control">
				  <option value="">Select From</option>
				</select>
			  </div>
		      <div class="col-xs-6">
			    <select id="createNewOrder_selOpt_wednesdayTo" class="form-control">
				  <option value="">Select To</option>
				</select>
			  </div>
		    </div>
		   </div>
		   <!-- Wednesday ::: End -->
		   <!-- Thursday ::: Start -->
	       <div class="container-fluid mtop15p">
		    <div class="row">
			  <div class="col-xs-12"><label>Thursday <span class="red">*</span></label></div>
			</div>
			<div class="row">
			  <div class="col-xs-6">
			    <select id="createNewOrder_selOpt_thursdayFrom" class="form-control">
				  <option value="">Select From</option>
				</select>
			  </div>
		      <div class="col-xs-6">
			    <select id="createNewOrder_selOpt_thursdayTo" class="form-control">
				  <option value="">Select To</option>
				</select>
			  </div>
		    </div>
		   </div>
		   <!-- Thursday ::: End -->
		   <!-- Friday ::: Start -->
	       <div class="container-fluid mtop15p">
		    <div class="row">
			  <div class="col-xs-12"><label>Friday <span class="red">*</span></label></div>
			</div>
			<div class="row">
			  <div class="col-xs-6">
			    <select id="createNewOrder_selOpt_fridayFrom" class="form-control">
				  <option value="">Select From</option>
				</select>
			  </div>
		      <div class="col-xs-6">
			    <select id="createNewOrder_selOpt_fridayTo" class="form-control">
				  <option value="">Select To</option>
				</select>
			  </div>
		    </div>
		   </div>
		   <!-- Friday ::: End -->
		   <!-- Saturday ::: Start -->
	       <div class="container-fluid mtop15p">
		    <div class="row">
			  <div class="col-xs-12"><label>Saturday <span class="red">*</span></label></div>
			</div>
			<div class="row">
			  <div class="col-xs-6">
			    <select id="createNewOrder_selOpt_saturdayFrom" class="form-control">
				  <option value="">Select From</option>
				</select>
			  </div>
		      <div class="col-xs-6">
			    <select id="createNewOrder_selOpt_saturdayTo" class="form-control">
				  <option value="">Select To</option>
				</select>
			  </div>
		    </div>
		   </div>
		   <!-- Saturday ::: End -->
	   </div>
	   
	   <div class="form-group">
	     <button class="btn btn-primary form-control"  style="margin-top:10px;"><b>Place your Order</b></button>
	   </div>
	
	  </div>
	</div>
	<!-- -->
  </div>
</div>
       </div>
	   <div class="col-lg-4">
	     <div><h4><b>How it Works?</b></h4><hr/></div>
		 <div>
		    <!-- -->
		 <div class="list-group">
		   <!-- 1. YOU PLACE AN ORDER ::: START -->
		   <div class="list-group-item" data-toggle="collapse" data-target="#createNewOrder_howItWorks_placeAnOrder">
		    <b>1. YOU PLACE AN ORDER</b> 
		    <i class="fa fa-angle-down pull-right"></i>
		   </div>
		   <div id="createNewOrder_howItWorks_placeAnOrder" class="collapse">
		     <div class="list-group-item">
		       In <b>Order Form</b>, place your Order by providing topic, topic Description, Other Supporting Documents and 
		       the time you are available.<br/><br/>
		     </div>
		   </div>
		   <!-- 1. YOU PLACE AN ORDER ::: END -->
		   <!-- 2. YOU WILL RECEIVE A PRICE QUOTATION ::: START -->
		   <div class="list-group-item" data-toggle="collapse" data-target="#createNewOrder_howItWorks_receivePriceQuotation">
		     <b>2. YOU WILL RECEIVE A PRICE QUOTATION</b> 
		     <i class="fa fa-angle-down pull-right"></i>
		   </div>
		   <div id="createNewOrder_howItWorks_receivePriceQuotation" class="collapse">
		    <div class="list-group-item">
			  A Price Quotation was sent to you by our Representative after verifying your topic, topic Description and 
			  Other Supporting Documents. From this Stage, the Representative will be available to you with 24/7 
			  Assistance.
		    </div>
		   </div>
		   <!-- 2. YOU WILL RECEIVE A PRICE QUOTATION ::: END -->
		   <!-- 3. PRICE FIXED AND AMOUNT PAID ::: START -->
		   <div class="list-group-item" data-toggle="collapse" data-target="#createNewOrder_howItWorks_fixPriceAmountPaid">
		     <b>3. FIX PRICE AND AMOUNT PAID</b> 
		     <i class="fa fa-angle-down pull-right"></i>
		   </div>
		   <div id="createNewOrder_howItWorks_fixPriceAmountPaid" class="collapse">
		    <div class="list-group-item">
			  
		    </div>
		   </div>
		   <!-- 3. PRICE FIXED AND AMOUNT PAID ::: END -->
		   <!-- 4.  ::: START -->
		   <!-- 4.  ::: END -->
		 </div>
		 <!-- -->
		 
		 </div>
	   </div>
    </div>
 </div>
</body>

</html>

	  