<script type="text/javascript">
function sel_tab_customerAuthenticationSupport(id){
  var arry_Id=["customerAuthenticationSupport_tab_newRegister","customerAuthenticationSupport_tab_updatePassword"];
  var arry_content=["registerACustomer_content_newRegister","registerACustomer_content_updatePassword"];
  for(var index=0;index<arry_Id.length;index++){
    if(arry_Id[index]===id){ 
	  if(!$('#'+arry_Id[index]).hasClass('active')){ $('#'+arry_Id[index]).addClass('active'); }
	  if($('#'+arry_content[index]).hasClass('hide-block')){ $('#'+arry_content[index]).removeClass('hide-block'); }
	}
	else {
	  if($('#'+arry_Id[index]).hasClass('active')){ $('#'+arry_Id[index]).removeClass('active'); }
	  if(!$('#'+arry_content[index]).hasClass('hide-block')){ $('#'+arry_content[index]).addClass('hide-block'); }
	}
  }
}
</script>
 <div class="list-group">
    <div class="list-group-item">
	  <h4><b>Customer Authentication Support</b></h4>
	</div>
    <div class="list-group-item">
		<div>
		 <ul class="nav nav-tabs">
		   <li id="customerAuthenticationSupport_tab_newRegister" onclick="javascript:sel_tab_customerAuthenticationSupport(this.id);">
		     <a href="#"><b>New Register</b></a>
		   </li>
		   <li id="customerAuthenticationSupport_tab_updatePassword" onclick="javascript:sel_tab_customerAuthenticationSupport(this.id);">
		     <a href="#"><b>Update Password</b></a>
		   </li>
		 </ul>
		</div>
	
		<div id="registerACustomer_content_newRegister" class="hide-block">
		  <div class="list-group">
		    <div class="list-group-item">
			<div class="form-group">
			  <label>Account Name</label>	
			  <input type="text" class="form-control" placeholder="Enter Account Name"/>
			</div>
			<div class="form-group">
			   <label>Account Email</label>	
			   <input type="text" class="form-control" placeholder="Enter Account Email"/>
			</div>
			<div class="form-group">
			   <label>Account Password</label>	
			   <input type="password" class="form-control" placeholder="Enter Account Password"/>
			</div>
			<div class="form-group">
			   <label>Account Confirm Password</label>	
			   <input type="password" class="form-control" placeholder="Enter Account Confirm Password"/>
			</div>
			<div class="form-group">
			   <label>Country</label>	
			   <select class="form-control">
				 <option value="">Select your Country</option>
			   </select>
			</div>
			<div align="center" class="form-group">
			   <div class="btn-group">
				 <button class="btn btn-success"><b>Register Customer</b></button>
				 <button class="btn btn-danger"><b>Reset</b></button>
			   </div>
			</div>
		    </div>
		  </div>
		</div>
		
		<div id="registerACustomer_content_updatePassword" class="hide-block">
		  <div class="list-group">
		    <div class="list-group-item">
			  <div class="form-group">
			  
			  </div>
			  <div class="form-group">
			    <label>Account Email</label>
				<div class="input-group">
			      <input type="text" class="form-control" placeholder="Enter Account Email"/>
				  <span class="input-group-addon"><b>Check</b></span>
				</div>
			  </div>
			  <div class="form-group">
			    <label>Account Password</label>
			      <input type="password" class="form-control" placeholder="Enter Account Password"/>
			  </div>
			  <div class="form-group">
			    <label>Account Confirm Password</label>
			      <input type="password" class="form-control" placeholder="Enter Account Confirm Password"/>
			  </div>
			  <div align="center" class="form-group">
			    <div class="btn-group">
				  <button class="btn btn-success"><b>Update Password</b></button>
				  <button class="btn btn-danger"><b>Reset</b></button>
				</div>
			  </div>
			</div>
		  </div>
		</div>
		
	  </div>
 </div>
        