<?php
require_once '../api/app.initiator.php';
require_once '../api/app.database.php';
require_once '../dal/data.livesupport.authentication.php';
require_once '../util/util.identity.php';
require_once '../util/util.core.php';
if(isset($_GET["action"])){
 if($_GET["action"]=='LIVESUPPORT_AUTHENTICATION'){
   $generateIdentity = new GenerateIdentity();
   $liveSupportAuthentication = new LiveSupportAuthentication();
   $database = new Database();
   $account_Id = $generateIdentity->get_LSAgentAccount_Id();
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
	$content.='<th>Account Id</th>';
	$content.='<th>Name</th>';
	$content.='<th>Country</th>';
	$content.='<th>Agent Timezone</th>';
	$content.='<th>Shift</th>';
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
	  $startTime = $utilityCore->convertTimeFromTimezone($timezone,$jsonData[$index]->{'startTime'},$usr_tz);
	  $endTime = $utilityCore->convertTimeFromTimezone($timezone,$jsonData[$index]->{'endTime'},$usr_tz);
	  if($availStatus=='OFFLINE'){
	   $content.='<td><i class="fa fa-circle agentState-red"></i>&nbsp;'.$account_Id.'</td>';
	  } else {
	   $content.='<td><i class="fa fa-circle agentState-green"></i>&nbsp;'.$account_Id.'</td>';
	  }
	  $content.='<td>'.$name.'</td>';
	  $content.='<td>'.$country.'</td>';
	  $content.='<td>'.$usr_tz.'</td>';
	  $content.='<td>'.$shift.'</td>';
	  $content.='<td>'.$startTime.'-'.$endTime.'</td>';
	  $content.='</tr>'; 
	}
	$content.='</tbody>';
	echo $content;
   }
 }
 else { echo 'INVALID_ACTION'; }
} else { echo 'NO_ACTION'; }
?>