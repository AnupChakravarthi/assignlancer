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
		<li><a href="#"><span id="appInitHeader-home"><b>Home</b></span></a></li>
		<li><a href="#"><span id="appInitHeader-aboutUs"><b>About Us</b></span></a></li>
		<li><a href="#"><span id="appInitHeader-services"><b>Services</b></span></a></li>
		<li><a href="#"><span id="appInitHeader-howItWorks"><b>How it Works?</b></span></a></li>
		<li><a href="#"><span id="appInitHeader-auth"><b>Login/Register</b></span></a></li>
		<li><a href="#"><span id="appInitHeader-contactUs"><b>Contact Us</b></span></a></li>
    </ul>
	</div>
  </div>
 </nav>
</div>