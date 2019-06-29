<?php
session_start();
require_once '../api/app.initiator.php';
require_once '../api/app.database.php';
require_once '../dal/data.livesupport.chat.php';
require_once '../util/util.identity.php';
require_once '../api/app.json.php';

$FILE_DATAUPDATEINFO = $_SESSION["HWG_PROJECT_PATH"].'backend/config/data-update-info.json';

if(isset($_GET["action"])){
 if($_GET["action"]=='ADDUSER_TO_QUEUE'){
 
   $idObj= new Identity();
   $liveSupportChat = new LiveSupportChat();
   $database = new Database();
   $jsonServiceManager = new JSONServiceManager();
   
   $queue_Id = $idObj->get_queue_Id(); // Dynamic Number
   $queueStatus = $_GET["queueStatus"];
   $IPAddress = $_GET["IPAddress"];
   $SessionId = $_GET["SessionId"];
   $toAgent = $_GET["toAgent"];
   $queueOn = $_GET["queueOn"];
   $agentPicked = $_GET["agentPicked"];
   $chatFinished = $_GET["chatFinished"];
   $order_Id = $_GET["order_Id"];
   $account_Id = $_GET["account_Id"];
   $finished = $_GET["finished"];
   
   $query = $liveSupportChat->query_add_messageToQueue($queue_Id, $queueStatus, $IPAddress, $SessionId, $toAgent, 
     $queueOn, $agentPicked, $chatFinished, $order_Id, $account_Id, $finished);
	 
   echo $database->addupdateData($query);
   
   /* Update Tbl(queue) Updated Information in data-update-info.json  */
   $jsonServiceData = $jsonServiceManager->readJSONData($FILE_DATAUPDATEINFO);
   $jsonServiceData = json_decode($jsonServiceData);
   $jsonServiceData->{"dbServerLastUpdates"}->{"databaseName"}->{"Tbls"}->{"queue"}=date('Y-m-d H:i:s');
   $jsonServiceData = json_encode($jsonServiceData);
   $jsonServiceManager->updateJSONData($FILE_DATAUPDATEINFO,$jsonServiceData);  
 }
 else if($_GET["action"]=='FETCHQUEUELIST'){
  $queueLastViewed = $_GET["queueLastViewed"];
  $fetchData = false;
  if(strlen($queueLastViewed)==0){ $fetchData=true; } // As $queueLastViewed is Empty
  else { 
    /* $queueLastViewed is not Empty provided with a TimeStamp 
	 * Check queue tbl last Updated in data-update-info.json
	 * If queue tbl updated after $queueLastViewed, set $fetchData=true;
	 */
	$jsonServiceManager = new JSONServiceManager();
	$utilityCore = new UtilityCore();
	$jsonServiceData = $jsonServiceManager->readJSONData($FILE_DATAUPDATEINFO);
    $jsonServiceData = json_decode($jsonServiceData);
    $queueLastUpdated = $jsonServiceData->{"dbServerLastUpdates"}->{"databaseName"}->{"Tbls"}->{"queue"};  
    if($utilityCore->compareTimeStamp($queueLastViewed,$queueLastUpdated)=='TIME1_LESS'){ $fetchData=true; }
  }

  if($fetchData){ /* Get Fetch Data */
    $liveSupportChat = new LiveSupportChat();
	$database = new Database();
	$query = $liveSupportChat->query_view_customersInQueue();
	echo $database->getJSONData($query);
  } else {
     echo 'NO_LATEST_UPDATE';
  }
 }
 else { echo 'MISSING_ACTION'; }
}
else { echo 'NO_ACTION'; }
?>