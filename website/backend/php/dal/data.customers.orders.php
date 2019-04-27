<?php
 class CustomerOrders {
  function query_data_createNewOrder($order_Id, $account_Id, $topic, $topic_desc, $exp_time, $workType, 
			 $wordCount, $others){
   $sql="INSERT INTO custom_orders(order_Id, account_Id, topic, topic_desc, exp_time, workType, wordCount, others) ";
   $sql.="VALUES ('".$order_Id."','".$account_Id."','".$topic."','".$topic_desc."','".$exp_time."','".$workType."','";
   $sql.=$wordCount."','".$others."');";
   return $sql;
  }
  function query_data_createMilestonesOnOrder($milestone_Id, $order_Id, $targetDate, $targetTask){
   $sql="INSERT INTO custom_orders_miles(milestone_Id, order_Id, targetDate, targetTask) ";
   $sql.="VALUES ('".$milestone_Id."', '".$order_Id."', '".$targetDate."', '".$targetTask."');";
   return $sql;
  }
  function query_data_getAccountInfoByOrderId($order_Id){
   $sql="SELECT * FROM custom_accounts, custom_orders WHERE order_Id='".$order_Id."' AND ";
   $sql.="custom_accounts.account_Id=custom_orders.account_Id;";
   return $sql;
  }
  function query_data_getOrderMilestones($order_Id){
   $sql="SELECT * FROM custom_orders_miles WHERE order_Id='".$order_Id."';";
   return $sql;
  }
 }
?>