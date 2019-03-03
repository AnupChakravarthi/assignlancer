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
}
?>