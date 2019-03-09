<?php
 class CustomerOrders {
  function query_data_createNewOrder($order_Id, $topic, $topic_desc, $exp_time, $workType, $wordCount, $others){
   $sql="INSERT INTO custom_orders(order_Id, topic, topic_desc, exp_time, workType, wordCount, others) ";
   $sql.="VALUES ('".$order_Id."','".$topic."','".$topic_desc."','".$exp_time."','".$workType."','";
   $sql.=$wordCount."','".$others."');";
   return $sql;
  }
  function query_data_createMilestonesOnOrder($milestone_Id, $order_Id, $targetDate, $targetTask){
   $sql="INSERT INTO custom_orders_miles(milestone_Id, order_Id, targetDate, targetTask) ";
   $sql.="VALUES ('".$milestone_Id."', '".$order_Id."', '".$targetDate."', '".$targetTask."');";
   return $sql;
  }
 }
?>