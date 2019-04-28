<?php
session_start();
require_once '../api/app.initiator.php';
require_once '../api/app.database.php';
require_once '../dal/data.administrator.authentication.php';
require_once '../util/util.identity.php';

if(isset($_GET["action"])){
 if($_GET["action"]=='ADMINISTRATOR_LOGIN'){
   $email_Id = $_GET["email"];
   $acc_pwd = md5($_GET["acc_pwd"]);
   $administratorAuthentication = new AdministratorAuthentication();
   $query = $administratorAuthentication->query_validate_administratorAccount($email_Id, $acc_pwd);
   $database = new Database();
   $jsonData=json_decode($database->getJSONData($query));
   if(count($jsonData)>0){
     $_SESSION["HWG_ADMINISTRATOR_ACCOUNTID"]=$jsonData[0]->{'account_Id'};
	 $_SESSION["HWG_ACCOUNT_TYPE"]='ADMINISTRATOR';
	 $_SESSION["HWG_ADMINISTRATOR_NAME"]=$jsonData[0]->{'name'};
	 $_SESSION["HWG_ADMINISTRATOR_EMAIL"]=$jsonData[0]->{'email_Id'};
	 $_SESSION["HWG_ADMINISTRATOR_CREATEDON"]=$jsonData[0]->{'createdOn'};
	 $_SESSION["HWG_ADMINISTRATOR_COUNTRY"]=$jsonData[0]->{'country'};
	 $_SESSION["HWG_ADMINISTRATOR_CURRENCY"]=$jsonData[0]->{'currency'};
	 $_SESSION["HWG_ADMINISTRATOR_TIMEZONE"]=$jsonData[0]->{'timezone'};
   } else { echo 'ADMINISTRATOR_UNAUTHENTICATED'; }
 }
 else if($_GET["action"]=='ADMINISTRATOR_UPDATEPROFILE'){
   if(isset($_GET["account_Id"]) && isset($_GET["accountName"]) && isset($_GET["email"]) && 
   isset($_GET["country"]) && isset($_GET["currency"]) && isset($_GET["timezone"])){
   $account_Id=$_GET["account_Id"];
   $accountName=$_GET["accountName"];
   $email=$_GET["email"];
   $country=$_GET["country"];
   $currency=$_GET["currency"];
   $timezone=$_GET["timezone"];
   $administratorAuthentication = new AdministratorAuthentication();
   $query = $administratorAuthentication->query_updateInfo_administratorAccount($account_Id,$accountName,$email,
												$country,$currency,$timezone);
   $database = new Database();
   echo $database->addupdateData($query);
   if(strlen($accountName)>0){ $_SESSION["ADMINISTRATOR_NAME"]=$accountName; }
   if(strlen($email)>0){ $_SESSION["ADMINISTRATOR_EMAIL"]=$email; }
   if(strlen($country)>0){ $_SESSION["ADMINISTRATOR_COUNTRY"]=$country; }
   if(strlen($currency)>0){ $_SESSION["ADMINISTRATOR_CURRENCY"]=$currency; }
   if(strlen($timezone)>0){ $_SESSION["ADMINISTRATOR_TIMEZONE"]=$timezone; }
   } else {
      $content='Missing';
      if(isset($_GET["account_Id"])){ $content.=' account_Id,'; }
	  if(isset($_GET["accountName"])){ $content.=' accountName,'; }
	  if(isset($_GET["email"])){ $content.=' email,'; }
      if(isset($_GET["country"])){ $content.=' country,'; }
	  if(isset($_GET["currency"])){ $content.=' currency,'; }
	  if(isset($_GET["timezone"])){ $content.=' timezone,'; }
	  $content=chop($content,',');
	  echo $content;
   }
 }
 else if($_GET["action"]=='ADMINISTRATOR_UPDATEPWD'){
   if(isset($_GET["account_Id"]) && isset($_GET["old_acc_pwd"])){
    $account_Id=$_GET["account_Id"];
    $old_acc_pwd=$_GET["old_acc_pwd"];
    $new_acc_pwd=$_GET["new_acc_pwd"];
	
    $administratorAuthentication = new AdministratorAuthentication();
	$database = new Database();
	
	$query01 = $administratorAuthentication->query_checkPwd_administratorAccount($account_Id,$old_acc_pwd);
	$jsonData=json_decode($database->getJSONData($query01));
	if(intval($jsonData[0]->{'count(*)'})>0){
	  $query02 = $administratorAuthentication->query_updatePwd_administratorAccount($account_Id,$old_acc_pwd,$new_acc_pwd);
	  echo $database->addupdateData($query02);
	} else { echo 'INVALID_PASSWORD'; }
   } else {
      $content='Missing';
      if(isset($_GET["account_Id"])){ $content.=' account_Id,'; }
	  if(isset($_GET["old_acc_pwd"])){ $content.=' old_acc_pwd,'; }
	  if(isset($_GET["new_acc_pwd"])){ $content.=' new_acc_pwd,'; }
	  $content=chop($content,',');
	  echo $content;
   }
 }
 
 else { echo 'INVALID_ACTION'; }
} else { echo 'NO_ACTION'; }