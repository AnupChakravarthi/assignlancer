<?php

 class IdentityQuery {
    /* admin_accounts ::: account_Id (15) */
    function query_check_AdminAccount_Id($id){
	  $sql="SELECT count(*) FROM admin_accounts WHERE account_Id='".$id."';";
	  return $sql; 
	}
	/* custom_accounts ::: account_Id (15) */
    function query_check_CustomerAccount_Id($id){
	  $sql="SELECT count(*) FROM custom_accounts WHERE account_Id='".$id."';";
	  return $sql; 
	}
	/* ls_accounts ::: account_Id (15) */
    function query_check_LSAgentAccount_Id($id){
	  $sql="SELECT count(*) FROM ls_accounts WHERE account_Id='".$id."';";
	  return $sql; 
	}
    /* custom_orders ::: order_Id (15) */
	function query_check_CustomerAccountOrder_Id($id){
	  $sql="SELECT count(*) FROM custom_orders WHERE order_Id='".$id."';";
	  return $sql;
	}
	/* custom_orders_miles ::: milestone_Id (15) */
	function query_check_CustomerAccountOrderMilestone_Id($id){
	  $sql="SELECT count(*) FROM custom_orders_miles WHERE milestone_Id='".$id."';";
	  return $sql;
	}
	
	
	/* accounts ::: account_Id (15) */
	function query_check_account_Id($id){
	  $sql="SELECT count(*) FROM accounts WHERE account_Id='".$id."';";
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