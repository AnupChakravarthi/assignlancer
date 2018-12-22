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
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<style>
body { overflow-y:scroll; }
a.a-black,a.a-black:hover { color:#000; }
.mtop15p { margin-top:15px; }
</style>
<script type="text/javascript">
$(document).ready(function(){
 $('#example').DataTable();
 selectAppInitHeader("appInitHeader-admin-dashboard");
});
function create_liveSupportAccounts(){
js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.authentication.php',{ action:'CREATE_ACCOUNT',
accountType:'CUSTOMER_LIVESUPPORT',availStatus:'',name:'',email:'',acc_pwd:'' },function(response){

});

}
</script>
</head>
<body>
<div id="chat_div"></div>
<?php include_once 'templates/api_init_header.php'; ?>
<div class="container-fluid mtop15p">
 <div class="row">
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
$(document).ready(function(){
 sidebar_menu('sm_manage_livesupportAccount');
});
function livesupport_statistics() {
 var data = google.visualization.arrayToDataTable([
            ['Week Statistics','New Student Accounts','Chatted','Ordered','Payments Made','New Works Assigned','Works completed'],
            ['Sunday',10,4,11,10,9,11],
            ['Monday',11,4,11,6,7,8],
            ['Tuesday',6,6,11,6,5,2],
            ['Wednesday',10,5,4,13,15,6],
			['Thursday',11,4,11,6,7,8],
            ['Friday',6,6,11,6,5,2],
            ['Saturday',10,5,4,13,15,6]
           ]);
 var options = { hAxis: {title: 'Days',  titleTextStyle: {color: '#333'}},
				 vAxis: {title: 'Students', format: '0', minValue: 0} };
 var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
     chart.draw(data, options);
}
function sidebar_menu(id){
 var arry_Id=["sm_manage_livesupportAccount","sm_view_businessStatistics","sm_view_revenueStatistics"];
 var arry_Id_content=["sm_manage_livesupportAccount_content","sm_view_businessStatistics_content","sm_view_revenueStatistics_content"];
 for(var index=0;index<arry_Id.length;index++){
  if(arry_Id[index]===id){ 
    if(!$('#'+arry_Id[index]).hasClass('active')){ $('#'+arry_Id[index]).addClass('active'); } 
    if($('#'+arry_Id_content[index]).hasClass('hide-block')){ $('#'+arry_Id_content[index]).removeClass('hide-block'); }
  }
  else { 
    if($('#'+arry_Id[index]).hasClass('active')){ $('#'+arry_Id[index]).removeClass('active'); } 
	if(!$('#'+arry_Id_content[index]).hasClass('hide-block')){ $('#'+arry_Id_content[index]).addClass('hide-block'); }
  }
  
 }
 if(id==='sm_view_businessStatistics'){ livesupport_statistics(); }
 
}
</script>
  <div class="col-xs-12 col-md-3">
  <ul class="nav nav-pills nav-stacked">
    <li id="sm_manage_livesupportAccount" onclick="javascript:sidebar_menu(this.id);"><a href="#"><b>Manage Live Support Account</b></a></li>
    <li id="sm_view_businessStatistics" onclick="javascript:sidebar_menu(this.id);"><a href="#"><b>Business Statistics</b></a></li>
	<li id="sm_view_revenueStatistics" onclick="javascript:sidebar_menu(this.id);"><a href="#"><b>Revenue Statistics</b></a></li>
  </ul>
  </div>
  
  <div id="sm_manage_livesupportAccount_content" class="hide-block">
  
  <div class="col-xs-12 col-md-4">
    <div>
     <div>
      <h4><b>Create Live Support Account</b></h4><hr/>
	 </div>
	 <div class="form-group">
	   <label>Name</label>
	   <input type="text" class="form-control" placeholder="Enter your Name"/>
	 </div>
	 <div class="form-group">
	   <label>Email</label>
	   <input type="text" class="form-control" placeholder="Enter your Email"/>
	 </div><div class="form-group">
	   <label>Password</label>
	   <input type="text" class="form-control" placeholder="Enter your Password"/>
	 </div>
	 <div class="form-group">
	   <label>Confirm Password</label>
	   <input type="text" class="form-control" placeholder="Enter your Confirm Password"/>
	 </div>
	 <div class="form-group">
	   <button class="btn btn-primary form-control"><b>Create Live Support Account</b></button>
	 </div>
	 
	</div>
  </div>
  
  <div class="col-xs-12 col-md-5">
    <div>
      <h4><b>Manage Live Support Account</b></h4><hr/>
	</div>
  <div>
<style>
table>thead>tr>th, table>tbody>tr>td { font-size:12px; }
</style>
    <table id="example" class="display" style="width:100%">
        <thead style="background-color:#f77d0e;color:#fff;">
            <tr>
                <th>Name</th>
                <th>Email</th>
				<th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
				<td>Online</td>
            </tr>
		</tbody>
	</table>
	</div>
  </div>
  
  </div>
  
  <div id="sm_view_businessStatistics_content" class="hide-block">
   <div id="chart_div" class="col-xs-12 col-md-9" style="height: 500px;"></div>
  </div>
  
  <div id="sm_view_revenueStatistics_content" class="hide-block">
  Revenue Statistics
  </div>
  
 </div>
</div>
</body>
</html>