<div class="panel panel-default">
  <div class="panel-heading"><b>Update Existing Account</b></div>
  <div class="panel-body">
    <!-- Search Form : Start -->
    <div class="container-fluid">
	  <div class="row">
	    <div class="col-lg-12">
		  
		  <div class="input-group">
		    <input type="text" class="form-control" placeholder="Enter Email Address/ Customer Id"/>
			<span class="input-group-addon"><b>Get Account</b></span>
		  </div>
		</div>
	  </div>
	</div>
	<!-- Search Form : End -->
	<!-- Update Existing Account Form : Start -->	
    <div class="container-fluid mtop15p">
<script type="text/javascript">
function tab_customerUpdateAccountForm(id){
 var arry_Id=["custupdateAccount-tab-details","custupdateAccount-tab-updatePwd"];
 var arry_Id_content=["custupdateAccount-content-details","custupdateAccount-content-updatePwd"];
 for(var index=0;index<arry_Id.length;index++){
   if(arry_Id[index]===id){
     if(!$('#'+arry_Id[index]).hasClass('active')){ $('#'+arry_Id[index]).addClass('active'); }
     if($('#'+arry_Id_content[index]).hasClass('hide-block')){ $('#'+arry_Id_content[index]).removeClass('hide-block'); } 
   } 
   else { 
    if($('#'+arry_Id[index]).hasClass('active')){ $('#'+arry_Id[index]).removeClass('active'); }
     if(!$('#'+arry_Id_content[index]).hasClass('hide-block')){ $('#'+arry_Id_content[index]).addClass('hide-block'); } 
   }
 }
}
</script>
      <div class="row">
	    <div class="col-lg-12"><hr/>
          <table style="font-size:12px;">
		    <tr>
			  <td><b>Customer Account Id</b></td><td><b>&nbsp;&nbsp; : &nbsp;&nbsp;</b></td><td>123456</td>
			</tr>
		  </table>
		</div>
	  </div>
	  <div class="row mtop15p">
	    <div class="col-lg-12">
		  <!-- Tab : Start -->
		  <ul class="nav nav-tabs">
			<li id="custupdateAccount-tab-details" onclick="javascript:tab_customerUpdateAccountForm(this.id);">
			   <a href="#"><b>Details</b></a>
			</li>
			<li id="custupdateAccount-tab-updatePwd" onclick="javascript:tab_customerUpdateAccountForm(this.id);">
			   <a href="#"><b>Update Password</b></a>
			</li>
		  </ul>
		  <!-- Tab : End -->
		</div>
	  </div>
	  
	  <div class="row">
	    <div class="col-lg-12">
		  <!-- Details Tab Content : Start -->
		  <div id="custupdateAccount-content-details" class="list-group hide-block">
		    <div class="list-group-item">
			    <!-- Details Form : Start -->
		        <div class="container-fluid">
				  
				  <div class="row">
					<div class="col-lg-12">
					  <!-- Name -->
					  <div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control" placeholder="Enter Account Name"/>
					  </div>
					</div>
				  </div>
				  
				  <div class="row">
					 <div class="col-lg-12">
					    <!-- Email -->
						<div class="form-group">
						   <label>Email</label>
						   <input type="text" class="form-control" placeholder="Enter Email Address"/>
						</div>
					 </div>
				  </div>
				
				  <div class="row">
					 <div class="col-lg-6">
					   <!-- Gender -->
					   <div class="form-group">
						  <label>Gender</label>
						  <select class="form-control">
						    <option value="">Select Gender</option>
							<option value="MALE">Male</option>
							<option value="FEMALE">Female</option>
						  </select>
					  </div>
					</div>
						
					<div class="col-lg-6">
					  <!-- Country -->
					  <div class="form-group">
						<label>Country</label>
						<select class="form-control">
						  <option value="">Select your Country</option>
						</select>
					  </div>
					</div>
				  </div>
					  
				  <div class="row">
					<!-- Timezone -->
					<div class="col-lg-6">
					  <div class="form-group">
						<label>Default Timezone</label>
						<select class="form-control">
						   <option value="">Select your Timezone</option>
						</select>
					  </div>
					</div>
						
					<!-- Currency -->
					<div class="col-lg-6">
					  <div class="form-group">
						<label>Default Currency</label>
						<select class="form-control">
						  <option value="">Select your Currency</option>
						</select>
					  </div>
					</div>
				  </div>
	
				  <div class="row">
				       <div align="center" class="col-lg-12">
					      <div class="btn-group">
						    <button class="btn btn-success"><b>Update Account Details</b></button>
						    <button class="btn btn-danger"><b>Reset</b></button>
					      </div>
					   </div>
				  </div>
				  
				</div>
				<!-- Details Form : End -->
		    </div>
		  </div>
		  <!-- Details Tab Content : End -->
		  <!-- Update Password Tab Content : Start -->
		  <div id="custupdateAccount-content-updatePwd" class="list-group hide-block">
		    <div class="list-group-item">
			    <!-- Update Password Form : Start -->
		        <div class="container-fluid">
				  
				   <div class="row">
					  <!-- Password -->
					  <div class="col-lg-6">
						<div class="form-group">
						  <label>Password</label>
			 			  <input type="password" class="form-control" placeholder="Enter Password"/>
					    </div>
					  </div>
						
					  <!-- Confirm Password -->
					  <div class="col-lg-6">
					    <div class="form-group">
						  <label>Confirm Password</label>
						  <input type="password" class="form-control" placeholder="Enter Confirm Password"/>
					    </div>
					  </div>
				   </div>
		
				   <div class="row">
				      <div align="center" class="col-lg-12">
					    <div class="btn-group">
						  <button class="btn btn-success"><b>Update Account Password</b></button>
						  <button class="btn btn-danger"><b>Reset</b></button>
					    </div>
					  </div>
				   </div>
				   
				</div>
				<!-- Update Password Form : End -->
		    </div>
		  </div>
		  <!-- Update Password Tab Content : End -->
		</div>
	  </div>
	  
	</div>
	 
	  
					  
	 
					  
	 
	</div>
    <!-- Update Existing Account Form : End -->			
  </div>
</div>