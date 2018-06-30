<?php

 class IdentityQuery {
 
    /* accounts ::: account_Id (15) */
	function query_check_account_Id($id){
	  $sql="SELECT count(*) FROM accounts WHERE account_Id='".$id."';";
	  return $sql; 
	}
	
    /* orders ::: order_Id (15) */
	function query_check_order_Id($id){
	  $sql="SELECT count(*) FROM orders WHERE order_Id='".$id."';";
	  return $sql;
	}
	
	/* queue ::: queue_Id(10) */
	function query_check_queue_Id($id){
	  $sql="SELECT count(*) FROM queue WHERE queue_Id='".$id."';";
	  return $sql;
	}
	
	/* supportchat ::: chat_Id(10) */
	function query_check_chat_Id($id){
	  $sql="SELECT count(*) FROM supportchat WHERE chat_Id='".$id."';";
	  return $sql;
	}
	
 }

?>