   <!-- Account Id ::: Start -->
	    <div class="form-group">
	      <h4 class="page-header"><b>My Profile</b></h4>
	    </div>
		<div id="myProfileForm_warning" class="form-group">
	    </div>
		<!-- Account Id ::: End -->
		
	    <!-- Account Id ::: Start -->
	    <div class="form-group">
	      <label>Account Id</label>
		  <input type="text" id="myProfileForm_accountId" class="form-control" placeholder="Enter your Account Id" 
		   value="<?php echo $_SESSION["ADMINISTRATOR_ACCOUNT_ID"]; ?>" disabled/>
	    </div>
		<!-- Account Id ::: End -->
        <!-- Account Type ::: Start -->
	    <div class="form-group">
	      <label>Account Type</label> 
		  <input type="text" id="myProfileForm_accountType" class="form-control" placeholder="Enter your Account Id" 
		   value="Administrator" disabled/>
	    </div>
		<!-- Account Type ::: End -->
		<!-- Created on ::: Start -->
	    <div class="form-group">
	      <label>Created on <span class="font-red">*</span></label>
		  <input type="text" id="myProfileForm_createdon" class="form-control" placeholder="Enter your Account Created on" 
		   value="<?php echo $_SESSION["ADMINISTRATOR_CREATEDON"]; ?>" disabled/>
	    </div>
		<!-- Created on ::: End -->
		<!-- Account Name ::: Start -->
	    <div class="form-group">
	      <label>Account Name <span class="font-red">*</span></label>
		  <input type="text" id="myProfileForm_accountName" class="form-control" placeholder="Enter your Account Name" 
		   value="<?php echo $_SESSION["ADMINISTRATOR_NAME"]; ?>" disabled/>
	    </div>
		<!-- Account Name ::: End -->
		
		<!-- Account Email ::: Start -->
	    <div class="form-group">
	      <label>Account Email <span class="font-red">*</span></label>
		  <input type="text" id="myProfileForm_accountEmail" class="form-control" placeholder="Enter your Account Email" 
		   value="<?php echo $_SESSION["ADMINISTRATOR_EMAIL"]; ?>" disabled/>
	    </div>
		<!-- Account Email ::: End -->
		
		<!-- Country ::: Start -->
	    <div class="form-group">
	      <label>Country <span class="font-red">*</span></label>
		  <select id="myProfileForm_country" class="form-control" disabled></select>
	    </div>
		<!-- Country ::: End -->
		<!-- Currency ::: Start -->
	    <div class="form-group">
	      <label>Currency <span class="font-red">*</span></label>
		  <select id="myProfileForm_currency" class="form-control" disabled></select>
	    </div>
		<!-- Currency ::: End -->
		
		<!-- Timezone ::: Start -->
	    <div class="form-group">
	      <label>Timezone <span class="font-red">*</span></label>
		  <select id="myProfileForm_timezone" class="form-control" disabled></select>
	    </div>
		<!-- Timezone ::: End -->
		
		<div align="center" class="form-group">
		  <div class="btn-group">
		    <button id="myProfileForm_saveProfile" class="btn btn-success hide-block" 
			onclick="javascript:save_myprofileform();"><b>Save Profile</b></button>
	        <button id="myProfileForm_editProfile" class="btn btn-success hide-block" 
			onclick="javascript:edit_myprofileform();"><b>Edit Profile</b></button>
			<button id="myProfileForm_reset" class="btn btn-danger hide-block" 
			onclick="javascript:reset_myprofileform();"><b>Reset</b></button>
		  </div>
	    </div> 
	  