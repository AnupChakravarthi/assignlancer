<?php
session_start();
require_once '../api/app.initiator.php';
require_once '../api/app.database.php';
require_once '../dal/data.customers.authentication.php';
require_once '../dal/data.customers.orders.php';
require_once '../util/util.identity.php';
require_once '../util/util.file.management.php';

if(isset($_GET["action"])){
 if($_GET["action"]=='GET_SUPPORTINGFILES_ON_ORDER'){
  $dirName = $_GET["dirName"];
  $path = $_GET["path"]; // path - temp/data
  $UPLOAD_PATH = '../../../uploads/'.$path.'/'.$dirName; 
  $fileManagement = new FileManagement();
  echo $fileManagement->get_listOfFiles($UPLOAD_PATH);
 }
 else if($_GET["action"]=='DELETE_SUPPORTINGFILES_ON_ORDER'){
   $dirName = $_GET["dirName"]; 
   $fileName = $_GET["fileName"];
   $path = $_GET["path"];
   $fileInAFolder = '../../../uploads/'.$path.'/'.$dirName.'/'.$fileName;
   $fileManagement = new FileManagement();
   $fileManagement->deleteAFile($fileInAFolder);
 }
 else if($_GET["action"]=='RESET_CUSTOMERORDER'){
   $dirName = $_GET["dirName"]; 
   $path = $_GET["path"];
   $fileInAFolder = '../../../uploads/'.$path.'/'.$dirName;
   $fileManagement = new FileManagement();
   $fileManagement->rrmdir($fileInAFolder);
 }
 else if($_GET["action"]=='CREATE_CUSTOMER_ORDERS'){
  /* Create New Order Params ::: Start */
  $identity = new Identity();
  $customerOrders = new CustomerOrders();
  $database = new Database();
  
  $order_Id=$identity->get_CustomerAccountOrder_Id();
  $customer_Id = $_GET["customer_Id"];
  $topic=$_GET["topic"]; 
  $topic_desc=$_GET["topic_desc"];
  $exp_time=$_GET["exp_time"];
  $workType=$_GET["workType"];
  $wordCount=$_GET["wordCount"];
  $others=$_GET["others"];
  
  
  $query01 = $customerOrders->query_data_createNewOrder($order_Id, $customer_Id, $topic, $topic_desc, $exp_time, 
								$workType, $wordCount, $others);
  echo $database->addupdateData($query01);
  if(isset($_GET["milestones"])){
  $milestones = $_GET["milestones"];
  for($index=0;$index<count($milestones);$index++){
    $milestone_Id = $identity->get_CustomerAccountOrderMilestone_Id();
    $targetDate = $milestones[$index]['date'];
	$targetTask = $milestones[$index]['target'];
	
	$query02 = $customerOrders->query_data_createMilestonesOnOrder($milestone_Id, $order_Id, $targetDate, $targetTask);
	echo $database->addupdateData($query02);
  }
  }
  
  /* Create New Order Params ::: End */
  /* File move from Temporary Folder to Permanent Folder ::: Start */
  $UPLOAD_PATH='../../../uploads/';
  $TEMP_FOLDER='temp/';
  $DATA_FOLDER='data/';
  $from_folder=$_GET["from_folder"];
  $to_folder=$order_Id;
  
  $fileManagement = new FileManagement();
  $fileManagement->rcopy($UPLOAD_PATH.$TEMP_FOLDER.$from_folder, $UPLOAD_PATH.$DATA_FOLDER.$to_folder);
  /* File move from Temporary Folder to Permanent Folder ::: End */

 }
 else { echo 'INVALID_ACTION'; }
} else { echo 'NO_ACTION'; }
?>