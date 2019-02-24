<?php
 class LiveChat {
   function query_addChat($chat_Id, $IPAddress, $SessionId, $title, $msg, $toAgent, $msg_On){
    $sql="INSERT INTO supportchat(chat_Id, IPAddress, SessionId, title, msg, toAgent, msg_On) ";
	$sql.="VALUES ('".$chat_Id."','".$IPAddress."','".$SessionId."','".$title."','".$msg."','".$toAgent."','".$msg_On."');";
	return $sql;
   }
   
   function query_getUserAgentChat($IPAddress,$SessionId,$toAgent){
    $sql="SELECT * FROM supportchat WHERE IPAddress='".$IPAddress."' AND SessionId='".$SessionId."' AND toAgent='".$toAgent."';";
    return $sql;
   }
 }
?>