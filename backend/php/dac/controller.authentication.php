<?php
session_start();

require_once '../api/app.initiator.php';
require_once '../api/app.database.php';
require_once '../dal/data.authentication.php';
require_once '../util/util.identity.php';

$logger=Logger::getLogger("controller.authentication.php");

if(isset($_GET["action"])){
 if($_GET["action"]=='VALIDATE_EMAIL_REGORNOT'){
   $email = $_GET["email"];
   $authentication = new Authentication();
   $query =$authentication->query_validate_emailRegOrNot($email);
   $database = new Database();
   $jsondata = $database->getJSONData($query);
   $dejsondata = json_decode($jsondata);
   if(intval($dejsondata[0]->{'count(*)'})>0){
     echo 'REGISTERED';
   } else {
     echo 'UNREGISTERED';
   }
 }
 else if($_GET["action"]=='CREATE_ACCOUNT_BY_CUSTOMER'){
  $identity = new Identity();
  $account_Id = $identity->get_account_Id();
  $accountType = $_GET["accountType"];
  $availStatus = $_GET["availStatus"];
  $name = $_GET["name"];
  $email = $_GET["email"];
  $acc_pwd = md5($_GET["acc_pwd"]);
  $createdOn = date('Y-m-d H:i:s');
  $authentication = new Authentication();
  $query = $authentication->query_addAccount($account_Id,$accountType,$availStatus,$name,$email,$acc_pwd,$createdOn);
  $database = new Database();
  echo $database->addupdateData($query);
  
  /* Send Email */
  $url='http://kalyanaveena.com/assignlancer/email.validateEmailAccount.php?';
  $url.='toAddress='.$email.'&account_Id='.$account_Id;
  echo file_get_contents($url);   
}
 else if($_GET["action"]=='CREATE_ACCOUNT_BY_LIVESUPPORT'){
  $identity = new Identity();
  $account_Id = $identity->get_account_Id();
  $accountType = $_GET["accountType"];
  $availStatus = $_GET["availStatus"];
  $name = $_GET["name"];
  $email = $_GET["email"];
  $acc_pwd = md5($_GET["acc_pwd"]);
  $createdOn = date('Y-m-d H:i:s');
  $authentication = new Authentication();
  $query = $authentication->query_addAccount($account_Id,$accountType,$availStatus,$name,$email,$acc_pwd,$createdOn);
  $database = new Database();
  echo $database->addupdateData($query);
 }
 else if($_GET["action"]=='UPDATE_EMAIL_VALIDATED'){
   $account_Id = $_GET["account_Id"]; 
   $email_val = 'Y';
   $authentication = new Authentication();
   $query = $authentication->query_updateAccount($account_Id,'','','','',$email_val);
   $database = new Database();
   $database->addupdateData($query);
   header('Location: '.$_SESSION["PROJECT_URL"].'login');
 }
 else if($_GET["action"]=='LOGIN_AUTHENTICATION'){
   $email = $_GET["email"];
   $acc_pwd = $_GET["acc_pwd"];
   $authentication = new Authentication();
   $query = $authentication->query_validate_UserAuthentication($email,$acc_pwd);
   $database = new Database();
   $jsondata = $database->getJSONData($query);
   $dejsondata = json_decode($jsondata);
   if(count($dejsondata)>0){
     /* Add to Session */
	   $_SESSION["ACCOUNT_TYPE"] = $dejsondata[0]->{'accountType'};
	   $_SESSION["ACCOUNT_ID"] = $dejsondata[0]->{'account_Id'};
	   $_SESSION["ACCOUNT_AVAILSTATUS"] = $dejsondata[0]->{'availStatus'};
	   $_SESSION["ACCOUNT_NAME"] = $dejsondata[0]->{'name'};
	   $_SESSION["ACCOUNT_EMAIL"] = $dejsondata[0]->{'email'};
	   $_SESSION["ACCOUNT_CREATED"] = $dejsondata[0]->{'createdOn'};
	 echo 'CUSTOMER_AUTHENTICATED';
   } else {
     echo 'CUSTOMER_UNAUTHENTICATED';
   }
 }
}
else { echo 'MISSING_ACTION'; }
?>