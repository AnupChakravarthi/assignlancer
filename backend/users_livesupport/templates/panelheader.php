<style>
.navbar-brand-span { font-family:logoTitle;font-size:32px;color:#000; }
@font-face { font-family:logoTitle;src:url('fonts/LitchisIsland.ttf'); }
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
</style>
<script type="text/javascript">
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
	 <span class="navbar-brand-span">Assignlancer</span>&nbsp;&nbsp;<span style="font-size:12px;"><b>LIVE SUPPORT</b></span>
	</a>
   </div>
<style>
.agentState-green { color:#02af09; }
.agentState-red { color:#e40e07; }
</style>
<script type="text/javascript">
function set_agentStatus_available(){
 if(!$('#livesupport_agent_state').hasClass('agentState-green')){ 
   $('#livesupport_agent_state').addClass('agentState-green'); 
 }
 if($('#livesupport_agent_state').hasClass('agentState-red')){ 
   $('#livesupport_agent_state').removeClass('agentState-red'); 
 }
 var beepOnline = document.getElementById("livesupport_agent_stateOnline").play(); 
}
function set_agentStatus_unAvailable(){
 if($('#livesupport_agent_state').hasClass('agentState-green')){ 
   $('#livesupport_agent_state').removeClass('agentState-green'); 
 }
 if(!$('#livesupport_agent_state').hasClass('agentState-red')){ 
   $('#livesupport_agent_state').addClass('agentState-red'); 
 }
 var beepOffline = document.getElementById("livesupport_agent_stateOffline").play(); 
}
</script>

<div>
<audio id="livesupport_agent_stateOnline">
  <source src="<?php echo $_SESSION["PROJECT_URL"]?>audio/online.mp3" type="audio/mpeg">
</audio>
<audio id="livesupport_agent_stateOffline">
  <source src="<?php echo $_SESSION["PROJECT_URL"]?>audio/offline.mp3" type="audio/mpeg">
</audio>
</div>

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
      
	  <!-- Status -->
	  <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
          <i id="livesupport_agent_state" class="fa fa-circle fa-fw agentState-red"></i> <i class="fa fa-headphones fa-fw"></i> 
		  <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu" style="min-width:120px;">
          <li>
		    <a href="#" onclick="javascript:set_agentStatus_available();">
			 <div><i class="fa fa-circle fa-fw agentState-green"></i> <strong>ONLINE</strong></div>
			</a>
		  </li>
          <li class="divider"></li>
		  <li><a href="#" onclick="javascript:set_agentStatus_unAvailable();">
		    <div><i class="fa fa-circle fa-fw agentState-red"></i> <strong>OFFLINE</strong></div></a>
		  </li>
        </ul>
                    <!-- /.dropdown-messages -->
                </li>
       <!-- Status --> 
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
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
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                            <a href="<?php echo $_SESSION["PROJECT_URL"]?>app/liveSupport/dashboard"><i class="fa fa-dashboard fa-fw"></i> <b>Dashboard</b></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> <b>Manage Orders</b><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
								  <a href="<?php echo $_SESSION["PROJECT_URL"]; ?>app/liveSupport/mo_assignments">
								    <b>Assignments Overview</b>
								  </a>
								</li>
                                <li><a href="<?php echo $_SESSION["PROJECT_URL"]; ?>app/liveSupport/mo_payments">
								      <i class="fa fa-search" aria-hidden="true"></i> <b>Order Search</b>
								    </a>
								</li>
								<li><a href="#"><b>Statistics</b></a></li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						<li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> <b>Customers</b><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
								  <a href="<?php echo $_SESSION["PROJECT_URL"]; ?>app/liveSupport/chats">
								    <b>Live Chat</b>
								  </a>
								</li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                  </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
