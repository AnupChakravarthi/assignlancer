<?php
require_once '../api/app.initiator.php';
require_once '../api/app.database.php';
require_once '../dal/data.livesupport.authentication.php';
require_once '../util/util.identity.php';
require_once '../util/util.core.php';
if(isset($_GET["action"])){
 if($_GET["action"]=='LIVESUPPORT_AUTHENTICATION'){
   $identity = new Identity();
   $liveSupportAuthentication = new LiveSupportAuthentication();
   $database = new Database();
   $account_Id = $identity->get_LSAgentAccount_Id();
   $availStatus = 'OFFLINE';
   $name = $_GET["name"];
   $acc_pwd = md5($_GET["acc_pwd"]);
   $country = $_GET["country"];
   $usr_tz = $_GET["usr_tz"];
   $time_Id = $_GET["time_Id"];
   $query = $liveSupportAuthentication->query_add_newLiveSupportAccount($account_Id, $availStatus, 
					$name, $acc_pwd, $country, $usr_tz, $time_Id);
   echo $database->addupdateData($query);
   
 } 
 else if($_GET["action"]=='LIVESUPPORT_VIEWALLACCOUNTS'){
   $adminTimezone = $_GET["adminTimezone"];
   $liveSupportAuthentication = new LiveSupportAuthentication();
   $database = new Database();
   $utilityCore = new UtilityCore();
   $query=$liveSupportAuthentication->query_view_liveSupportAccount();
   $jsonData = json_decode($database->getJSONData($query));
   if(count($jsonData)>0){
	$content='<thead>';
	$content.='<tr>';
	$content.='<th>#</th>';
	$content.='<th>Account Id</th>';
	$content.='<th>Name</th>';
	$content.='<th>Country</th>';
	$content.='<th>Agent Timezone</th>';
	$content.='<th>Shift</th>';
	$content.='<th class="hide-block">time_Id</th>';
	$content.='<th>Shift Timings in your Timezone ('.$adminTimezone.')</th>';
	$content.='</tr>';
	$content.='</thead>';
    $content.='<tbody>';               
	for($index=0;$index<count($jsonData);$index++){
	  if($index%2==0){ $content.='<tr class="odd gradeX">'; }
	  else { $content.='<tr class="even gradeC">'; }
	  $account_Id = $jsonData[$index]->{'account_Id'};
	  $availStatus = $jsonData[$index]->{'availStatus'};
	  $name = $jsonData[$index]->{'name'};
	  $country = $jsonData[$index]->{'country'};
	  $usr_tz= $jsonData[$index]->{'usr_tz'};
	  $shift = $jsonData[$index]->{'shift'};
	  $timezone = $jsonData[$index]->{'timezone'};
	  $time_Id = $jsonData[$index]->{'time_Id'};
	  $startTime = $utilityCore->convertTimeFromTimezone($timezone,$jsonData[$index]->{'startTime'},$usr_tz);
	  $endTime = $utilityCore->convertTimeFromTimezone($timezone,$jsonData[$index]->{'endTime'},$usr_tz);
	  if($availStatus=='OFFLINE'){
	   $content.='<td style="width:40px;"><i class="fa fa-circle agentState-red"></i></td>';
	  } else {
	   $content.='<td style="width:40px;"><i class="fa fa-circle agentState-green"></i></td>';
	  }
	  $content.='<td>'.$account_Id.'</td>';
	  $content.='<td>'.$name.'</td>';
	  $content.='<td>'.$country.'</td>';
	  $content.='<td>'.$usr_tz.'</td>';
	  $content.='<td>'.$shift.'</td>';
	  $content.='<td class="hide-block">'.$time_Id.'</td>';
	  $content.='<td>'.$startTime.'-'.$endTime.'</td>';
	  $content.='</tr>'; 
	}
	$content.='</tbody>';
	echo $content;
   }
 }
 else if($_GET["action"]=='LIVESUPPORT_DELETEACCOUNT'){
  $account_Id = $_GET["account_Id"];
  $liveSupportAuthentication = new LiveSupportAuthentication();
  $database = new Database();
  $query = $liveSupportAuthentication->query_delete_liveSupportAccount($account_Id);
  echo $database->addupdateData($query);
 } 
 else if($_GET["action"]=='LIVESUPPORT_UPDATEACCOUNTGENERALINFO'){
   $account_Id=$_GET["account_Id"];
   $name=''; if(isset($_GET["name"])){ $name=$_GET["name"]; }
   $country=''; if(isset($_GET["country"])){ $country=$_GET["country"]; }
   $usr_tz=''; if(isset($_GET["usr_tz"])){ $usr_tz=$_GET["usr_tz"]; }
   $time_Id=''; if(isset($_GET["time_Id"])){ $time_Id=$_GET["time_Id"]; }
   $liveSupportAuthentication = new LiveSupportAuthentication();
   $database = new Database();
   $query = $liveSupportAuthentication->query_update_liveSupportAccount($account_Id,$name,$country,$usr_tz,$time_Id);
   echo $database->addupdateData($query);
 }
 else if($_GET["action"]=='LIVESUPPORT_UPDATEACCOUNTPASSWORD'){
   $account_Id=$_GET["account_Id"];
   $acc_pwd=md5($_GET["acc_pwd"]);
   $liveSupportAuthentication = new LiveSupportAuthentication();
   $database = new Database();
   $query = $liveSupportAuthentication->query_updatePwd_liveSupportAccount($account_Id,$acc_pwd);
   echo $database->addupdateData($query);
 }
 else { echo 'INVALID_ACTION'; }
} else { echo 'NO_ACTION'; }
?>