<?php
require_once '../api/app.initiator.php';
require_once '../api/app.database.php';
require_once '../dal/data.livesupport.chat.php';

if(isset($_GET["action"])){
 if($_GET["action"]=='ADDUSER_TO_QUEUE'){
   $queue_Id = ''; // Dynamic Number
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
   $liveSupportChat = new LiveSupportChat();
   $database = new Database();
   $query = $liveSupportChat->query_add_messageToQueue($queue_Id, $queueStatus, $IPAddress, $SessionId, $toAgent, 
     $queueOn, $agentPicked, $chatFinished, $order_Id, $account_Id, $finished);
	 echo $query;
   echo $database->addupdateData($query);
 }
 else { echo 'MISSING_ACTION'; }
}
else { echo 'NO_ACTION'; }
?>