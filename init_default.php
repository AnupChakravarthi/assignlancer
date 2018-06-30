<?php
session_start();
if(!isset($_SESSION["PROJECT_URL"])){ $_SESSION["PROJECT_URL"]="http://".$_SERVER["HTTP_HOST"]."/assignlancer/"; }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>Assignlancer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/jquery.min.js"></script>
  <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/jquery-ui.js"></script>
  <script type="text/javascript" src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/jquery.ui.chatbox.js"></script>
  <script type="text/javascript" src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/cookies.js"></script>
  <link type="text/css" href="<?php echo $_SESSION["PROJECT_URL"]; ?>styles/jquery.ui.chatbox.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo $_SESSION["PROJECT_URL"]; ?>styles/jquery-ui.css">
  <link rel="stylesheet" href="<?php echo $_SESSION["PROJECT_URL"]; ?>styles/core-skeleton.css">
  <link rel="stylesheet" href="<?php echo $_SESSION["PROJECT_URL"]; ?>styles/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $_SESSION["PROJECT_URL"]; ?>styles/font-awesome.min.css">
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
 $('#myCarousel').on('slid.bs.carousel', function(e) {
       console.log("Slider");
	   homesliderTab(HOMESLIDERID);
	   HOMESLIDERID++;
	   if(HOMESLIDERID===4){ HOMESLIDERID=0; }
	});
}
</script>
<style>
#myCarousel .nav a small { display: block; }
#myCarousel .nav { background: #eee; }
.nav-justified > li > a { border-radius: 0px; }
.nav-pills>li[data-slide-to="0"].active a { background-color: #16a085; }
.nav-pills>li[data-slide-to="1"].active a { background-color: #e67e22; }
.nav-pills>li[data-slide-to="2"].active a { background-color: #2980b9; }
.nav-pills>li[data-slide-to="3"].active a { background-color: #8e44ad; }
</style>

<script type="text/javascript">
$(document).ready(function(){
  selectAppInitHeader('appInitHeader-home');
  homeSlider();
  var chatData=[{"title":"AssignmentHelp","msg":"Hi, Do you need assignment help?"}];
  setCookie("LiveSupportChat", JSON.stringify(chatData), 1);
  chatBoxInitilaizer();
});
</script>
</head>
<body>
<div id="chat_div"></div>
<?php include_once 'templates/api_init_header.php'; ?>

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