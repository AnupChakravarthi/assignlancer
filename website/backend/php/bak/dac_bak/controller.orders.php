<?php
session_start();

require_once '../api/app.initiator.php';
require_once '../api/app.database.php';
require_once '../dal/data.authentication.php';
require_once '../util/util.identity.php';

$logger=Logger::getLogger("controller.orders.php");

if(isset($_GET["action"])){
 if($_GET["action"]=='CREATE_NEW_ORDER'){
   $identity = new Identity();
   $order_Id = $identity->get_order_Id();
   $order_status = 'ORDER_RAISED';
   $currency = '';          if(isset($_GET["currency"])){ $currency = $_GET["currency"]; }
   $actualPrice = '';       if(isset($_GET["actualPrice"])){ $actualPrice = $_GET["actualPrice"]; }
   $discountPercent = '';   if(isset($_GET["discountPercent"])){ $discountPercent = $_GET["discountPercent"]; }
   $finalPrice = '';        if(isset($_GET["finalPrice"])){ $finalPrice = $_GET["finalPrice"]; }
   $paidOn = '';            if(isset($_GET["paidOn"])){ $paidOn = $_GET["paidOn"]; }
   $support_Id = '';        if(isset($_GET["support_Id"])){ $support_Id = $_GET["support_Id"]; }
   $student_Id = '';        if(isset($_GET["student_Id"])){ $student_Id = $_GET["student_Id"]; }
   $orderTitle = '';        if(isset($_GET["orderTitle"])){ $orderTitle = $_GET["orderTitle"]; }
   $orderDesc = '';         if(isset($_GET["orderDesc"])){ $orderDesc = $_GET["orderDesc"]; }
   $expectedTs = '';        if(isset($_GET["expectedTs"])){ $expectedTs = $_GET["expectedTs"]; }
   $sundayFrom = '';        if(isset($_GET["sundayFrom"])){ $sundayFrom = $_GET["sundayFrom"]; }
   $sundayTo = '';          if(isset($_GET["sundayTo"])){ $sundayTo = $_GET["sundayTo"]; }
   $mondayFrom = '';        if(isset($_GET["mondayFrom"])){ $mondayFrom = $_GET["mondayFrom"]; }
   $mondayTo = '';          if(isset($_GET["mondayTo"])){ $mondayTo = $_GET["mondayTo"]; }
   $tuesdayFrom = '';       if(isset($_GET["tuesdayFrom"])){ $tuesdayFrom = $_GET["tuesdayFrom"]; }
   $tuesdayTo = '';         if(isset($_GET["tuesdayTo"])){ $tuesdayTo = $_GET["tuesdayTo"]; }
   $wednesdayFrom = '';     if(isset($_GET["wednesdayFrom"])){ $wednesdayFrom = $_GET["wednesdayFrom"]; }
   $wednesdayTo = '';       if(isset($_GET["wednesdayTo"])){ $wednesdayTo = $_GET["wednesdayTo"]; }
   $thursdayFrom = '';      if(isset($_GET["thursdayFrom"])){ $thursdayFrom = $_GET["thursdayFrom"]; }
   $thursdayTo = '';        if(isset($_GET["thursdayTo"])){ $thursdayTo = $_GET["thursdayTo"]; }
   $fridayFrom = '';        if(isset($_GET["fridayFrom"])){ $fridayFrom = $_GET["fridayFrom"]; }
   $fridayTo = '';          if(isset($_GET["fridayTo"])){ $fridayTo = $_GET["fridayTo"]; }
   $saturdayFrom = '';      if(isset($_GET["saturdayFrom"])){ $saturdayFrom = $_GET["saturdayFrom"]; }
   $saturdayTo = '';        if(isset($_GET["saturdayTo"])){ $saturdayTo = $_GET["saturdayTo"]; }
   $orders = new Orders();
   $query = $orders->query_add_newOrder($order_Id, $order_status, $currency, $actualPrice, $discountPercent, $finalPrice, $paidOn,
   $support_Id, $student_Id, $orderTitle, $orderDesc, $expectedTs, $sundayFrom, $sundayTo, $mondayFrom, $mondayTo, 
   $tuesdayFrom, $tuesdayTo, $wednesdayFrom, $wednesdayTo, $thursdayFrom, $thursdayTo, $fridayFrom, $fridayTo,
   $saturdayFrom, $saturdayTo);
   $database = new Database();
   echo $database->addupdateData($query);
 }
 else { echo 'NO_ACTION'; }
}
else { echo 'MISSING_ACTION'; }
?>