<?php
 require_once '../api/app.initiator.php';
 require_once '../api/app.database.php';
 require_once '../dal/data.identity.php';
 
 class GenerateIdentity {
   /* accounts ::: account_Id (15) */
   function get_AdminAccount_Id(){
    $id='AA';
    for($index=0;$index<13;$index++){
      $id.=rand(0,9);
	}
	return $id;
   }
   /* accounts ::: account_Id (15) */
   function get_CustomerAccount_Id(){
    $id='CA';
    for($index=0;$index<13;$index++){
      $id.=rand(0,9);
	}
	return $id;
   }
   /* accounts ::: account_Id (15) */
   function get_LSAgentAccount_Id(){
    $id='LA';
    for($index=0;$index<13;$index++){
      $id.=rand(0,9);
	}
	return $id;
   }
   /* orders ::: order_Id (15) */
   function get_order_Id(){
    $id='UO';
    for($index=0;$index<13;$index++){
      $id.=rand(0,9);
	}
	return $id;
   }
   
   /* queue ::: queue_Id(10) */
   function get_queue_Id(){
    $id='UQ';
    for($index=0;$index<8;$index++){
      $id.=rand(0,9);
	}
	return $id;
   }
   
   /* supportchat ::: chat_Id(10) */
   function get_chat_Id(){
    $id='UC';
    for($index=0;$index<8;$index++){
      $id.=rand(0,9);
	}
	return $id;
   }
 }
 
 class Identity {
 
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
   
   function get_order_Id(){
     $genId=new GenerateIdentity();
	 $idQuery=new IdentityQuery();
	 $idObj=new Identity();
	 $id=$genId->get_order_Id();
	 $query=$idQuery->query_check_order_Id($id);
     $dbObj=new Database();
	 $jsonData=$dbObj->getJSONData($query);
	 $dejsonData=json_decode($jsonData);
	 if($dejsonData[0]->{'count(*)'}!='0'){
	    $id=$idObj->get_order_Id();
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