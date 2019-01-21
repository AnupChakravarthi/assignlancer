<style>
body { font-size:12px; }
.label { font-size:11px; }
.mtop15p { margin-top:15px; }
.navbar-brand-span { font-family:logoTitle;font-size:32px;color:#000; }
@font-face { font-family:logoTitle;src:url('fonts/LitchisIsland.ttf'); }
.hide-block { display:none; }
.red { color:red; }
.mtop15p { margin-top:15px; }
th { font-size:14px; }
td { font-size:12px; }
.pad0 { padding:0px; }
</style>
<script type="text/javascript">
function user_logout(){
 js_ajax("POST",PROJECT_URL+'backend/php/api/app.session.php',{ action:'DestroySession' },
 function(response){ console.log(response);window.location.href=PROJECT_URL; });
}
function js_ajax(method,url,data,fn_output){
 $.ajax({type: method, url: url,data:data,success: function(response) { fn_output(response); } }); 
}
/* COLLECTIONS */
var CHATOFFSET=0;
var chatFormDivisions=[];
var chatFormOffsets=[];
var chatData=[];
function chatBoxInitializer(div_Id,ipaddress,sessionId){ 
var setDivisionOffset=true; 
var showOffset=0;
for(var index=0;index<chatFormDivisions.length;index++){
  if(chatFormDivisions[index]==div_Id){ setDivisionOffset=false; showOffset=chatFormOffsets[index];break; }
}
if(setDivisionOffset){
  chatFormDivisions[chatFormDivisions.length]=div_Id;
  chatFormOffsets[chatFormOffsets.length]=CHATOFFSET;
  showOffset=CHATOFFSET;
  CHATOFFSET+=350;
}
// Only 3 Chats are allowed
if(chatFormDivisions.length<=3){
  var box = null;
  if(box) {  box.chatbox("option", "boxManager").toggleBox();  }
  else {  box = $("#"+div_Id).chatbox({id:"You", user:{key : "value"},
             title : '<i class="fa fa-comments" aria-hidden="true"></i> '+ipaddress+'@'+sessionId.substring(0,10)+'...',
		     offset: showOffset,
		     messageSent : function(id, user, msg) {
             $("#"+div_Id).chatbox("option", "boxManager").addMsg(id, msg);
		     chatData.push({"title":id,"msg":msg});
		     setCookie("LiveSupportChat", JSON.stringify(chatData), 1);
		     console.log("chatData: "+JSON.stringify(chatData));
        }});     
    }
 }
 else {
    alert("Only 3 Chats are allowed Currently..");
 }
}
</script>
<style>
.liveChatIcon { position:absolute;padding-top:20px;z-index:1000;bottom:0px;right:20px; }
.footer { position:fixed;left:0;bottom:0;width:100%;background-color:#eee;color:#777;text-align:center;
		  padding-top:15px;padding-bottom:15px; }
</style>

<div class="liveChatIcon" align="center">
  <img src="https://www.solvejob.com/images/hero-header/chat-animation.gif" style="width:80px;height:auto;"/>
</div>

<div class="footer">
  <div align="center">
    <span style="font-size:12px;"><b>We also available on</b></span>
	&nbsp;<i class="fa fa-whatsapp" aria-hidden="true"></i>
	<span style="font-size:12px;"><b>+91-9666052424 for your 24/7 Assistance.</b></span>
  </div>
</div>
						  
<div id="chat_div0"></div>
<div id="chat_div1"></div>
<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
       <span class="sr-only">Toggle navigation</span>
       <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">
	 <span class="navbar-brand-span">Assignlancer</span>&nbsp;&nbsp;<span style="font-size:12px;"><b>CUSTOMERS</b></span>
	</a>
   </div>
   <!-- /.navbar-header -->
   <ul class="nav navbar-top-links navbar-right">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
          <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-messages">
          <li>
            <a href="#">
              <div>
			    <strong>John Smith</strong>
                <span class="pull-right text-muted"><em>Yesterday</em></span>
              </div>
              <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
            </a>
          </li>
          <li class="divider"></li>
             <li>
                <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
						  <a href="<?php echo $_SESSION["PROJECT_URL"];?>app/students/profile">
						   <i class="fa fa-user fa-fw"></i> My Profile
						  </a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#" onclick="javascript:user_logout();"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo $_SESSION["PROJECT_URL"]; ?>app/students/dashboard">
							  <i class="fa fa-dashboard fa-fw"></i> <b>Dashboard</b>
							</a>
                        </li>
						<li>
                            <a href="<?php echo $_SESSION["PROJECT_URL"]; ?>">
							  <i class="fa fa-bell fa-fw"></i> <b>My Notifications</b>
							</a>
                        </li>
						<li>
                            <a href="<?php echo $_SESSION["PROJECT_URL"]; ?>">
							  <i class="fa fa-envelope fa-fw"></i> <b>My Messages</b>
							</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-shopping-cart fa-fw"></i> <b>My Orders</b><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                             <li>
                               <a href="<?php echo $_SESSION["PROJECT_URL"]; ?>app/students/createNewOrder"><i class="fa fa-list fa-fw"></i> <b>Create New Order</b></a>
                             </li>
							 <li>
                               <a href="<?php echo $_SESSION["PROJECT_URL"]; ?>app/students/manageOrders"><i class="fa fa-list fa-fw"></i> <b>Manage Orders</b></a>
                             </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						<li style="background-color:#fff;">
						  
                        </li>
						<li>
						
						</li>
					</ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
