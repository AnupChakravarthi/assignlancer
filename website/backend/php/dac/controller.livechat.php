<?php
session_start();

require_once '../api/app.initiator.php';
require_once '../api/app.database.php';
require_once '../util/util.identity.php';
require_once '../dal/data.queue.php';

$logger=Logger::getLogger("controller.livechat.php");

if(isset($_GET["action"])){
  if($_GET["action"]=='ADD_USER_QUEUE'){
   $IPAddress=$_SERVER['REMOTE_ADDR']; if($IPAddress=='::1') { $IPAddress='127.0.0.1'; }
   $SessionId=session_id();
   $queueStatus='ONLINE';
   $toAgent='';
   $agentPicked='';
   $chatFinished='';
   $order_Id='';
   $account_Id='';
   $finished='N';
   $queueObj=new Queue();
   $dbObj=new Database();
   if(!isset($_SESSION["ADD_TO_QUEUE"])) {
     $idObj=new Identity();
     $queue_Id=$idObj->get_queue_Id();
     $queueOn=date('Y-m-d H:i:s');
     $query=$queueObj->query_addUserToQueue($queue_Id,$queueStatus, $IPAddress, $SessionId, $toAgent, $queueOn, 
                 $agentPicked, $chatFinished, $order_Id, $account_Id, $finished);
     $_SESSION["ADD_TO_QUEUE"]=$queueOn;
   }
   else {
	 $query=$queueObj->query_updateUserInQueue($queueStatus, $IPAddress, $SessionId, $toAgent, $agentPicked, 
                 $chatFinished, $order_Id, $account_Id, $finished); 
   }
   echo $dbObj->addupdateData($query);
  } 
  else if($_GET["action"]=='GET_ONLINE_QUEUELIST'){
	$queueObj=new Queue();
	$query=$queueObj->query_getQueueList();
	$dbObj=new Database();
	$jsonData=$dbObj->getJSONData($query);
	echo $jsonData;
  }
}
else { echo 'MISSING_ACTION'; }
?>