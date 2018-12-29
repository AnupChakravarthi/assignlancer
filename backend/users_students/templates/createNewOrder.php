<script type="text/javascript">
function createNewOrder_addDoc(){
 document.getElementById("createNewOrder_fileBtn").click();
}
function sel_tab_createNewOrder(id){
 var arry_tab=["createNewOrder_tab_howItWorks","createNewOrder_tab_orderForm"];
 var arry_content=["createNewOrder_content_howItWorks","createNewOrder_content_orderForm"];
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
</script>
<div class="panel panel-default"  style="margin-top:15px;">
 <div class="panel-heading">
	<i class="fa fa-table fa-fw"></i> <b>Create New Order</b>
 </div>
 <div class="panel-body">
    <div>
	  <ul class="nav nav-tabs">
		<li id="createNewOrder_tab_howItWorks" onclick="javascript:sel_tab_createNewOrder(this.id);" class="active"><a href="#"><b>How It Works?</b></a></li>
		<li id="createNewOrder_tab_orderForm"><a href="#"><b>Order Form</b></a></li>
	  </ul>
    </div>
	
	<div id="createNewOrder_content_howItWorks" class="list-group hide-block">
	  <div class="list-group-item" style="border-radius:0px;">
	  
	    <!-- -->
		<div class="container-fluid" style="padding:0px;">
		<div class="row">
		<div class="col-xs-12">
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
		 <div>
		  <button class="btn btn-primary pull-right" 
		  onclick="javascript:sel_tab_createNewOrder('createNewOrder_tab_orderForm');">
		  <b>I Agree</b></button>
		 </div>
		</div>
		</div>
		</div>
		<!-- -->
	  </div>
	</div>
	
	<div id="createNewOrder_content_orderForm" class="list-group hide-block">
	<div class="list-group-item" style="border-radius:0px;">
       <!-- -->
	   <div class="form-group">
	     <label>Topic <span class="red">*</span></label>
	     <input type="text" class="form-control" placeholder="Enter Topic Name"/>
	   </div>
		
	   <div class="form-group">
	     <label>Topic Description <span class="red">*</span></label>
	     <textarea class="form-control" placeholder="Enter Topic Description"></textarea>
	   </div>
	
	   <div class="form-group">

         <div class="input-group">
		   <button class="btn btn-default" onclick="javascript:createNewOrder_addDoc();">
		     <b>Add Supporting Documents <span class="red">*</span></b>
		   </button>
		   <span class="input-group-addon" style="visibility:hidden;">
		     <input name="filesToUpload[]" id="createNewOrder_fileBtn" type="file" multiple="true"/>
		   </span>
	     </div>
		  
	   </div>
		
	   <div class="form-group">
		  <label>Expected Time to Complete <span class="red">*</span></label>
		  <div class="container-fluid">
		    <div class="row">
		      <div class="col-xs-6"><input type="date" class="form-control"/></div>
		      <div class="col-xs-6"><input type="time" class="form-control"/></div>
		    </div>
		  </div>
	   </div>
	   
	   <div align="center" class="form-group">
	    <hr/><label>YOUR AVAILABLE TIMINGS TO CONTACT</label><hr/>
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
	  
	  