<?php
session_start();

require_once '../api/app.initiator.php';
require_once '../api/app.database.php';
require_once '../util/util.identity.php';
require_once '../dal/data.queue.php';

$logger=Logger::getLogger("controller.livechat.php");

if(isset($_GET["action"])){
  if($_GET["action"]=='ADD_USER_QUEUE'){
   $idObj=new Identity();
   $queue_Id=$idObj->get_queue_Id();
   $IPAddress=$_SERVER['REMOTE_ADDR']; if($IPAddress=='::1') { $IPAddress='127.0.0.1'; }
   $SessionId=session_id();
   $toAgent='';
   $queueOn=date('Y-m-d H:i:s');
   $agentPicked='';
   $chatFinished='';
   $order_Id='';
   $account_Id='';
   $queueObj=new Queue();
   $query=$queueObj->query_addUserToQueue($queue_Id, $IPAddress, $SessionId, $toAgent, $queueOn, 
      $agentPicked, $chatFinished, $order_Id, $account_Id);
   $dbObj=new Database();  
   echo $dbObj->addupdateData($query);
  }
  else if($_GET["action"]=='GET_AGENT_CHATDATA'){
    $IPAddress=$_SERVER['REMOTE_ADDR'];
	$SessionId=session_id();
	$toAgent='';
	$liveChatObj=new LiveChat();
	$query=$liveChatObj->query_getUserAgentChat($IPAddress,$SessionId,$toAgent);
	$dbObj=new Database();
	$jsonData=$dbObj->getJSONData($query);
	echo $jsonData;
  }
}
else { echo 'MISSING_ACTION'; }
?>