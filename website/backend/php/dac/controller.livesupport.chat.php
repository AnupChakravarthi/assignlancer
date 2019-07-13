<?php
session_start();
header('Content-Type: application/json');
require_once '../api/app.initiator.php';
require_once '../api/app.database.php';
require_once '../dal/data.livesupport.chat.php';
require_once '../util/util.identity.php';
require_once '../api/app.json.php';

$FILE_DATAUPDATEINFO = $_SESSION["HWG_PROJECT_PATH"].'backend/config/data-update-info.json';

if(isset($_GET["action"])){
 if($_GET["action"]=='ADDUSER_TO_QUEUE'){
    /* ===============================
	 * SERVICE DESCRIPTION: 
	 * ===============================
	 *  a) Gets List of LiveSupportAgents who are in ON-READY State. 
	 *  b) Picks a Random Agent from LiveSupportAgents and Maps to New UnRegistered / Unlogged Customer
	 *  c) Adds Data to Queue Tbl in Database
	 *  d) Set User Queue_Id and LiveSupportAgent_Id in the Session
	 * =================================
	 * SERVICE ACCESSED BY:
	 * =================================
	 *  a) app.ui.chatpopup.js
	 */
   
   $identity = new Identity();
   $liveSupportChat = new LiveSupportChat();
   $database = new Database();
   $jsonServiceManager = new JSONServiceManager();

       $listOfAgentsQuery = $liveSupportChat->query_view_listOfAgentsOnline();
	   $listOfAgentsData = json_decode($database->getJSONData($listOfAgentsQuery));
	   $numberOfAgents = count($listOfAgentsData);
	   $content='{';
	   $content.='"agentsAvailable":"'.$numberOfAgents.'",';
	   if($numberOfAgents>0){
	     $toAgent = $listOfAgentsData[rand(0,($numberOfAgents-1))]->{'account_Id'};
		 $queue_Id = $identity->get_queue_Id(); // Dynamic Number
		 $queueStatus = 'ONLINE';
		 $chatName = $_GET["chatName"]; 
		 $country = $_GET["country"];
		 $IPAddress = $_GET["IPAddress"];
         $SessionId = $_GET["SessionId"];
		 $order_Id = '';
		 $account_Id = $_GET["account_Id"];
		 $queueOn = date('Y-m-d H:i:s');
		 $customerReview='';
		 $agentFeedBack='';
		 
		 $addToQueueQuery = $liveSupportChat->query_add_messageToQueue($queue_Id, $queueStatus, $chatName, $country, 
		    $IPAddress, $SessionId, $order_Id, $account_Id, $queueOn, $customerReview, $agentFeedBack);
		 $addToQueueResponse = $database->addupdateData($addToQueueQuery);
		 
		 $content.='"addToQueueResponse":"'.$addToQueueResponse.'",';
		 $content.='"queue_Id":"'.$queue_Id.'",';
		 $content.='"toAgent":"'.$toAgent.'"';
		 
		 $_SESSION["HWG_ACCOUNT_QUEUEID"]=$queue_Id;
		 $_SESSION["HWG_ACCOUNT_HELPID"]=$toAgent;
		 
		 /* Update Tbl(queue) Updated Information in data-update-info.json  */
          $jsonServiceData = $jsonServiceManager->readJSONData($FILE_DATAUPDATEINFO);
          $jsonServiceData = json_decode($jsonServiceData);
          $jsonServiceData->{"dbServerLastUpdates"}->{"databaseName"}->{"Tbls"}->{"queue"}=date('Y-m-d H:i:s');
          $jsonServiceData = json_encode($jsonServiceData);
          $jsonServiceManager->updateJSONData($FILE_DATAUPDATEINFO,$jsonServiceData);  
	   } 
	   $content.='}';
       echo $content;
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
 else if($_GET["action"]=='SETSUPPORTCHAT'){
   $identity = new Identity();
   $liveSupportChat = new LiveSupportChat();
   $database = new Database();
   
   $chat_Id = $identity->get_chat_Id();
   $queue_Id = $_GET["queue_Id"];
   $title =  $_GET["title"];
   $msg = $_GET["msg"];
   $toAgent = $_GET["toAgent"];
   
   $liveSupportChatQuery = $liveSupportChat->query_add_supportchat($chat_Id,$queue_Id, $title, $msg, $toAgent);
   echo '{"liveSupportChatQuery":"'.$database->addupdateData($liveSupportChatQuery).'"}';
 }
 else if($_GET["action"]=='GETSUPPORTCHAT'){
   $queue_Id = $_GET["queue_Id"];
   $liveSupportChat = new LiveSupportChat();
   $database = new Database();
   $liveSupportChatQuery = $liveSupportChat->query_view_supportchat($queue_Id);
   echo $database->getJSONData($liveSupportChatQuery);
 }
 else if($_GET["action"]=='LIVESUPPORTAGENT_CUSTOMERSLIST'){
   $account_Id = $_GET["account_Id"];
   $liveSupportChat = new LiveSupportChat();
   $database = new Database();
   $customerListQuery = $liveSupportChat->query_view_listOfChatCustomers($account_Id);
   echo $database->getJSONData($customerListQuery);
 }
 else { echo 'MISSING_ACTION'; }
}
else { echo 'NO_ACTION'; }
?>