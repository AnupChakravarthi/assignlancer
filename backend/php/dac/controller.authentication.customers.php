<?php
session_start();

require_once '../api/app.initiator.php';
require_once '../api/app.database.php';
require_once '../dal/data.authentication.customers.php';
require_once '../util/util.identity.php';

$logger=Logger::getLogger("controller.authentication.customers.php");

if(isset($_GET["action"])){
 if($_GET["action"]=='VALIDATE_EMAIL_REGORNOT'){
   $email = $_GET["email"];
   $authentication = new CustomersAuthentication();
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
 else if($_GET["action"]=='CHECK_EMAILDUPLICATE_OTHERACCOUNTS'){
   $email = $_GET["email"];
   $account_Id = $_GET["account_Id"];
   $authentication = new CustomersAuthentication();
   $query =$authentication->query_check_emailDuplicateExists($email,$account_Id);
   $database = new Database();
   $jsondata = $database->getJSONData($query);
   $dejsondata = json_decode($jsondata);
   if(intval($dejsondata[0]->{'count(*)'})>0){
     echo 'DUPLICATE';
   } else {
     echo 'NONDUPLICATE';
   }
 }
 else if($_GET["action"]=='CREATE_ACCOUNT_BY_CUSTOMER'){
  $identity = new Identity();
  $account_Id = $identity->get_account_Id();
  $availStatus = $_GET["availStatus"];
  $name = $_GET["name"];
  $email = $_GET["email"];
  $acc_pwd = md5($_GET["acc_pwd"]);
  $createdOn = date('Y-m-d H:i:s');
  $country = $_GET["country"];
  $time_Id = '';
  $authentication = new CustomersAuthentication();
  $query = $authentication->query_addAccount($account_Id,$availStatus,$name,$email,
				$acc_pwd,$createdOn,$country,$time_Id);
  $database = new Database();
  echo $database->addupdateData($query);
  
  /* Send Email */
  $url='http://kalyanaveena.com/assignlancer/email.validateEmailAccount.php?';
  $url.='toAddress='.$email.'&account_Id='.$account_Id;
  echo file_get_contents($url);   
}
 else if($_GET["action"]=='UPDATE_EMAIL_VALIDATED'){
   $account_Id = $_GET["account_Id"]; 
   $email_val = 'Y';
   $authentication = new CustomersAuthentication();
   $query = $authentication->query_updateAccount($account_Id,'','','',$email_val,'');
   $database = new Database();
   $database->addupdateData($query);
   header('Location: '.$_SESSION["PROJECT_URL"].'login');
 }
 else if($_GET["action"]=='UPDATE_ACCOUNT_PROFILE'){
   $account_Id = $_GET["account_Id"]; 
   $availStatus = ''; if(isset($_GET["availStatus"])){ $availStatus = $_GET["availStatus"]; }
   $name = '';		  if(isset($_GET["name"])){ $name = $_GET["name"]; }
   $email = '';		  if(isset($_GET["email"])){ $email = $_GET["email"]; }
   $country = '';	  if(isset($_GET["country"])){ $country = $_GET["country"]; }
   $authentication = new CustomersAuthentication();
   $query = $authentication->query_updateAccount($account_Id,$availStatus,$name,$email,'',$country);
   $database = new Database();
   echo $database->addupdateData($query);
   /* Sessions */
   $_SESSION["ACCOUNT_AVAILSTATUS"] = $availStatus;
   $_SESSION["ACCOUNT_NAME"] = $name;
   $_SESSION["ACCOUNT_EMAIL"] = $email;
   $_SESSION["ACCOUNT_COUNTRY"] = $country;
 }
 else if($_GET["action"]=='UPDATE_ACCOUNT_PASSWORD'){
   $account_Id = $_GET["account_Id"];
   $oldPassword = $_GET["oldPassword"];
   $newPassword = $_GET["newPassword"];
   if($_SESSION["ACCOUNT_PASSWORD"]===$oldPassword){
     $authentication = new CustomersAuthentication();
     $query = $authentication->query_updatePwdAccount($account_Id,$oldPassword,$newPassword);
     $database = new Database();
     echo $database->addupdateData($query);
     $_SESSION["ACCOUNT_PASSWORD"] = $newPassword;
   } else {
      echo 'INVALID_PASSWORD';
   }
 }
 else if($_GET["action"]=='LOGIN_AUTHENTICATION'){ 
   $email = $_GET["email"]; 
   $acc_pwd = $_GET["acc_pwd"];
   $authentication = new CustomersAuthentication();
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
	   $_SESSION["ACCOUNT_COUNTRY"] = $dejsondata[0]->{'country'};
	   $_SESSION["ACCOUNT_PASSWORD"] = $dejsondata[0]->{'acc_pwd'};
	 echo 'CUSTOMER_AUTHENTICATED';
   } else {
     echo 'CUSTOMER_UNAUTHENTICATED';
   }
 }
}
else { echo 'MISSING_ACTION'; }
?>