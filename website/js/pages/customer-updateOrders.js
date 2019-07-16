function createUpdateOrder_typeOfWork(){
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
function customer_updateOrder_getOrderForm(){
 customer_display_getOrderForm('customer-updateOrder-form-customerInfo');
 var orderId = document.getElementById("customer-updateOrder-orderId").value;
 if(orderId.length>0){
   htmlElementVisiblility('customer-updateOrder-orderId-warnings','hide');
   js_ajax('GET', PROJECT_URL+'backend/php/dac/controller.customers.orders.php',
   { action:'GETORDERINFO_BY_ORDERID', order_Id:orderId }, function(response){ 
    console.log(response); 
    customer_updateOrder_getOrderForm_loadCustomerInfo(response);
   }); 
 } else { div_display_warning('customer-updateOrder-orderId-warnings','W026'); } // W026: Missing Order Id.
 // // 
}

function customer_display_getOrderForm(div_Id){
 var content='<div class="row mtop15p">';
     content+='<div class="col-lg-12">';
	 content+='<hr/><div class="pad3" style="background-color:#eee;">';
	 content+='<h5><b>&nbsp;&nbsp;CUSTOMER INFORMATION</b></h5></div><hr/>';
	 content+='</div>';
	 content+='</div>';
	 content+='<div id="customer_display_customerInformation" class="col-lg-12">';
	 content+='<div align="center" class="mtop15p mbot15p">Loading...</div>';
	 content+='</div>';
	 content+='<div class="row mtop15p">';
     content+='<div class="col-lg-12">';
	 content+='<hr/><div class="pad3" style="background-color:#eee;">';
	 content+='<h5><b>&nbsp;&nbsp;ORDER INFORMATION</b></h5></div><hr/>';
	 content+='</div>';
	 content+='</div>';
	 content+='<div id="customer_display_orderInformation" class="col-lg-12">';
	 content+='<div align="center" class="mtop15p mbot15p">Loading...</div>';
	 content+='</div>';
	 content+='<div class="row mtop15p">';
     content+='<div class="col-lg-12">';
	 content+='<hr/><div class="pad3" style="background-color:#eee;">';
	 content+='<h5><b>&nbsp;&nbsp;ADD SUPPORTING FILES</b></h5></div><hr/>';
	 content+='</div>';
	 content+='</div>';
	 content+='<div id="customer_display_addSupportingFiles" class="col-lg-12">';
	 content+='<div align="center" class="mtop15p mbot15p">Loading...</div>';
	 content+='</div>';
	 content+='<div id="customer_display_addSupportingFilesBtn" class="col-lg-12"></div>';
	 content+='<div class="row mtop15p">';
     content+='<div class="col-lg-12">';
	 content+='<hr/><div class="pad3" style="background-color:#eee;">';
	 content+='<h5><b>&nbsp;&nbsp; MILESTONES</b></h5></div><hr/>';
	 content+='</div>';
	 content+='<div id="customer_display_milestones" class="col-lg-12">';
	 content+='<div align="center" class="mtop15p mbot15p">Loading...</div>';
	 content+='</div>';
	 content+='</div>'; 
  document.getElementById(div_Id).innerHTML=content;
}
function customer_createUpdateOrder_milestonesNumberOption(){
 var addMilestones = document.getElementById("customer-createUpdateOrder-addMilestones").value;
 if(addMilestones==='YES') { htmlElementVisiblility('customer-createUpdateOrder-milestonesNumberOption','show'); }
 else { htmlElementVisiblility('customer-createUpdateOrder-milestonesNumberOption','hide'); }
} 
var CREATEUPDATEORDER_MILESTONENUMBER;
function customer_createUpdateOrder_setMilestones(){
 var mileStoneNumber = document.getElementById("customer-createUpdateOrder-milestoneNumber").value;
 if(CREATEUPDATEORDER_MILESTONENUMBER===undefined){ CREATEUPDATEORDER_MILESTONENUMBER = mileStoneNumber; }
 if(mileStoneNumber>=CREATEUPDATEORDER_MILESTONENUMBER){
   
 }
 
 console.log("milestoneNumber: "+mileStoneNumber);
 	
}
function customer_updateOrder_getOrderForm_loadCustomerInfo(response){
 // htmlElementVisiblility('customer-updateOrder-form','show');
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
 // var milestones = response.milestones;
 var content1='<div class="row mtop15p">';
	 content1+='<div class="col-lg-12">';
	 content1+='<div class="col-lg-4">';
	 content1+='<div class="form-group">';
	 content1+='<label>Account Id</label>';
	 content1+='<div class="list-group">';
	 content1+='<div class="list-group-item" style="border-radius:4px;">';
	 content1+='<span class="font-grey">'+account_Id+'</span>';
	 content1+='</div>';
	 content1+='</div>';
	 content1+='</div>';
	 content1+='</div>';
	 
	 content1+='<div class="col-lg-4">';
	 content1+='<div class="form-group">';
	 content1+='<label>Name</label>';
	 content1+='<div class="list-group">';
	 content1+='<div class="list-group-item" style="border-radius:4px;">';
	 content1+='<span class="font-grey">'+name+'</span>';
	 content1+='</div>';
	 content1+='</div>';
	 content1+='</div>';
     content1+='</div>';
	 
	 content1+='<div class="col-lg-4">';
	 content1+='<div class="form-group">';
	 content1+='<label>Gender</label>';
	 content1+='<div class="list-group">';
	 content1+='<div class="list-group-item" style="border-radius:4px;">';
	 content1+='<span class="font-grey">'+gender+'</span>';
	 content1+='</div>';
	 content1+='</div>';
	 content1+='</div>';
	 content1+='</div>';
	 
	 content1+='<div class="col-lg-4">';
	 content1+='<div class="form-group">';
	 content1+='<label>Email</label>';
	 content1+='<div class="list-group">';
	 content1+='<div class="list-group-item" style="border-radius:4px;">';
	 content1+='<span class="font-grey">'+email_Id+'</span>';
	 content1+='</div>';
	 content1+='</div>';
	 content1+='</div>';
	 content1+='</div>';

	 content1+='<div class="col-lg-4">';
	 content1+='<div class="form-group">';
	 content1+='<label>Country</label>';
	 content1+='<div class="list-group">';
	 content1+='<div class="list-group-item" style="border-radius:4px;">';
	 content1+='<span class="font-grey">'+country+'</span>';
	 content1+='</div>';
	 content1+='</div>';
	 content1+='</div>';
	 content1+='</div>';
	
	 content1+='<div class="col-lg-4">';
	 content1+='<div class="form-group">';
	 content1+='<label>Timezone</label>';
	 content1+='<div class="list-group">';
	 content1+='<div class="list-group-item" style="border-radius:4px;">';
	 content1+='<span class="font-grey">'+tz+'</span>';
	 content1+='</div>';
	 content1+='</div>';
	 content1+='</div>';
	 content1+='</div>';
	
	 content1+='<div class="col-lg-4">';
	 content1+='<div class="form-group">';
	 content1+='<label>Currency</label>';
	 content1+='<div class="list-group">';
	 content1+='<div class="list-group-item" style="border-radius:4px;">';
	 content1+='<span class="font-grey">'+currency+'</span>';
	 content1+='</div>';
	 content1+='</div>';
	 content1+='</div>';
	 content1+='</div>';
	 
	 content1+='</div>';
	 content1+='</div>';
	document.getElementById('customer_display_customerInformation').innerHTML=content1;
 var content2='<div class="row mtop15p">';
	 content2+='<div class="col-lg-6">';
	 content2+='<div class="col-lg-12">';
	 content2+='<div class="form-group">';
	 content2+='<label>Order Id</label>';
	 content2+='<div class="list-group">';
	 content2+='<div class="list-group-item">';
	 content2+='<span class="font-grey">'+order_Id+'</span>';
	 content2+='</div>';
	 content2+='</div>';
	 content2+='</div>';
	 content2+='</div>';
	 content2+='</div>';
	 content2+='</div>';
			
	 content2+='<div class="row">';
     content2+='<div class="col-lg-6">';
				
	 content2+='<div class="col-lg-12">';
	 content2+='<div class="form-group">';
	 content2+='<label>Topic</label>';
	 content2+='<input id="createUpdateOrder-topic" type="text" class="form-control" ';
	 content2+='placeholder="Enter your Topic Title" value="'+topic+'"/>';
	 content2+='</div>';
	 content2+='</div>';
				 
	 content2+='<div class="col-lg-12">';
	 content2+='<div class="form-group">';
	 content2+='<label>Topic Description</label>';
	 content2+='<textarea id="createUpdateOrder-topicDesc" class="form-control" ';
	 content2+='placeholder="Enter Topic Description">'+topic_desc+'</textarea>';
	 content2+='</div>';
	 content2+='</div>';
				 
	 content2+='</div>';
	  
	 content2+='<div class="col-lg-6">';
	 content2+='<div class="col-lg-12">';
	 content2+='<div class="form-group">';
	 content2+='<label>Expected Time to complete</label>';
	 content2+='<div class="container-fluid">';
	 content2+='<div class="row">';
	 content2+='<div class="col-xs-6 pad0">';
	 content2+='<input id="createUpdateOrder-expdate" type="date" class="form-control" value="'+exp_time.split(" ")[0]+'"/>';
	 content2+='</div>';
	 content2+='<div class="col-xs-6 pad0">';
	 content2+='<input id="createUpdateOrder-exptime" type="time" class="form-control" value="'+exp_time.split(" ")[1]+'"/>';
	 content2+='</div>';
	 content2+='</div>';
	 content2+='</div>';
	 content2+='</div>';
	 content2+='</div>';
				 
	 content2+='<div class="col-lg-6">';
	 content2+='<div class="form-group">';
	 content2+='<label>Type of work</label>';
	 content2+='<select id="createUpdateOrder-typeOfWork" class="form-control" ';
	 content2+='onchange="javascript:createUpdateOrder_typeOfWork();">';
	 content2+='<option value="">Select type of work</option>';
	 content2+='<option value="DOCUMENT">Document</option>';
	 content2+='<option value="WEB_DESIGN">Web Design</option>';
	 content2+='<option value="QUIZ">Quiz</option>';
	 content2+='<option value="OTHER">Other</option>';
	 content2+='</select>';
	 content2+='</div>';
	 content2+='</div>';
		
	 content2+='<div class="col-lg-6">';
	 content2+='<div id="createUpdateOrder-div-wordcount" class="form-group hide-block">';
	 content2+='<label>Word Count</label>';
	 content2+='<input id="createUpdateOrder-wordcount" type="text" class="form-control" ';
	 content2+='placeholder="Enter your word count" value="'+wordCount+'"/>';
	 content2+='</div>';

	 content2+='<div id="createUpdateOrder-div-pleaseSpecify" class="form-group hide-block">';
	 content2+='<label>Please Specify</label>';
	 content2+='<input id="createUpdateOrder-pleaseSpecify" type="text" class="form-control" ';
	 content2+='placeholder="Enter your choice" value="'+others+'"/>';
	 content2+='</div>';
	 content2+='</div>';
	
	 content2+='</div>';
	 content2+='</div>';
			
  document.getElementById('customer_display_orderInformation').innerHTML=content2;	
  customer_updateOrder_getOrderForm_enableOrderInfo();
  customer_updateOrder_getOrderForm_orderInfoWorkType(workType);
  customer_createUpdateOrder_listOfSupportingFiles();
  customer_createUpdateOrder_form_suppFiles_fileUploadForm();
  } 
 else { div_display_warning('customer-updateOrder-orderId-warnings','W025'); }
 
 if(response.milestones.length>0){
    var content3='<div class="col-lg-12">s';
   for(var index=0;index<response.milestones.length;index++){
     var milestone_Id = response.milestones[index].milestone_Id;
     var order_Id = response.milestones[index].order_Id;
     var targetDate = response.milestones[index].targetDate;
     var targetTask = response.milestones[index].targetTask;
	 content+='<div class="col-lg-4">';
	 content+='<div class="list-group">';
	 content+='<div class="list-group-item">';
	 content+='<div class="container-fluid">';
	 content+='<div class="row">';
	 content+='<div align="center" class="col-lg-12">';
	 content+='<h5><b>MILESTONE#'+(index+1)+'</b></h5><hr/>';
	 content+='</div>';
	 content+='</div>';
	 content+='<div class="row">';
	 content+='<div class="form-group">';
	 content+='<label>Target Date</label>';
	 content+='<input id="customer-createNewOrder-milestoneDate-'+index+'" type="date" ';
	 content+='class="form-control" value=""/>';
	 content+='</div>';
	 content+='<div class="form-group">';
	 content+='<label>Target Task</label>';
	 content+='<textarea id="customer-createNewOrder-milestoneTargetTask-'+index+'" class="form-control" ';
	 content+='placeholder="Enter your Target Task" value="'+targetTask+'" disabled></textarea>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>'; 
	 content+='</div>';
   } 
	 content3+='</div>';
 document.getElementById("customer_display_milestones").innerHTML=content3;	
 }
 /*
   console.log("mileStones: "+response.milestones.length);
   document.getElementById("customer-createUpdateOrder-addMilestones").value='YES';
   if($('#customer-createUpdateOrder-milestonesNumberOption').hasClass('hide-block')){
     $('#customer-createUpdateOrder-milestonesNumberOption').removeClass('hide-block');
   }
   document.getElementById("customer-createUpdateOrder-milestoneNumber").value=response.milestones.length;
   customer_createUpdateOrder_setMilestones();
  
 } else {
    document.getElementById("customer-createUpdateOrder-addMilestones").value='NO';
	if(!$('#customer-createUpdateOrder-milestonesNumberOption').hasClass('hide-block')){
     $('#customer-createUpdateOrder-milestonesNumberOption').addClass('hide-block');
   }
 } */
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
 document.getElementById("customer_display_addSupportingFilesBtn").innerHTML=content; 
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
 var filesUrl=PROJECT_URL+'uploads/data/'+order_Id+'/';
 for(var index=0;index<response.length;index++){
   if(response[index].trim().length>0){
   var fileName = response[index];
   content+='<div align="center" class="col-lg-2 mtop15p">';
   content+='<a href="'+filesUrl+fileName+'" style="text-decoration:none;color:#000;">';
   content+='<div><i class="fa fa-5x fa-file-archive-o" aria-hidden="true"></i></div>';
   content+='<div class="mtop15p">'+fileName+'</div>';
   content+='</a>';
   content+='<div class="mtop15p">';
   content+='<button class="btn btn-default hide-block" id="customer-createUpdateOrder-supportFiles-remove-'+fileName+'" ';
   content+='onclick="javascript:customer_createUpdateOrder_deleteSupportFiles(\''+fileName+'\');">';
   content+='Remove&nbsp;<i class="fa fa-close"></i></button>';
   content+='</div>';
   content+='</div>';
   }
 }
 document.getElementById("customer_display_addSupportingFiles").innerHTML=content;
});			 
}

