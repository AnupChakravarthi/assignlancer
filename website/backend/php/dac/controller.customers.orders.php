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
  $order_Id = $_GET["order_Id"];
  $path = $_GET["path"]; // path - temp/data
  $UPLOAD_PATH = '../../../uploads/'.$path.'/'.$order_Id; 
  $fileManagement = new FileManagement();
  echo $fileManagement->get_listOfFiles($UPLOAD_PATH);
 }
 else if($_GET["action"]=='DELETE_SUPPORTINGFILES_ON_ORDER'){
   $order_Id = $_GET["order_Id"]; 
   $fileName = $_GET["fileName"];
   $path = $_GET["path"];
   $fileInAFolder = '../../../uploads/'.$path.'/'.$order_Id.'/'.$fileName;
   $fileManagement = new FileManagement();
   $fileManagement->deleteAFile($fileInAFolder);
 }
 else { echo 'INVALID_ACTION'; }
} else { echo 'NO_ACTION'; }
?>