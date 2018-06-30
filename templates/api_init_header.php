<style>
a,a:hover,a:focus { background-color:#fff;color:#000; }
.navbar-nav>li>a:hover,.navbar-nav>li>a:focus { background-color:#fff; }
.navbar-custom { border-bottom:2px solid #000; }
.navbar-brand-span { font-family:logoTitle;font-size:32px;color:#000; }
@font-face { font-family:logoTitle;src:url('fonts/LitchisIsland.ttf'); }
@font-face { font-family:specialHeading01;src:url('fonts/Boogaloo-Regular.otf'); }
.header-active { color:#000;padding:5px;border:2px solid #000; }
.header-inactive { color:#000; }
</style>
<script type="text/javascript">
function selectAppInitHeader(id){
 var arry_Id=["appInitHeader-home","appInitHeader-aboutUs","appInitHeader-services","appInitHeader-howItWorks",
              "appInitHeader-auth","appInitHeader-contactUs"];
 for(var index=0;index<arry_Id.length;index++){
   if(arry_Id[index]===id){
      if(!$('#'+arry_Id[index]).hasClass('header-active')) { $('#'+arry_Id[index]).addClass('header-active'); }
	  if($('#'+arry_Id[index]).hasClass('header-inactive')) { $('#'+arry_Id[index]).removeClass('header-active'); }
   }
   else { 
      if($('#'+arry_Id[index]).hasClass('header-active')) { $('#'+arry_Id[index]).removeClass('header-active'); }
	  if(!$('#'+arry_Id[index]).hasClass('header-inactive')) { $('#'+arry_Id[index]).removeClass('header-active'); }
   }
 }
}
function chatBoxInitilaizer(){
  var box = null;
        //  $("input[type='button']").click(function(event, ui) {
              if(box) {
                  box.chatbox("option", "boxManager").toggleBox();
              }
              else {
                  box = $("#chat_div").chatbox({id:"You", 
                                                user:{key : "value"},
                                                title : '<i class="fa fa-comments" aria-hidden="true"></i> Live Chat Support',
                                                messageSent : function(id, user, msg) {
                                                   // $("#log").append(id + " said: " + msg + "<br/>");
                                                    $("#chat_div").chatbox("option", "boxManager").addMsg(id, msg);
                                                }});
              }
			   $("#chat_div").chatbox("option", "boxManager").addMsg('Assignment Help', 'Hi, Do you need assignment help?');
        //  });
}
</script>
<div class="container-fluid" style="height:52px;">
 <nav class="navbar navbar-custom navbar-fixed-top" style="background-color:#fff;">
  <div class="container-fluid">
    <div class="navbar-header">
	  <div class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	  <i class="fa fa-bars" style="color:#f77d0e;"></i>
	  </div>
      <a class="navbar-brand" href="#"><span class="navbar-brand-span">Assignlancer</span></a>
    </div>
	<div class="collapse navbar-collapse" id="myNavbar">
	  <ul class="nav navbar-nav pull-right">
		<li><a href="<?php echo $_SESSION["PROJECT_URL"]; ?>"><span id="appInitHeader-home"><b>Home</b></span></a></li>
		<li><a href="<?php echo $_SESSION["PROJECT_URL"]; ?>app/aboutUs"><span id="appInitHeader-aboutUs"><b>About Us</b></span></a></li>
		<li><a href="<?php echo $_SESSION["PROJECT_URL"]; ?>app/services"><span id="appInitHeader-services"><b>Services</b></span></a></li>
		<li><a href="<?php echo $_SESSION["PROJECT_URL"]; ?>app/howItWorks"><span id="appInitHeader-howItWorks"><b>How it Works?</b></span></a></li>
		<li><a href="<?php echo $_SESSION["PROJECT_URL"]; ?>app/authentication"><span id="appInitHeader-auth"><b>Login/Register</b></span></a></li>
		<li><a href="<?php echo $_SESSION["PROJECT_URL"]; ?>app/contactUs"><span id="appInitHeader-contactUs"><b>Contact Us</b></span></a></li>
    </ul>
	</div>
  </div>
 </nav>
</div>