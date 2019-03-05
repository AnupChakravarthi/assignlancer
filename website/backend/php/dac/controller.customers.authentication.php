<?php
session_start();
require_once '../api/app.initiator.php';
require_once '../api/app.database.php';
require_once '../dal/data.customers.authentication.php';
require_once '../util/util.identity.php';
if(isset($_GET["action"])){
 if($_GET["action"]=='CUSTOMER_CHECKEMAIL'){
  $email = $_GET["email"];
  $customersAuthentication = new CustomersAuthentication();
  $database = new Database();
  $query = $customersAuthentication->query_check_emailAddress($email);
  $count=json_decode($database->getJSONData($query))[0]->{'count(*)'};
  if(intval($count)>0){ echo 'EMAIL_ALREADY_EXISTS'; } 
  else { echo 'EMAIL_NOT_EXISTS'; }
 }
 else if($_GET["action"]=='CUSTOMER_ADDNEWACCOUNT'){
  $generateIdentity = new GenerateIdentity();
  $customersAuthentication = new CustomersAuthentication();
  $database = new Database();
  $account_Id = $generateIdentity->get_CustomerAccount_Id();
  $availStatus = 'OFFLINE';
  $name = $_GET["name"]; 
  $gender = $_GET["gender"];
  $email_Id = $_GET["email_Id"]; 
  $acc_pwd = md5($_GET["acc_pwd"]); 
  $country = $_GET["country"];
  $tz = $_GET["tz"];
  $currency = $_GET["currency"];
  $query = $customersAuthentication->query_add_customerAccount($account_Id, $availStatus, $name, $gender, $email_Id, 
				$acc_pwd, $country, $tz, $currency);
  echo $database->addupdateData($query);
 }
 else if($_GET["action"]=='CUSTOMER_GETACCOUNTINFOBYEMAILORID'){
  $emailOrId = $_GET["emailOrCustomerId"];
  $customersAuthentication = new CustomersAuthentication();
  $database = new Database();
  $query = $customersAuthentication->query_data_getAccountByEmailOrId($emailOrId);
  echo $database->getJSONData($query);
 }
 else if($_GET["action"]=='CUSTOMER_VALIDEMAILONUPDATE'){
  $account_Id = $_GET["account_Id"];
  $email_Id = $_GET["email_Id"];
  $customersAuthentication = new CustomersAuthentication();
  $database = new Database();
  $query = $customersAuthentication->query_check_validateEmailOnUpdate($account_Id,$email_Id);
  $count=json_decode($database->getJSONData($query))[0]->{'count(*)'};
  if(intval($count)>0){ echo 'EMAIL_ALREADY_EXISTS'; } 
  else { echo 'EMAIL_NOT_EXISTS'; } 
 }
 else if($_GET["action"]=='CUSTOMER_EMAILADDRESSUPDATE'){
  $account_Id = $_GET["account_Id"];
  $email_Id = $_GET["email_Id"];
  $customersAuthentication = new CustomersAuthentication();
  $database = new Database();
  $query = $customersAuthentication->query_update_updateEmailAddressOnCustomerAccount($account_Id,$email_Id);
  echo $database->addupdateData($query);
 }
 else if($_GET["action"]=='CUSTOMER_DELETEACCOUNT'){
  $account_Id = $_GET["account_Id"]; 
  $customersAuthentication = new CustomersAuthentication();
  $database = new Database();
  $query = $customersAuthentication->query_delete_customerAccount($account_Id);
  echo $database->addupdateData($query);
 }
 else { echo 'INVALID_ACTION'; }
} else { echo 'NO_ACTION'; }

?>