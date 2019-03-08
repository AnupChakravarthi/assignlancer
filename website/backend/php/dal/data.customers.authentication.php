<?php
class CustomersAuthentication {
 function query_check_emailAddress($email){
  $sql="SELECT count(*) FROM custom_accounts WHERE email_Id='".$email."';";
  return $sql;
 }
 function query_add_customerAccount($account_Id, $availStatus, $name, $gender, $email_Id, $acc_pwd,
									$country, $tz, $currency){
  $sql="INSERT INTO custom_accounts(account_Id, availStatus, name, gender, email_Id, acc_pwd, createdOn, ";
  $sql.="email_val, country, tz, currency) ";
  $sql.="VALUES ('".$account_Id."','".$availStatus."','".$name."','".$gender."','".$email_Id;
  $sql.="','".$acc_pwd."','".date('Y-m-d H:i:s')."','N','".$country."','".$tz;
  $sql.="','".$currency."')";
  return $sql;
 }
 function query_data_getAccountByEmailOrId($emailOrId){
  $sql="SELECT * FROM custom_accounts WHERE account_Id='".$emailOrId."' OR email_Id='".$emailOrId."';";
  return $sql;
 }
 function query_check_validateEmailOnUpdate($account_Id,$email_Id){
  $sql="SELECT count(*) FROM custom_accounts WHERE NOT account_Id='".$account_Id."' AND (email_Id='".$email_Id."');";
  return $sql;
 }
 function query_update_updateEmailAddressOnCustomerAccount($account_Id,$email_Id){
  $sql="UPDATE custom_accounts SET email_Id='".$email_Id."' WHERE account_Id='".$account_Id."';";
  return $sql;
 }
 function query_delete_customerAccount($account_Id){
  $sql="DELETE FROM custom_accounts WHERE account_Id='".$account_Id."';";
  return $sql;
 }
 function query_update_customerAccountGeneralInfo($account_Id,$name,$gender,$country,$tz,$currency){
  $sql="UPDATE custom_accounts SET";
  $sql.=" name='".$name."',";
  $sql.=" gender='".$gender."',";
  $sql.=" country='".$country."',";
  $sql.=" tz='".$tz."',";
  $sql.="currency='".$currency."',";
  $sql=chop($sql,',');
  $sql.=" WHERE account_Id='".$account_Id."';";
  return $sql;
 }
 function query_update_customerAccountPassword($account_Id,$acc_pwd){
  $sql="UPDATE custom_accounts SET acc_pwd='".$acc_pwd."' WHERE account_Id='".$account_Id."';";
  return $sql;
 }
}
?>