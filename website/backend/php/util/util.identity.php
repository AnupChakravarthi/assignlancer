<?php
 require_once '../api/app.initiator.php';
 require_once '../api/app.database.php';
 require_once '../dal/data.identity.php';
 
 class GenerateIdentity {
   /* admin_accounts ::: account_Id (15) */
   function get_AdminAccount_Id(){
    $id='AA';
    for($index=0;$index<13;$index++){ $id.=rand(0,9); }
	return $id;
   }
   /* custom_accounts ::: account_Id (15) */
   function get_CustomerAccount_Id(){
    $id='CA';
    for($index=0;$index<13;$index++){ $id.=rand(0,9); }
	return $id;
   }
   /* ls_accounts ::: account_Id (15) */
   function get_LSAgentAccount_Id(){
    $id='LA';
    for($index=0;$index<13;$index++){ $id.=rand(0,9); }
	return $id;
   }
   /* custom_orders ::: order_Id (15) */
   function get_CustomerAccountOrder_Id(){
    $id='CO';
    for($index=0;$index<13;$index++){ $id.=rand(0,9); }
	return $id;
   }
   /* custom_orders_miles ::: milestone_Id (15) */
   function get_CustomerAccountOrderMilestone_Id(){
    $id='COM';
    for($index=0;$index<12;$index++){ $id.=rand(0,9); }
	return $id;
   }
   
   /* queue ::: queue_Id(10) */
   function get_queue_Id(){
    $id='UQ';
    for($index=0;$index<8;$index++){ $id.=rand(0,9); }
	return $id;
   }
   /* supportchat ::: chat_Id(10) */
   function get_chat_Id(){
    $id='UC';
    for($index=0;$index<8;$index++){ $id.=rand(0,9); }
	return $id;
   }
 }
 
 class Identity {
   /* admin_accounts ::: account_Id (15) */
   function get_AdminAccount_Id(){
     $genId=new GenerateIdentity();
	 $idQuery=new IdentityQuery();
	 $idObj=new Identity();
	 $id=$genId->get_AdminAccount_Id();
	 $query=$idQuery->query_check_AdminAccount_Id($id);
     $dbObj=new Database();
	 $jsonData=$dbObj->getJSONData($query);
	 $dejsonData=json_decode($jsonData);
	 if($dejsonData[0]->{'count(*)'}!='0'){ $id=$idObj->get_AdminAccount_Id(); }
	 return $id;
   }
   /* custom_accounts ::: account_Id (15) */
   function get_CustomerAccount_Id(){
     $genId=new GenerateIdentity();
	 $idQuery=new IdentityQuery();
	 $idObj=new Identity();
	 $id=$genId->get_CustomerAccount_Id();
	 $query=$idQuery->query_check_CustomerAccount_Id($id);
     $dbObj=new Database();
	 $jsonData=$dbObj->getJSONData($query);
	 $dejsonData=json_decode($jsonData);
	 if($dejsonData[0]->{'count(*)'}!='0'){ $id=$idObj->get_CustomerAccount_Id(); }
	 return $id;
   }
   /* ls_accounts ::: account_Id (15) */
   function get_LSAgentAccount_Id(){
     $genId=new GenerateIdentity();
	 $idQuery=new IdentityQuery();
	 $idObj=new Identity();
	 $id=$genId->get_LSAgentAccount_Id();
	 $query=$idQuery->query_check_LSAgentAccount_Id($id);
     $dbObj=new Database();
	 $jsonData=$dbObj->getJSONData($query);
	 $dejsonData=json_decode($jsonData);
	 if($dejsonData[0]->{'count(*)'}!='0'){ $id=$idObj->get_LSAgentAccount_Id(); }
	 return $id;
   }
   /* custom_orders ::: order_Id (15) */
   function get_CustomerAccountOrder_Id(){
     $genId=new GenerateIdentity();
	 $idQuery=new IdentityQuery();
	 $idObj=new Identity();
	 $id=$genId->get_CustomerAccountOrder_Id();
	 $query=$idQuery->query_check_CustomerAccountOrder_Id($id);
     $dbObj=new Database();
	 $jsonData=$dbObj->getJSONData($query);
	 $dejsonData=json_decode($jsonData);
	 if($dejsonData[0]->{'count(*)'}!='0'){
	    $id=$idObj->get_CustomerAccountOrder_Id();
	 }
	 return $id;
   }
   /* custom_orders_miles ::: milestone_Id (15) */
   function get_CustomerAccountOrderMilestone_Id(){
     $genId=new GenerateIdentity();
	 $idQuery=new IdentityQuery();
	 $idObj=new Identity();
	 $id=$genId->get_CustomerAccountOrderMilestone_Id();
	 $query=$idQuery->query_check_CustomerAccountOrderMilestone_Id($id);
     $dbObj=new Database();
	 $jsonData=$dbObj->getJSONData($query);
	 $dejsonData=json_decode($jsonData);
	 if($dejsonData[0]->{'count(*)'}!='0'){
	    $id=$idObj->get_CustomerAccountOrderMilestone_Id();
	 }
	 return $id;
   }
   
   function get_account_Id(){
     $genId=new GenerateIdentity();
	 $idQuery=new IdentityQuery();
	 $idObj=new Identity();
	 $id=$genId->get_account_Id();
	 $query=$idQuery->query_check_account_Id($id);
     $dbObj=new Database();
	 $jsonData=$dbObj->getJSONData($query);
	 $dejsonData=json_decode($jsonData);
	 if($dejsonData[0]->{'count(*)'}!='0'){
	    $id=$idObj->get_account_Id();
	 }
	 return $id;
   }
   
  
   function get_queue_Id(){
     $genId=new GenerateIdentity();
	 $idQuery=new IdentityQuery();
	 $idObj=new Identity();
	 $id=$genId->get_queue_Id();
	 $query=$idQuery->query_check_queue_Id($id);
     $dbObj=new Database();
	 $jsonData=$dbObj->getJSONData($query);
	 $dejsonData=json_decode($jsonData);
	 if($dejsonData[0]->{'count(*)'}!='0'){
	    $id=$idObj->get_queue_Id();
	 }
	 return $id;
   }
   
   function get_chat_Id(){
    $genId=new GenerateIdentity();
	 $idQuery=new IdentityQuery();
	 $idObj=new Identity();
	 $id=$genId->get_chat_Id();
	 $query=$idQuery->query_check_chat_Id($id);
     $dbObj=new Database();
	 $jsonData=$dbObj->getJSONData($query);
	 $dejsonData=json_decode($jsonData);
	 if($dejsonData[0]->{'count(*)'}!='0'){
	    $id=$idObj->get_chat_Id();
	 }
	 return $id;
   }
 }
?>