<?php

class Orders {

 function query_add_newOrder($order_Id, $order_status, $currency, $actualPrice, $discountPercent, $finalPrice, $paidOn,
   $support_Id, $student_Id, $orderTitle, $orderDesc, $expectedTs, $sundayFrom, $sundayTo, $mondayFrom, $mondayTo, 
   $tuesdayFrom, $tuesdayTo, $wednesdayFrom, $wednesdayTo, $thursdayFrom, $thursdayTo, $fridayFrom, $fridayTo,
   $saturdayFrom, $saturdayTo){
  $sql="INSERT INTO orders(order_Id, order_status, currency, actualPrice, discountPercent, finalPrice, paidOn, ";
  $sql.="support_Id, student_Id, orderTitle, orderDesc, expectedTs, sundayFrom, sundayTo, mondayFrom, mondayTo, ";
  $sql.="tuesdayFrom, tuesdayTo, wednesdayFrom, wednesdayTo, thursdayFrom, thursdayTo, fridayFrom, fridayTo, ";
  $sql.="saturdayFrom, saturdayTo) ";
  $sql.="VALUES ('".$order_Id."', '".$order_status."', '".$currency."', '".$actualPrice."', '".$discountPercent;
  $sql.="', '".$finalPrice."', '".$paidOn."', '".$support_Id."', '".$student_Id."', '".$orderTitle."', '".$orderDesc."','";
  $sql.=$expectedTs."', '".$sundayFrom."', '".$sundayTo."', '".$mondayFrom."', '".$mondayTo."', '".$tuesdayFrom."', '";
  $sql.=$tuesdayTo."', '".$wednesdayFrom."', '".$wednesdayTo."', '".$thursdayFrom."', '".$thursdayTo."', '".$fridayFrom."', '";
  $sql.=$fridayTo."', '".$saturdayFrom."', '".$saturdayTo."');";
  return $sql;
 }

}
?>