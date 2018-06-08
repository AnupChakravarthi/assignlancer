<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>Assignlancer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui.js"></script>
  <script type="text/javascript" src="js/jquery.ui.chatbox.js"></script>
  <link type="text/css" href="styles/jquery.ui.chatbox.css" rel="stylesheet" />
  <link rel="stylesheet" href="styles/jquery-ui.css">
  <link rel="stylesheet" href="styles/core-skeleton.css">
  <link rel="stylesheet" href="styles/bootstrap.min.css">
  <link rel="stylesheet" href="styles/font-awesome.min.css">
<script type="text/javascript">
  $(document).ready(function(){
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
        //  });
      });
</script>
<style>
.navbar-custom { border-bottom:2px solid #f77d0e; }
.navbar-brand-span { font-family:logoTitle;font-size:32px;color:#000; }
@font-face { font-family:logoTitle;src:url('fonts/LitchisIsland.ttf'); }
@font-face { font-family:specialHeading01;src:url('fonts/Boogaloo-Regular.otf'); }
.header-active { background-color:#f77d0e;color:#fff; }
.header-inactive { color:#000; }
</style>
</head>
<body>
<div id="chat_div"></div>
<div class="container-fluid" style="height:52px;">
 <nav class="navbar navbar-custom navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
	  <div class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	  <i class="fa fa-bars" style="color:#f77d0e;"></i>
	  </div>
      <a class="navbar-brand" href="#"><span class="navbar-brand-span">Assignlancer</span></a>
    </div>
	<div class="collapse navbar-collapse" id="myNavbar">
	  <ul class="nav navbar-nav pull-right">
		<li class="active"><a href="#" class="header-active"><b>Home</b></a></li>
		<li><a href="#" class="header-inactive"><b>About Us</b></a></li>
		<li><a href="#" class="header-inactive"><b>Services</b></b></a></li>
		<li><a href="#" class="header-inactive"><b>How it Works?</b></a></li>
		<li><a href="#" class="header-inactive"><b>Contact Us</b></a></li>
    </ul>
	</div>
  </div>
 </nav>
</div>
<div class="container-fluid" style="background-color:#f77d0e;height:450px;">
  <div align="center" class="col-md-8 col-xs-12" style="margin-top:25px;font-family:specialHeading01;color:#fff;letter-spacing:1px;">
     <div style="font-size:32px;">Get instant Assignment Help from No.1 Assignment Makers</div>
	 <div class="btn-group mtop15p" style="font-family: Roboto,'Helvetica Neue',Helvetica,Arial,sans-serif;">
		<button class="btn btn-default"><b>Place an Order</b></button>
		<button class="btn btn-default" style="color:#000;"><b>Start Chat with our Live Experts</b></button>
	 </div>
  </div>
  <div class="col-md-4 col-xs-12" style="padding:15px;">
    <div class="col-xs-12" style="border-radius:5px;box-shadow:2px 2px 2px 2px #fefefe;background-color:#fff;height:150px;">
	   <div class="col-xs-12 mtop15p">
		   <ul class="nav nav-tabs">
			<li class="active"><a href="#" style="background-color:#f77d0e;color:#fff;"><b>Register</b></a></li>
			<li><a href="#" style="color:#000;"><b>Login</b></a></li>
		   </ul>
	   </div>
	</div>
  </div>
</div>
</body>
</html>