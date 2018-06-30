<?php

class Queue {
  function query_addUserToQueue($queue_Id, $queueStatus, $IPAddress, $SessionId, $toAgent, $queueOn, 
      $agentPicked, $chatFinished, $order_Id, $account_Id,$finished){
   $sql="INSERT INTO queue(queue_Id, queueStatus, IPAddress, SessionId, toAgent, queueOn, agentPicked, chatFinished, order_Id, account_Id,finished) ";
   $sql.="SELECT * FROM (SELECT '".$queue_Id."' As queue_Id, '".$queueStatus."' As queueStatus, '".$IPAddress."' As IPAddress, ";
   $sql.=" '".$SessionId."' As SessionId, ";
   $sql.=" '".$toAgent."' As toAgent, '".$queueOn."' As queueOn, '".$agentPicked."' As agentPicked, ";
   $sql.=" '".$chatFinished."' As chatFinished, '".$order_Id."' As order_Id, '".$account_Id."' As account_Id, ";
   $sql.=" '".$finished."' As finished) As tmp ";
   $sql.="WHERE (SELECT count(*) FROM queue WHERE (IPAddress='".$IPAddress."') AND (SessionId='".$SessionId."'))=0; ";
   return $sql;
  }
   
  function query_updateUserInQueue($queueStatus, $IPAddress, $SessionId, $toAgent, $agentPicked, 
      $chatFinished, $order_Id, $account_Id, $finished){
   $sql="UPDATE queue SET ";
   if(strlen($queueStatus)>0){ $sql.=" queueStatus='".$queueStatus."', "; }
   if(strlen($toAgent)>0){ $sql.=" toAgent='".$toAgent."', "; }
   if(strlen($agentPicked)>0){ $sql.=" agentPicked='".$agentPicked."', "; }
   if(strlen($chatFinished)>0){ $sql.=" chatFinished='".$chatFinished."', "; }
   if(strlen($order_Id)>0){ $sql.=" order_Id='".$order_Id."', "; }
   if(strlen($account_Id)>0){ $sql.=" account_Id='".$account_Id."' "; }
   if(strlen($finished)>0){ $sql.=" finished='".$finished."' "; }
   $sql=chop($sql,', ');
   $sql.=" WHERE IPAddress='".$IPAddress."' AND SessionId='".$SessionId."';";
   return $sql;
  }
  
  function query_setQueueToOFFLine(){
    $sql="UPDATE queue SET queueStatus='OFFLINE' WHERE MINUTE(queueOn)>20";
	return $sql;
  }
  
  function query_getQueueList(){
    $sql="SELECT * FROM queue WHERE queueStatus='ONLINE' AND toAgent='';";
	return $sql;
  }
}

?>