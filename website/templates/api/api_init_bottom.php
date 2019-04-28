<style>
.curpoint { cursor:pointer; }
</style>
<script type="text/javascript">
function signIn_administrator(){
var email = document.getElementById("signin_administrator_email").value;
 var pwd = document.getElementById("signin_administrator_pwd").value;
 if(email.length>0){
 if(pwd.length>0){
  js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.administrator.authentication.php',
  { action:'ADMINISTRATOR_LOGIN', email:email, acc_pwd:pwd },function(response){
    console.log(response);
	if(response==='ADMINISTRATOR_UNAUTHENTICATED'){
	   div_display_warning('signin_administrator_warnings','W008');
	} else {
       window.location.href=PROJECT_URL+'app/admin/dashboard';
	}
  });
 } else { div_display_warning('signin_administrator_warnings','W003'); }
 } else { div_display_warning('signin_administrator_warnings','W002'); } 
}
function signIn_livesupport(){
 var username = document.getElementById("signin_livesupport_username").value;
 var pwd = document.getElementById("signin_livesupport_pwd").value;
 if(username.length>0){
 if(pwd.length>0){
  js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.livesupport.authentication.php',
  { action:'LIVESUPPORT_LOGIN', userName:username, acc_pwd:pwd },function(response){
    console.log(response);
	if(response==='CUSTOMER_AUTHENTICATED'){
	   window.location.href=PROJECT_URL+'app/livesupport/dashboard';
	} else {
       div_display_warning('signin_livesupport_warnings','W027');
	}
  });
 } else { div_display_warning('signin_livesupport_warnings','W003'); }
 } else { div_display_warning('signin_livesupport_warnings','W028'); } 
}
</script>
<!-- liveSupportLoginModal ::: Start -->
<div id="liveSupportLoginModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header" style="background-color:#ff9800;color:#fff;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h5 align="center" class="modal-title"><b>Live Support login</b></h5>
      </div>
      <div class="modal-body">
	    <div id="signin_livesupport_warnings" class="form-group">
		  
		</div>
        <div class="form-group">
		  <label>Username</label>
		  <input id="signin_livesupport_username" type="text" class="form-control" placeholder="Enter your Username">
		</div>
		<div class="form-group">
		  <label>Password</label>
		  <input id="signin_livesupport_pwd" type="password" class="form-control" placeholder="Enter your Password">
		</div>
		<div class="form-group">
		  <button class="btn btn-primary form-control" onclick="javascript:signIn_livesupport();"><b>Login</b></button>
		</div>
      </div>
    </div>

  </div>
</div>
<!-- liveSupprtLoginModal ::: End -->
<!-- liveSupportLoginModal ::: Start -->
<div id="AdministratorLoginModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header" style="background-color:#ff9800;color:#fff;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h5 align="center" class="modal-title"><b>Administrator login</b></h5>
      </div>
      <div class="modal-body">
	    <div id="signin_administrator_warnings" class="form-group">
		  
		</div>
        <div class="form-group">
		  <label>Email</label>
		  <input id="signin_administrator_email" type="text" class="form-control" placeholder="Enter your Email Address">
		</div>
		<div class="form-group">
		  <label>Password</label>
		  <input id="signin_administrator_pwd" type="password" class="form-control" placeholder="Enter your Password">
		</div>
		<div class="form-group">
		  <button class="btn btn-primary form-control" onclick="javascript:signIn_administrator();"><b>Login</b></button>
		</div>
      </div>
    </div>

  </div>
</div>
<!-- liveSupprtLoginModal ::: End -->
<div class="container-fluid" style="background-color:#000;color:#fff;">
 <div class="col-xs-12 col-md-4" style="margin-top:10px;margin-bottom:10px;">
   <div class="curpoint" data-toggle="modal" data-target="#AdministratorLoginModal">Administrator login</div>
   <div class="curpoint" data-toggle="modal" data-target="#liveSupportLoginModal">Live Support login</div>
 </div>
</div>
<div class="container-fluid">
 <div align="center" class="col-xs-12">
   <img src="images/anups-logo.jpg" style="width:250px;height:auto;margin-top:25px;margin-bottom:25px;"/>
 </div>
</div>