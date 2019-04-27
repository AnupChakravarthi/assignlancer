<?php
class LiveSupportChat {
  function query_view_listOfAgentsAvailable(){
    $sql="SELECT account_Id, availStatus, name, createdOn, country, usr_tz FROM ls_accounts ";
    return $sql;
  }
  function query_update_agentAvailability($account_Id){
    $sql="UPDATE ls_accounts SET availStatus='' WHERE account_Id='".$account_Id."';";
	return $sql;
  }
  function query_add_messageToQueue($queue_Id, $queueStatus, $IPAddress, $SessionId, $toAgent, $queueOn, $agentPicked, $chatFinished,
   $order_Id, $account_Id, $finished){
   $sql="INSERT INTO queue(queue_Id, queueStatus, IPAddress, SessionId, toAgent, queueOn, agentPicked, chatFinished, ";
   $sql.="order_Id, account_Id, finished) SELECT * FROM (";
   $sql.="SELECT '".$queue_Id."' As queue_Id, '".$queueStatus."' As queueStatus, '".$IPAddress."' As IPAddress, ";
   $sql.="'".$SessionId."' As SessionId, '".$toAgent."' As toAgent, '".$queueOn."' As queueOn, ";
   $sql.=" '".$agentPicked."' As agentPicked, '".$chatFinished."' As chatFinished, '".$order_Id."' As order_Id, ";
   $sql.="'".$account_Id."' As account_Id, '".$finished."' As finished) As tbl ";
   $sql.=" WHERE (SELECT count(*) FROM queue WHERE SessionId='".$SessionId."')=0;";
   return $sql;
  }
  function query_update_messageToQueue($queue_Id, $queueStatus, $IPAddress, $SessionId, $toAgent, $queueOn, $agentPicked, 
   $chatFinished, $order_Id, $account_Id, $finished){
    $sql="UPDATE queue SET ";
	if(strlen($queueStatus)>0){ $sql.="queueStatus='',"; }
	if(strlen($IPAddress)>0){ $sql.="IPAddress='',"; }
	if(strlen($SessionId)>0){ $sql.="SessionId='',"; }
	if(strlen($toAgent)>0){ $sql.="toAgent='',"; }
	if(strlen($agentPicked)>0){ $sql.="agentPicked='',"; }
	if(strlen($chatFinished)>0){ $sql.="chatFinished='',"; }
	if(strlen($order_Id)>0){ $sql.="order_Id='',"; }
	if(strlen($account_Id)>0){ $sql.="account_Id='',"; }
	if(strlen($finished)>0){ $sql.="finished='',"; }
	$sql.="WHERE queue_Id='';";
	return $sql;
  }

}
?>