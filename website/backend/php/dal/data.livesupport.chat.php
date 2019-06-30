<?php
class LiveSupportChat {

  function query_view_listOfAgentsAvailable(){
  /* =====================================
   *  QUERY DESCRIPTION:
   * =====================================
   *  This is the Query that brings total list of Live Support Agents who are registered in the
   *  Application
   * =====================================
   *  QUERY ACCESSED BY:
   * =====================================
   *
   */
    $sql="SELECT account_Id, availStatus, name, createdOn, country, usr_tz FROM ls_accounts ";
    return $sql;
  }
  
  function query_view_listOfAgentsOnline(){
  /* =====================================
   *  QUERY DESCRIPTION:
   * =====================================
   *  This is the Query that brings list of Live Support Agents who currently in Online
   * =====================================
   *  QUERY ACCESSED BY:
   * =====================================
   *  a) controller.livesupport.chat.php
   *      => Service - ADDUSER_TO_QUEUE
   */
   $sql="SELECT account_Id, availStatus, name, createdOn, country, usr_tz FROM ls_accounts WHERE availStatus='ONLINE';";
   return $sql;
  }
  
  function query_add_messageToQueue($queue_Id, $queueStatus, $IPAddress, $SessionId, 
		    $order_Id, $account_Id, $queueOn, $customerReview, $agentFeedBack){
  /* =======================================
   * QUERY DESCRIPTION:
   * =======================================
   * This is a Query to add User to the Chat Queue based on Unqiue IPAddress and SessionId.
   * =====================================
   *  QUERY ACCESSED BY:
   * =====================================
   *  a) controller.livesupport.chat.php
   *      => Service - ADDUSER_TO_QUEUE
   */
   $sql="INSERT INTO queue(queue_Id, queueStatus, IPAddress, SessionId, order_Id, account_Id, queueOn, customerReview, ";
   $sql.="agentFeedBack) SELECT * FROM (";
   $sql.="SELECT '".$queue_Id."' As queue_Id, '".$queueStatus."' As queueStatus, '".$IPAddress."' As IPAddress, ";
   $sql.="'".$SessionId."' As SessionId, '".$order_Id."' As order_Id, '".$account_Id."' As account_Id, ";
   $sql.=" '".$queueOn."' As queueOn, '".$customerReview."' As customerReview, '".$agentFeedBack."' As agentFeedBack) As tbl ";
   $sql.=" WHERE (SELECT count(*) FROM queue WHERE SessionId='".$SessionId."' AND IPAddress='".$IPAddress."')=0;";
   return $sql;
  }
  
  function query_add_supportchat($chat_Id,$queue_Id, $title, $msg, $toAgent){
  /* =======================================
   * QUERY DESCRIPTION:
   * =======================================
   * This is a Query to  store the Messages of Chat
   * =====================================
   *  QUERY ACCESSED BY:
   * =====================================
   *  a) controller.livesupport.chat.php
   *      => Service - SETSUPPORTCHAT
   */
   $sql="INSERT INTO supportchat(chat_Id, queue_Id, title, msg, toAgent, msg_On) ";
   $sql.="VALUES ('".$chat_Id."','".$queue_Id."','".$title."','".$msg."','".$toAgent."','".date('Y-m-d H:i:s')."');";
   return $sql;
  }
  
  function query_view_livesupportchathistory($account_Id){
  /* =======================================
   * QUERY DESCRIPTION:
   * =======================================
   * This is a Query to  store the Messages of Chat
   * =====================================
   *  QUERY ACCESSED BY:
   * =====================================
   *  a) controller.livesupport.chat.php
   *      => Service - LIVESUPPORTAGENT_CHATHISTORY
   */
    $sql="SELECT * FROM supportchat WHERE queue_Id=(SELECT queue_Id FROM supportchat WHERE toAgent='".$account_Id."');";
	return $sql;
  }
  
  
  function query_view_supportchat($queue_Id){
   $sql="SELECT * FROM `supportchat` WHERE queue_Id='".$queue_Id."'  ORDER BY msg_on ASC;";
   return $sql;
  }
  
  function query_update_agentAvailability($account_Id){
    $sql="UPDATE ls_accounts SET availStatus='' WHERE account_Id='".$account_Id."';";
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
  
  function query_view_customersInQueue(){
    $sql="SELECT * FROM queue;";
	return $sql;
  }
  
}
?>