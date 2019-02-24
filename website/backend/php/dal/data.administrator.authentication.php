<?php
class AdministratorAuthentication {
 function query_validate_administratorAccount($email_Id, $acc_pwd){
  $sql="SELECT * FROM admin_accounts WHERE email_Id='".$email_Id."' AND acc_pwd='".$acc_pwd."';";
  return $sql;
 }
 function query_updateInfo_administratorAccount($account_Id,$accountName,$email,$country,$currency,$timezone){
  $sql="UPDATE admin_accounts SET";
  if(strlen($accountName)>0){ $sql.=" name='".$accountName."',"; }
  if(strlen($email)>0){ $sql.=" email_Id='".$email."',"; }
  if(strlen($country)>0){ $sql.=" country='".$country."',"; }
  if(strlen($currency)>0){ $sql.=" currency='".$currency."',"; }
  if(strlen($timezone)>0){ $sql.=" timezone='".$timezone."',"; }
  $sql=chop($sql,",");
  $sql.="WHERE account_Id='".$account_Id."';";
   return $sql;
 }
 function query_checkPwd_administratorAccount($account_Id,$acc_pwd){
  $sql="SELECT count(*) FROM admin_accounts WHERE account_Id='".$account_Id."' AND acc_pwd='".md5($acc_pwd)."';";
  return $sql;
 }
 function query_updatePwd_administratorAccount($account_Id,$old_acc_pwd,$new_acc_pwd){
  $sql="UPDATE admin_accounts SET acc_pwd='".md5($new_acc_pwd)."' ";
  $sql.="WHERE account_Id='".$account_Id."' AND acc_pwd='".md5($old_acc_pwd)."';";
  return $sql;
 }
}
?>