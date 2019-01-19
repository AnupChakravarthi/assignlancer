<script type="text/javascript">
function tabMenu_updatelivesupportAccount(id){
 var arry_Id = ["updatelivesupportAccount-tabMenu-generalInfo","updatelivesupportAccount-tabMenu-updatePwd"];
 var arry_Id_content = ["updatelivesupportAccount-div-generalInfo","updatelivesupportAccount-div-updatePwd"];
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
</script>
<div id="liveSupportAccount-updateForm-div" class="panel panel-default hide-block">
  <div class="panel-heading">
	<i class="fa fa-users"></i>&nbsp;&nbsp;&nbsp;<b>Update Live Support Accounts</b>
  </div>
  <div class="panel-body">
	<!-- live Support Account - create form ::: Start -->
	<div class="container-fluid">
	  <div class="row">
		<div id="liveSupportAccount-update-warnings" class="col-md-12"></div>
	  </div>
	  <div class="row mtop15p">
	   <div class="col-md-12">
	   
		<ul class="nav nav-tabs">
	      <li id="updatelivesupportAccount-tabMenu-generalInfo" 
		    onclick="javascript:tabMenu_updatelivesupportAccount(this.id);">
			 <a href="#"><b>General Information</b></a>
		  </li>
		  <li id="updatelivesupportAccount-tabMenu-updatePwd" onclick="javascript:tabMenu_updatelivesupportAccount(this.id);">
		     <a href="#"><b>Update Password</b></a>
		  </li>
		</ul>
		
		<div id="updatelivesupportAccount-div-generalInfo" class="list-group hide-block">
		<div class="list-group-item">
		
		<div class="container-fluid">
		<div class="row">
		<div class="col-md-6">
		
		  <div class="form-group">
			<label>Account Type</label>
			<input id="liveSupportAccount-update-accountType" type="text" class="form-control" value="CUSTOMER_LIVESUPPORT"
				placeholder="Enter your Account Type" disabled/>
		  </div>

		  <div class="form-group">
			<label>Name</label>
			<input id="liveSupportAccount-update-name" type="text" class="form-control" placeholder="Enter your Name"/>
		  </div>
							
		  <div class="form-group">
			<label>Email</label>
			<input id="liveSupportAccount-update-email" type="text" class="form-control" placeholder="Enter your Email"/>
		  </div>
							
		</div>
		<div class="col-md-6">
						    
		  <div class="form-group">
			<label>Country</label>
			<select id="liveSupportAccount-update-country" class="form-control">
				<option value="">Select your Country</option>
				<option value="India">India</option>
				<option value="Australia">Australia</option>
			</select>
		  </div>
							
		  <div class="form-group">
			<label>Timezone</label>
			<select id="liveSupportAccount-update-timezone" class="form-control" 
				onchange="javascript:view_liveSupportAccount_shiftTimings();">
				<option value="">Select your Timezone</option>
				<option value="Asia/Kolkata">Asia/Kolkata</option>
				<option value="Australia/ACT">Australia/ACT</option>
				<option value="Australia/Adelaide">Australia/Adelaide</option>
				<option value="Australia/Brisbane">Australia/Brisbane</option>
				<option value="Australia/Broken_Hill">Australia/Broken_Hill</option>
				<option value="Australia/Canberra">Australia/Canberra</option>
				<option value="Australia/Currie">Australia/Currie</option>
				<option value="Australia/Darwin">Australia/Darwin</option>
				<option value="Australia/Eucla">Australia/Eucla</option>
				<option value="Australia/Hobart">Australia/Hobart</option>
				<option value="Australia/LHI">Australia/LHI</option>
				<option value="Australia/Lindeman">Australia/Lindeman</option>
				<option value="Australia/Lord_Howe">Australia/Lord_Howe</option>
				<option value="Australia/Melbourne">Australia/Melbourne</option>
				<option value="Australia/North">Australia/North</option>
				<option value="Australia/NSW">Australia/NSW</option>
				<option value="Australia/Perth">Australia/Perth</option>
				<option value="Australia/Queensland">Australia/Queensland</option>
				<option value="Australia/South">Australia/South</option>
				<option value="Australia/Sydney">Australia/Sydney</option>
				<option value="Australia/Tasmania">Australia/Tasmania</option>
				<option value="Australia/Victoria">Australia/Victoria</option>
				<option value="Australia/West">Australia/West</option>
				<option value="Australia/Yancowinna">Australia/Yancowinna</option>
			</select>
		  </div>
							
		  <div class="form-group">
			<label>Shift Timings</label>
			<select id="liveSupportAccount-update-shiftTimings" class="form-control" 
				onchange="javascript:view_liveSupportAccount_shiftTimings();">
				<option value="">Select Shift Timings</option>
				<option value="1">Early Morning</option>
				<option value="2">Morning</option>
				<option value="3">Evening</option>
			</select>
		  </div>
							
		  <div align="right" class="form-group">
			<div id="liveSupportAccount-update-24X7Support"></div>
		  </div>
							
		</div>
	    </div>
		
		<div class="row">
		 <div class="col-md-12">
			<div align="center" class="form-group">
			   <div class="btn-group">
				  <button class="btn btn-success"><b>Update Live Support Account</b></button>
				  <button class="btn btn-danger"><b>Reset</b></button>
			   </div>
			</div>
		  </div>
	    </div>
		
		
		</div>
		
		</div>
		</div>
	   
	    <div id="updatelivesupportAccount-div-updatePwd" class="list-group hide-block">
		  <div class="list-group-item">
		  
		    <div class="container-fluid">
		     <div class="row">
		      <div class="col-md-6">   
			    
				<div class="form-group">
			      <label>Account Password</label>
			      <input id="liveSupportAccount-update-accountPwd" type="password" class="form-control" 
			       placeholder="Enter your Account Password"/>
		        </div>
							
		        <div class="form-group">
			      <label>Confirm Account Password</label>
			      <input id="liveSupportAccount-update-confirmAccountPwd" type="password" class="form-control" 
			       placeholder="Enter your Confirm Password"/>
		        </div>
		  
			  </div>
			 </div>
			 
			 <div class="row">
		      <div class="col-xs-12">
			    <div align="center" class="form-group">
			     <div class="btn-group">
				  <button class="btn btn-success"><b>Update Live Support Account</b></button>
				  <button class="btn btn-danger"><b>Reset</b></button>
			     </div>
			    </div>
		      </div>
	         </div>
			 
			</div>
			
		  </div>
		</div>
		
	   </div>
	  </div>
	  
	</div>
	<!-- live Support Account - create form ::: End -->
  </div>
</div>