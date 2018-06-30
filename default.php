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
var HOMESLIDERID=1;
function homesliderTab(id){
 var arr_Id=["myCarousel_uploadAssignment","myCarousel_makePayment","myCarousel_recieveAssignment",
 "myCarousel_serviceAvailable"];
 for(var index=0;index<arr_Id.length;index++){
   if(arr_Id[index]==arr_Id[id]){ HOMESLIDERID=index;$('#'+arr_Id[index]).addClass('active'); }
   else { $('#'+arr_Id[index]).removeClass('active'); }
 }
}
function homeSlider() {
 $('#myCarousel').carousel({ interval:1000 });
/* $('#myCarousel').on('click', '.nav a', function() {
        console.log($(this));
			clickEvent = true;
			$('.nav li').removeClass('active');
			$(this).parent().addClass('active');		
 });
 */
 $('#myCarousel').on('slid.bs.carousel', function(e) {
       console.log("Slider");
	   homesliderTab(HOMESLIDERID);
	   HOMESLIDERID++;
	   if(HOMESLIDERID===4){ HOMESLIDERID=0; }
		//if(!clickEvent) {
			// var count = $('.nav').children().length -1;
		//	var count =2;
		//	var current = $('.nav li.active');
		//	current.removeClass('active').next().addClass('active');
		//	var id = parseInt(current.data('slide-to'));
		
		//	if(count == id) {
		//		$('.nav li').first().addClass('active');	
		//	}
	//	}
		//clickEvent = false;
	});
}
</script>
<style>
a,a:hover,a:focus { background-color:#fff;color:#000; }
#myCarousel .nav a small { display: block; }
#myCarousel .nav { background: #eee; }
.nav-justified > li > a { border-radius: 0px; }
.nav-pills>li[data-slide-to="0"].active a { background-color: #16a085; }
.nav-pills>li[data-slide-to="1"].active a { background-color: #e67e22; }
.nav-pills>li[data-slide-to="2"].active a { background-color: #2980b9; }
.nav-pills>li[data-slide-to="3"].active a { background-color: #8e44ad; }
</style>

<script type="text/javascript">
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

$(document).ready(function(){
  homeSlider();
  chatBoxInitilaizer();
});
</script>
<style>
.navbar-nav>li>a:hover,.navbar-nav>li>a:focus { background-color:#fff; }
.navbar-custom { border-bottom:2px solid #000; }
.navbar-brand-span { font-family:logoTitle;font-size:32px;color:#000; }
@font-face { font-family:logoTitle;src:url('fonts/LitchisIsland.ttf'); }
@font-face { font-family:specialHeading01;src:url('fonts/Boogaloo-Regular.otf'); }
.header-active { color:#000;padding:5px;border:2px solid #000; }
.header-inactive { color:#000; }
</style>
</head>
<body>
<div id="chat_div"></div>
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
		<li><a href="#"><span class="header-active"><b>Home</b></span></a></li>
		<li><a href="#"><span class="header-inactive"><b>About Us</b></span></a></li>
		<li><a href="#"><span class="header-inactive"><b>Services</b></span></a></li>
		<li><a href="#"><span class="header-inactive"><b>How it Works?</b></span></a></li>
		<li><a href="#"><span class="header-inactive"><b>Contact Us</b></span></a></li>
    </ul>
	</div>
  </div>
 </nav>
</div>

<div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
	
		<ul class="nav nav-pills nav-justified">
            <li id="myCarousel_uploadAssignment" data-target="#myCarousel" data-slide-to="0" class="active" onclick="javascript:homesliderTab(0);">
			  <a href="#"><b>UPLOAD ASSIGNMENT AND GET QUOTATION</b></a>
			</li>
            <li id="myCarousel_makePayment" data-target="#myCarousel" data-slide-to="1" onclick="javascript:homesliderTab(1);">
			  <a href="#"><b>MAKE PAYMENT</b></a></li>
            <li id="myCarousel_recieveAssignment" data-target="#myCarousel" data-slide-to="2" onclick="javascript:homesliderTab(2);">
			  <a href="#"><b>RECIEVE ASSIGNMENT SOLUTION</b></a></li>
            <li id="myCarousel_serviceAvailable" data-target="#myCarousel" data-slide-to="3" onclick="javascript:homesliderTab(3);">
			<a href="#"><b>SERVICES AVAILABLE</b></a></li>
        </ul>
		
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="images/1.png" style="width:100%;">
				
                <div class="carousel-caption">
				    
				       <i class="fa fa-5x fa-cloud-upload" aria-hidden="true"></i><br/>
					   <h3><b>UPLOAD ASSIGNMENT AND GET QUOTATION</b></h3><br/>
                    
					<div align="left">
                       
					   <h4><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Consult Our Live Chat Representatives with your Assignment.</h4>
					   <h4><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Our Live Chat Representatives are Available online 24/7</h4>
					   <h4><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Upload your Assignment in Live Support ChatBox.</h4>
					   <h4><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Get your Price Quotation for your Assignment.</h4>
					   <h4><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Our Live Chat Representatives are Available online 24/7</h4>
					   <h4><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Upload your Assignment in Live Support ChatBox.</h4>
					   
					</div>
                </div>
            </div>
            <!-- End Item -->
            <div class="item">
                <img src="images/2.png" style="width:100%;">
                <div class="carousel-caption">
				    <i class="fa fa-5x fa-euro" aria-hidden="true"></i>
					&nbsp;<i class="fa fa-5x fa-rupee" aria-hidden="true"></i>
					&nbsp;<i class="fa fa-5x fa-dollar" aria-hidden="true"></i>
					&nbsp;<i class="fa fa-5x fa-yen" aria-hidden="true"></i>
					<br/><br/>
                    <h3><b>MAKE PAYMENT</b></h3>
                    <div  align="left">
					   <h4><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Consult Our Live Chat Representatives with your Assignment.</h4>
					   <h4><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Our Live Chat Representatives are Available online 24/7</h4>
					   <h4><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Upload your Assignment in Live Support ChatBox.</h4>
					   <h4><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Get your Price Quotation for your Assignment.</h4>
					   <h4><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Our Live Chat Representatives are Available online 24/7</h4>
					   <h4><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Upload your Assignment in Live Support ChatBox.</h4>
					   <h4><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Our Live Chat Representatives are Available online 24/7</h4>
					   
					</div>
                </div>
            </div>
            <!-- End Item -->
            <div class="item">
                <img src="images/3.png" style="width:100%;">
                <div class="carousel-caption">
                    <i class="fa fa-5x fa-cloud-download" aria-hidden="true"></i><br/>
					   <h3><b>RECIEVE ASSIGNMENT SOLUTION</b></h3><br/>
                    
					<div align="left">
                       
					   <h4><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Consult Our Live Chat Representatives with your Assignment.</h4>
					   <h4><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Our Live Chat Representatives are Available online 24/7</h4>
					   <h4><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Upload your Assignment in Live Support ChatBox.</h4>
					   <h4><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Get your Price Quotation for your Assignment.</h4>
					   <h4><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Our Live Chat Representatives are Available online 24/7</h4>
					   <h4><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Upload your Assignment in Live Support ChatBox.</h4>
					   
					</div>
                </div>
            </div>
            <!-- End Item -->
            <div class="item">
                <img src="images/4.png" style="width:100%;">
                <div class="carousel-caption">
                    <i class="fa fa-5x fa-cloud-download" aria-hidden="true"></i><br/>
					   <h3><b>SERVICES AVAILABLE</b></h3><br/>
                    
					<div align="left">
                       
					   <h4><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Consult Our Live Chat Representatives with your Assignment.</h4>
					   <h4><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Our Live Chat Representatives are Available online 24/7</h4>
					   <h4><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Upload your Assignment in Live Support ChatBox.</h4>
					   <h4><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Get your Price Quotation for your Assignment.</h4>
					   <h4><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Our Live Chat Representatives are Available online 24/7</h4>
					   <h4><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Upload your Assignment in Live Support ChatBox.</h4>
					   
					</div>
                </div>
            </div>
            <!-- End Item -->
        </div>
        <!-- End Carousel Inner -->
        
    </div>
    <!-- End Carousel -->
</div>

<style>
.mtopbot100p { margin-top:100px;margin-bottom:100px; }
.mbot20p { margin-bottom:20px; }
</style>

<div align="center" class="mtopbot100p">
<h2 class="mbot20p"><b>Stylish Portfolio is the perfect theme for your next project!</b></h2>
This theme features a flexible, UX friendly sidebar menu and stock photos from our friends at Unsplash!
</div>

</body>
</html>