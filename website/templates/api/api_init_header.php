<style>
.navbar { margin-bottom:0px; }
// .navbar-nav>li>a:hover,.navbar-nav>li>a:focus { background-color:#fff; }
// .navbar-custom { border-bottom:2px solid #000; }
.navbar-brand-span { font-family:logoTitle;font-size:28px;color:#000; }
@font-face { font-family:logoTitle;src:url('fonts/Boogaloo-Regular.otf'); }
@font-face { font-family:specialHeading01;src:url('fonts/Boogaloo-Regular.otf'); }
.header-active { color:#000;padding:5px;border:2px solid #000; }
.header-inactive { color:#000; }
.a-white { color:#fff; }
</style>
<script type="text/javascript">
function selectAppInitHeader(id){
 var arry_Id=["appInitHeader-home","appInitHeader-aboutUs","appInitHeader-services","appInitHeader-howItWorks",
 "appInitHeader-worktypes",
"appInitHeader-pricequote","appInitHeader-auth","appInitHeader-contactUs","appInitHeader-livesupport-dashboard",
"appInitHeader-customer-dashboard","appInitHeader-customer-logout","appInitHeader-admin-dashboard",
"appInitHeader-admin-myprofile","appInitHeader-admin-livesupportManage","appInitHeader-admin-payManage",
"appInitHeader-admin-logout"];
 for(var index=0;index<arry_Id.length;index++){
   if(arry_Id[index]===id){
      if(!$('#'+arry_Id[index]).hasClass('active')) { $('#'+arry_Id[index]).addClass('active'); }// header-active
	  if($('#'+arry_Id[index]).hasClass('active')) { $('#'+arry_Id[index]).removeClass('active'); }
	  $('#'+arry_Id[index]).css('background-color','#fff');
	  $('#'+arry_Id[index]+">a").css('color','#f77d0e');
   }
   else { 
      if($('#'+arry_Id[index]).hasClass('active')) { $('#'+arry_Id[index]).addClass('active'); }
	  if(!$('#'+arry_Id[index]).hasClass('active')) { $('#'+arry_Id[index]).removeClass('active'); }
	  $('#'+arry_Id[index]+">a").css('color','#000');
	  $('#'+arry_Id[index]).css('background-color','#fff');
   }
 }
}

function chatBoxInitilaizer(){
  var chatData=JSON.parse(getCookie("LiveSupportChat"));
  var box = null;
  if(box) { box.chatbox("option", "boxManager").toggleBox(); }
  else {
    box = $("#chat_div").chatbox({id:"You", user:{key : "value"},
            title : '<i class="fa fa-comments" aria-hidden="true"></i> Live Chat Support',
            messageSent : function(id, user, msg) {
                $("#chat_div").chatbox("option", "boxManager").addMsg(id, msg);
            }});
  }
  for(var index=0;index<chatData.length;index++){
       $("#chat_div").chatbox("option", "boxManager").addMsg(chatData[index].title, chatData[index].msg);
    }
		//  });
}
</script>
<script type="text/javascript">
$(document).ready(function(){
 js_ajax("GET",PROJECT_URL+'backend/php/dac/controller.livechat.php',{ action: 'ADD_USER_QUEUE' }, function(response){
    console.log(response);
 });
});
</script>
<style>
// .navbar-nav>li>a:hover { background-color:#000; }
//.navbar-nav>li>a:active,.navbar-nav>li>a:focus { background-color:#fff;color:#000; }
body { overflow-y:scroll; }
body::-webkit-scrollbar-track { -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);background-color: #F5F5F5; }         
body::-webkit-scrollbar { width: 6px;background-color: #F5F5F5; }         
body::-webkit-scrollbar-thumb { background-color: #000000; }
</style>
<!-- Login Form ::: Start -->
<!-- Modal ::: Start -->
<script type="text/javascript">
function signup_customer(){
var name = document.getElementById("signup_customer_name").value;
var email = document.getElementById("signup_customer_email").value;
var pwd = document.getElementById("signup_customer_pwd").value;
var confirmpwd = document.getElementById("signup_customer_confirmpwd").value;
var country = document.getElementById("signup_customer_country").value;
if(name.length>0){
 if(validateEmailAddress(email)==='Valid'){
  /* Check Email Address Already registered or not */
  js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.authentication.customers.php',
	{ action:'VALIDATE_EMAIL_REGORNOT', email:email },function(response){
  console.log(response);	
  if(response==='UNREGISTERED'){
    if(pwd.length>0){
     if(confirmpwd.length>0){
      if(pwd===confirmpwd){
	    if(country.length>0){
	      document.getElementById("signup_customer_warnings").innerHTML='';
	      js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.authentication.customers.php',
	      { action:'CREATE_ACCOUNT_BY_CUSTOMER', accountType:'CUSTOMERS', availStatus:'ONLINE', name:name, email:email,
	        acc_pwd:pwd, country: country },function(response){ console.log("response: "+response);
		      div_display_success('signup_customer_warnings','S002');
		    });
		} else { div_display_warning('signup_customer_warnings','W009'); }
      } else { div_display_warning('signup_customer_warnings','W005'); }
     } else  { div_display_warning('signup_customer_warnings','W004'); }
    } else  { div_display_warning('signup_customer_warnings','W003'); }
  } else { div_display_warning('signup_customer_warnings','W006');  }
  });
 } else { div_display_warning('signup_customer_warnings','W002'); }
} else { div_display_warning('signup_customer_warnings','W001'); }
}
</script>
<div id="customerRegisterModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
	  <div class="modal-header" style="background-color:#f77d0e;">
        <button type="button" class="close" data-dismiss="modal" style="color:#fff;">&times;</button>
        <h5 align="center" class="modal-title" style="color:#fff;">SIGNUP / REGISTER</h5>
      </div>
      <div class="modal-body">
	    
        <!-- -->
		<div class="container-fluid">
		  <div class="row">
		    <div class="col-md-12">
			  <div id="signup_customer_warnings" class="form-group">
			  
			  </div>
			  <div class="form-group">
			    <label>Name</label>
				<input id="signup_customer_name" type="text" class="form-control" placeholder="Enter your Name"/>
			  </div>
			  <div class="form-group">
			    <label>Email</label>
				<input id="signup_customer_email" type="text" class="form-control" placeholder="Enter your Email Address"/>
			  </div>
			  <div class="form-group">
			    <label>Password</label>
				<input id="signup_customer_pwd" type="password" class="form-control" placeholder="Enter your Password"/>
			  </div>
			  <div class="form-group">
			    <label>Confirm Password</label>
				<input id="signup_customer_confirmpwd" type="password" class="form-control" placeholder="Re-Enter your Password"/>
			  </div>
			  <div class="form-group">
			    <label>Country</label>
				<select id="signup_customer_country" class="form-control">
				  <option value="">Select your Country</option>
				  <option value="India">India</option>
				  <option value="Australia">Australia</option>
				  <option value="United Kingdom">United Kingdom</option>
				  <option value="United States of America">United States of America</option>
				</select>
			  </div>
			  <div class="form-group">
			    <button class="btn btn-primary form-control" onclick="javascript:signup_customer();"><b>Signup</b></button>
			  </div>
			</div>
		  </div>
		</div>
		<!-- -->
      </div>
   
    </div>

  </div>
</div>
<!-- Modal ::: End -->
<!-- Login Form ::: End -->

<!-- Register Form ::: Start -->
<!-- Modal ::: Start -->
<script type="text/javascript">
function signIn_customer(){
var email = document.getElementById("signin_customer_email").value;
var pwd = document.getElementById("signin_customer_pwd").value;
 if(validateEmailAddress(email)==='Valid'){
   js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.authentication.customers.php',
	{ action:'VALIDATE_EMAIL_REGORNOT', email:email },function(response){
	  console.log(response);	
      if(response==='UNREGISTERED'){ 
	   div_display_warning('signin_customer_warnings','W008');
      }
	  else {
	    // Validate Account with Email and Password
		if(pwd.length>0){
		  $('#signin_customer_warnings_row').css('height','0px');
		  document.getElementById("signin_customer_warnings").innerHTML='';
		  js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.authentication.customers.php',
		  { action:'LOGIN_AUTHENTICATION', email:email, acc_pwd:pwd },function(response){
		    console.log(response);
			window.location.href=PROJECT_URL+'app/students/dashboard';
		  });
		  
		} else { div_display_warning('signin_customer_warnings','W003'); }
	  }
	}); 
 } else { div_display_warning('signin_customer_warnings','W002'); }
}
</script>
<div id="customerLoginModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
	  <div class="modal-header" style="background-color:#f77d0e;">
        <button type="button" class="close" data-dismiss="modal" style="color:#fff;">&times;</button>
        <h5 align="center" class="modal-title" style="color:#fff;">SignIn / Login</h5>
      </div>
      <div class="modal-body">
	    <!-- -->
		<div class="container-fluid">
		  <div id="signin_customer_warnings_row" class="row">
		    <div id="signin_customer_warnings" class="col-md-12">
			  
			</div>
		  </div>  
		  <div class="row">
		    <div class="col-md-12">
			  
			
			  <div class="form-group">
			    <label>Email</label>
				<input id="signin_customer_email" type="text" class="form-control" placeholder="Enter your Email Address"/>
			  </div>
			  <div class="form-group">
			    <label>Password</label>
				<input id="signin_customer_pwd" type="password" class="form-control" placeholder="Enter your Password"/>
			  </div>
			  <div class="form-group">
			    <button class="btn btn-primary form-control" onclick="javascript:signIn_customer();"><b>Login</b></button>
			  </div>
			</div>
		  </div>
		</div>
		<!-- -->
      </div>
   
    </div>

  </div>
</div>
<!-- Modal ::: End -->
<!-- Register Form ::: End -->

<!-- Modal ::: Start -->

<!-- Modal -->
<div id="priceQuotationModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
  
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Price Quotation</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
		
		  <!-- Email -->
		  <div class="row">
		    <div class="col-xs-12">
			  <div class="form-group">
			    <label>Email</label>
				<input type="text" class="form-control" placeholder="Enter your Email"/>
			  </div>
			</div>
		  </div>
		  <!-- Email -->
		  
		  <!-- Subject -->
		  <div class="row">
		    <div class="col-xs-12">
			  <div class="form-group">
			    <label>Subject</label>
				<input type="text" class="form-control" placeholder="Enter your Subject"/>
			  </div>
			</div>
		  </div>
		  <!-- Subject -->
		  
		  <!-- Number Pages -->
		  <div class="row">
		    <div class="col-xs-12 col-md-6">
			 <div class="form-group">
			   <label>Pages</label>
		       <div class="input-group">
				  <span class="input-group-addon">-</span>
				  <input type="text" class="form-control" placeholder="Enter pages" value="1">
				  <span class="input-group-addon">+</span>
				  <span class="input-group-addon">250 Words</span>
			   </div>
		     </div>
			</div>
			
			<div class="col-xs-12 col-md-6">
			 <div class="form-group">
			   <label>Country</label>
			   <select class="form-control">
			     <option value="">Select your Country</option>
				 <option value="India">India</option>
				 <option value="Australia">Australia</option>
			   </select>
			 </div>
			</div>
		  </div>
		  <!-- Subject -->
		  
		  <!-- Number Pages -->
		  <div class="row">
		    <div class="col-xs-12 col-md-6">
			 <div class="form-group">
			   <label>Deadline Date</label>
		       <input type="date" class="form-control"/>
		     </div>
			</div>
			
			<div class="col-xs-12 col-md-6">
			 <div class="form-group">
			   <label>Deadline Time</label>
			   <input type="time" class="form-control"/>
			 </div>
			</div>
		  </div>
		  <!-- Subject -->
		  
		  <!-- Email -->
		  <div class="row">
		    <div class="col-xs-12">
			  <button class="btn btn-primary form-control"><b>Get Quotation Price</b></button>
			</div>
		  </div>
		  <!-- Email -->
		  
		</div>
      </div>
    </div>

  </div>
</div>
<!-- Modal ::: End -->
<div>
 <!--nav class="navbar navbar-custom navbar-fixed-top" style="background-color:#000;"-->
 <nav class="navbar navbar-default" style="border-radius:0px;">
  <div class="container-fluid">
    <div class="navbar-header">
	  <div class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	  <i class="fa fa-bars" style="color:#f77d0e;"></i>
	  </div>
      <a class="navbar-brand" href="#">
	    <span class="a-white navbar-brand-span">
	      <span style="color:#000;"><span style="color:#f77d0e;">A</span>ssignlancer</span>
	    </span>
	    <!--- span class="a-white navbar-brand-span">
	      <span style="color:#f77d0e;">h</span>ere 
	      <span style="color:#f77d0e;">w</span>e 
	      <span style="color:#f77d0e;">g</span>et
	    </span-->
	  </a>
    </div>
	<div class="collapse navbar-collapse" id="myNavbar">
	  <ul id="al-menu" class="nav navbar-nav">
	   <!--?php if(!isset($_SESSION["ACCOUNT_TYPE"])){?-->
		<li id="appInitHeader-home"><a href="<?php echo $_SESSION["HWG_PROJECT_URL"]; ?>"><b>Home</b></a></li>
		<li id="appInitHeader-aboutUs"><a href="<?php echo $_SESSION["HWG_PROJECT_URL"]; ?>app/aboutUs"><span><b>About Us</b></span></a></li>
		<li id="appInitHeader-services" class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><b>Services</b>
        <span class="caret"></span></a>
        <ul class="dropdown-menu" style="z-index:1100;">
           <li><a href="#">Management Assignments</a></li>
           <li><a href="#">Computer/IT Assignments</a></li>
           <li><a href="#">Finance/Accounting Assignments</a></li>
	       <li><a href="#">Economics Assignments</a></li>
           <li><a href="#">Law Assignments</a></li>
           <li><a href="#">Nursing Assignments</a></li>
	       <li><a href="#">Electronic Assignments</a></li>
           <li><a href="#">Mechanical Assignments</a></li>
           <li><a href="#">Programming Assignments</a></li>
	       <li><a href="#">Dissertation and Essay Help</a></li>
        </ul>
      </li>
		<li id="appInitHeader-howItWorks"><a href="<?php echo $_SESSION["HWG_PROJECT_URL"]; ?>app/howItWorks"><span><b>How it Works?</b></span></a></li>
		<li id="appInitHeader-worktypes"><a href="<?php echo $_SESSION["HWG_PROJECT_URL"]; ?>app/worktypes"><span><b>Types of Works</b></span></a></li>
		<li id="appInitHeader-pricequote" data-toggle="modal" data-target="#priceQuotationModal"><a href="#" onclick="javascript:selectAppInitHeader('appInitHeader-pricequote');"><span><b>Price Quotation</b></span></a></li>
		<li id="appInitHeader-auth" data-toggle="modal" data-target="#customerLoginModal"><a href="#"><span><b>Login</b></span></a></li>
		<li id="appInitHeader-auth" data-toggle="modal" data-target="#customerRegisterModal"><a href="#"><span><b>Register</b></span></a></li>
		<li id="appInitHeader-contactUs"><a href="<?php echo $_SESSION["HWG_PROJECT_URL"]; ?>app/contactUs"><span><b>Contact Us</b></span></a></li>
       <!--?php } else if($_SESSION["ACCOUNT_TYPE"]=='CUSTOMER_LIVESUPPORT'){ ?-->
	   <!--
	    <li id="appInitHeader-livesupport-dashboard"><a href="<?php echo $_SESSION["HWG_PROJECT_URL"]; ?>app/livesupport/dashboard"><span><b>My Dashboard</b></span></a></li>
		<li id="appInitHeader-livesupport-logout" onclick="javascript:logout();"><a href="#"><span><b>logout</b></span></a></li>
	   -->
	  <!--?php } else if($_SESSION["ACCOUNT_TYPE"]=='CUSTOMERS'){ ?-->
	   <!--
		<li id="appInitHeader-customer-dashboard"><a href="<?php echo $_SESSION["HWG_PROJECT_URL"]; ?>app/customer/dashboard"><span><b>My Dashboard</b></span></a></li>
	    <li id="appInitHeader-customer-logout" onclick="javascript:logout();"><a href="#"><span><b>logout</b></span></a></li>
	   -->
	   <!--?php } else if($_SESSION["ACCOUNT_TYPE"]=='ADMINISTRATOR'){ ?-->
	   <!--
	    <li id="appInitHeader-admin-dashboard"><a href="<?php echo $_SESSION["HWG_PROJECT_URL"]; ?>app/admin/dashboard"><span><b>My Dashboard</b></span></a></li>
	    <li id="appInitHeader-admin-myprofile"><a href="<?php echo $_SESSION["HWG_PROJECT_URL"]; ?>app/administrator/dashboard"><span><b>My Profile</b></span></a></li>
		<li id="appInitHeader-admin-livesupportManage"><a href="<?php echo $_SESSION["HWG_PROJECT_URL"]; ?>app/administrator/dashboard"><span><b>Live Support Management</b></span></a></li>
		<li id="appInitHeader-admin-payManage"><a href="<?php echo $_SESSION["HWG_PROJECT_URL"]; ?>app/administrator/dashboard"><span><b>Revenue Management</b></span></a></li>
		<li id="appInitHeader-admin-logout" onclick="javascript:logout();"><a href="#"><span><b>logout</b></span></a></li>
		-->
	  <!--?php } ?-->
   </ul>
	</div>
  </div>
 </nav>
</div>
<script type="text/javascript">
function logout(){
js_ajax('POST',PROJECT_URL+'backend/php/api/app.session.php',{ action:'DestroySession' },function(response){
 console.log(response);
});
}
</script>