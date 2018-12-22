<?php 
session_start();
include_once 'templates/api_params.php';
include_once 'templates/api_js.php';
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
var param = '<?php if(isset($_GET["param"])){ echo $_GET["param"]; } ?>';
var HOMESLIDERID=1;
function homesliderTab(id){
 var arr_Id=["myCarousel_uploadAssignment","myCarousel_makePayment","myCarousel_recieveAssignment","myCarousel_serviceAvailable"];
 var arr_Id_content=["myCarousel_uploadAssignment_content","myCarousel_makePayment_content",
					 "myCarousel_recieveAssignment_content","myCarousel_serviceAvailable_content"];
 for(var index=0;index<arr_Id.length;index++){
   if(arr_Id[index]==arr_Id[id]){ 
     HOMESLIDERID=index;$('#'+arr_Id[index]).addClass('active'); 
	 if(!$('#'+arr_Id_content[index]).hasClass('active')){ $('#'+arr_Id_content[index]).addClass('active'); }
   }
   else { $('#'+arr_Id[index]).removeClass('active'); 
     if($('#'+arr_Id_content[index]).hasClass('active')){ $('#'+arr_Id_content[index]).removeClass('active'); }
   }
 }
}
function homeSlider() {
 $('#myCarousel').carousel({ interval:1000 });
 $('#myCarousel').on('slid.bs.carousel', function(e) {
	   homesliderTab(HOMESLIDERID);
	   HOMESLIDERID++;
	   if(HOMESLIDERID===4){ HOMESLIDERID=0; }
	});
}
</script>
<style>
body { overflow-y:scroll; }
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
 if(param==='login'){
   $('#customerLoginModal').modal();
   div_display_success('signin_customer_warnings','S001');
   $('#signin_customer_warnings_row').css('height','80px');
 }
 selectAppInitHeader('appInitHeader-home');
 $("#sliderCarousel").carousel({interval: 4000});
  homeSlider();
  if(getCookie("LiveSupportChat")===''){
   var chatData=[{"title":"AssignmentHelp","msg":"Hi, Do you need assignment help?"}];
   setCookie("LiveSupportChat", JSON.stringify(chatData), 1);
  }
  chatBoxInitilaizer();
});
</script>
<style>
a.a-black,a.a-black:hover { color:#000; }
</style>
</head>
<body>
<div id="chat_div"></div>
<?php include_once 'templates/api_init_header.php'; ?>

 <!-- Modal ::: Start -->
 <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add your Review</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
		
		  <div class="row">
		    <div class="col-xs-12">
			  <div class="form-group">
			    <label>Title</label>
				<input type="text" class="form-control" placeholder="Enter your Title"/>
			  </div>
			</div>
		  </div>
		  
		  <div class="row">
		    <div class="col-xs-12">
			  <div class="form-group">
			    <label>Your Feedback</label>
				<textarea class="form-control" placeholder="Enter your Feedback"></textarea>
			  </div>
			</div>
		  </div>
		  
		  <div class="row">
		    <div align="right" class="col-xs-12">
			  <i class="fa fa-star-o" aria-hidden="true"></i>
			  <i class="fa fa-star-o" aria-hidden="true"></i>
			  <i class="fa fa-star-o" aria-hidden="true"></i>
			  <i class="fa fa-star-o" aria-hidden="true"></i>
			  <i class="fa fa-star-o" aria-hidden="true"></i>
			</div>
		  </div>
		  
		  <div class="row">
		    <div class="col-xs-12">
			    <button class="btn btn-primary form-control" style="margin-top:10px;"><b>Add Review</b></button>
			</div>
		  </div>
		  
		</div>
      </div>
    </div>

  </div>
</div>
 <!-- Modal ::: End -->

<div> 
<style>
@import url(https://fonts.googleapis.com/css?family=Open+Sans:600);
body { font-family:'Open Sans','sans-serif'; }
.item-1,.item-2,.item-3{ position:absolute;display:block;top:2em;width:60%;font-size:2em;animation-duration: 20s;
	animation-timing-function: ease-in-out;animation-iteration-count: infinite;color:#000; }
.item-1{ animation-name: anim-1; }
.item-2{ animation-name: anim-2; }
.item-3{ animation-name: anim-3; }
@keyframes anim-1 {
  0%, 8.3% { left: -100%; opacity: 0; }
  8.3%,25% { left: 25%; opacity: 1; }
  33.33%, 100% { left: 110%; opacity: 0; }
}
@keyframes anim-2 {
  0%, 33.33% { left: -100%; opacity: 0; }
  41.63%, 58.29% { left: 25%; opacity: 1; }
  66.66%, 100% { left: 110%; opacity: 0; }
}
@keyframes anim-3 {
  0%, 66.66% { left: -100%; opacity: 0; }
  74.96%, 91.62% { left: 25%; opacity: 1; }
  100% { left: 110%; opacity: 0; }
}
</style>
  <div style="width:100%;position:absolute;z-index:1000;margin-top:6%;">
  <p class="item-1">This is your last chance. After this, there is no turning back.</p>

<p class="item-2">You take the blue pill - the story ends, you wake up in your bed and believe whatever you want to believe.</p>

<p class="item-3">You take the red pill - you stay in Wonderland and I show you how deep the rabbit-hole goes.</p>
  </div>
  <div id="sliderCarousel" class="carousel slide" data-ride="carousel" style="width:100%;max-height:500px;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#sliderCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#sliderCarousel" data-slide-to="1"></li>
      <li data-target="#sliderCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/slider/1.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="images/slider/2.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="images/slider/3.jpg" alt="New york" style="width:100%;">
      </div>
	  
	  <div class="item">
        <img src="images/slider/4.jpg" alt="New york" style="width:100%;">
      </div>
	  
	  <div class="item">
        <img src="images/slider/5.jpg" alt="New york" style="width:100%;">
      </div>
	  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
	<ul class="nav nav-pills nav-justified">
      <li id="myCarousel_uploadAssignment" data-target="#myCarousel" data-slide-to="0" class="active" onclick="javascript:homesliderTab(0);">
		<a class="a-black" href="#"><b>UPLOAD ASSIGNMENT AND GET QUOTATION</b></a>
	  </li>
      <li id="myCarousel_makePayment" data-target="#myCarousel" data-slide-to="1" onclick="javascript:homesliderTab(1);">
	    <a class="a-black" href="#"><b>MAKE PAYMENT</b></a>
	  </li>
      <li id="myCarousel_recieveAssignment" data-target="#myCarousel" data-slide-to="2" onclick="javascript:homesliderTab(2);">
		<a class="a-black" href="#"><b>RECIEVE ASSIGNMENT SOLUTION</b></a>
	  </li>
      <li id="myCarousel_serviceAvailable" data-target="#myCarousel" data-slide-to="3" onclick="javascript:homesliderTab(3);">
		<a class="a-black" href="#"><b>SERVICES AVAILABLE</b></a>
	  </li>
    </ul>
	
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div id="myCarousel_uploadAssignment_content" class="item active">
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
            <div id="myCarousel_makePayment_content" class="item">
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
            <div id="myCarousel_recieveAssignment_content" class="item">
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
            <div id="myCarousel_serviceAvailable_content" class="item">
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

<div align="center" style="background-color:#ccc;">
<div class="container-fluid" style="padding-top:25px;padding-bottom:45px;">
<div class="row">

<div align="center" class="col-md-4">
<h1><b>882096</b></h1>
<h5><b>DELIVERED ORDERS</b></h5>
</div>

<div class="col-md-4">
<h1><b>5000</b></h1>
<h5><b>EXPERTS</b></h5>
</div>

<div class="col-md-4">
<h1><b>4.9/5</b></h1>
<h5><b>CLIENT RATING</b></h5>
</div>

</div>
</div>
</div>

<div style="background-color:#337ab7;color:#fff;padding-top:20px;padding-bottom:20px;">
<div class="container-fluid">

<div class="row">
<div align="center" class="col-xs-12">
<h2><b>Student's Testimonials</b></h2>
</div>
<div align="center" class="col-xs-12" style="margin-top:10px;">
Here are the top 6 Feedbacks from the Students who used hereweget.com for Assignment Help.
</div>
</div>

<div class="row">
<div align="center" class="col-xs-12 col-md-4" style="margin-top:20px;">

<div class="list-group">

<div class="list-group-item" style="color:#000;">
<h4 align="center" style="color:#337ab7;"><b>GREAT WORK IS DONE</b></h4>
Thank you so much for your help. This is good as I wanted. The Writer was 
best and I would like to give all my assignment to him/her next time.
</div>

<div align="right" class="list-group-item" style="background-color:#ff9800;">

<div><b>N.L.N.Rao, India</b></div>
<div>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
</div>
<div><b>posted on 22 August 2018</b></div>

</div>

</div>

</div>

<div align="center" class="col-xs-12 col-md-4" style="margin-top:20px;">

<div class="list-group">

<div class="list-group-item" style="color:#000;">
<h4 align="center" style="color:#337ab7;"><b>GREAT WORK IS DONE</b></h4>
Thank you so much for your help. This is good as I wanted. The Writer was 
best and I would like to give all my assignment to him/her next time.
</div>

<div align="right" class="list-group-item" style="background-color:#ff9800;">

<div><b>N.L.N.Rao, India</b></div>
<div>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
</div>
<div><b>posted on 22 August 2018</b></div>

</div>

</div>

</div>

<div align="center" class="col-xs-12 col-md-4" style="margin-top:20px;">

<div class="list-group">

<div class="list-group-item" style="color:#000;">
<h4 align="center" style="color:#337ab7;"><b>GREAT WORK IS DONE</b></h4>
Thank you so much for your help. This is good as I wanted. The Writer was 
best and I would like to give all my assignment to him/her next time.
</div>

<div align="right" class="list-group-item" style="background-color:#ff9800;">

<div><b>N.L.N.Rao, India</b></div>
<div>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
</div>
<div><b>posted on 22 August 2018</b></div>

</div>

</div>

</div>

<div align="center" class="col-xs-12 col-md-4" style="margin-top:20px;">

<div class="list-group">

<div class="list-group-item" style="color:#000;">
<h4 align="center" style="color:#337ab7;"><b>GREAT WORK IS DONE</b></h4>
Thank you so much for your help. This is good as I wanted. The Writer was 
best and I would like to give all my assignment to him/her next time.
</div>

<div align="right" class="list-group-item" style="background-color:#ff9800;">

<div><b>N.L.N.Rao, India</b></div>
<div>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
</div>
<div><b>posted on 22 August 2018</b></div>

</div>

</div>

</div>

<div align="center" class="col-xs-12 col-md-4" style="margin-top:20px;">

<div class="list-group">

<div class="list-group-item" style="color:#000;">
<h4 align="center" style="color:#337ab7;"><b>GREAT WORK IS DONE</b></h4>
Thank you so much for your help. This is good as I wanted. The Writer was 
best and I would like to give all my assignment to him/her next time.
</div>

<div align="right" class="list-group-item" style="background-color:#ff9800;">

<div><b>N.L.N.Rao, India</b></div>
<div>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
</div>
<div><b>posted on 22 August 2018</b></div>

</div>

</div>

</div>

<div align="center" class="col-xs-12 col-md-4" style="margin-top:20px;">

<div class="list-group">

<div class="list-group-item" style="color:#000;">
<h4 align="center" style="color:#337ab7;"><b>GREAT WORK IS DONE</b></h4>
Thank you so much for your help. This is good as I wanted. The Writer was 
best and I would like to give all my assignment to him/her next time.
</div>

<div align="right" class="list-group-item" style="background-color:#ff9800;">

<div><b>N.L.N.Rao, India</b></div>
<div>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
</div>
<div><b>posted on 22 August 2018</b></div>

</div>

</div>

</div>

</div>
<div class="row">
<div align="center" class="col-xs-12 col-md-12" style="margin-top:20px;">
 <div class="btn-group">
  <button class="btn btn-default" style="color:#000;border:1px solid #000;"><b>View All Reviews</b></button>
  <button class="btn btn-default" style="color:#000;border:1px solid #000;" 
  data-toggle="modal" data-target="#myModal"><b>Add New Review</b></button>
 </div>
</div>
</div>
</div>
</div>

<?php include_once 'templates/api_init_bottom.php'; ?>

</body>
</html>