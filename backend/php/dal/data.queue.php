<?php

class Queue {
  function query_addUserToQueue($queue_Id, $IPAddress, $SessionId, $toAgent, $queueOn, 
      $agentPicked, $chatFinished, $order_Id, $account_Id){
   $sql="INSERT INTO queue(queue_Id, IPAddress, SessionId, toAgent, queueOn, agentPicked, chatFinished, order_Id, account_Id) ";
   $sql.="SELECT * FROM (SELECT '".$queue_Id."' As queue_Id, '".$IPAddress."' As IPAddress, '".$SessionId."' As SessionId, ";
   $sql.="'".$toAgent."' As toAgent, '".$queueOn."' As queueOn, '".$agentPicked."' As agentPicked, ";
   $sql.=" '".$chatFinished."' As chatFinished, '".$order_Id."' As order_Id, '".$account_Id."' As account_Id) As tmp ";
   $sql.="WHERE (SELECT count(*) FROM queue WHERE (IPAddress='".$IPAddress."') AND (SessionId='".$SessionId."'))=0; ";
   return $sql;
  }
   
}

?>