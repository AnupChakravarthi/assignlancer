<?php
class LiveSupportAuthentication {
 function query_add_newLiveSupportAccount($account_Id, $availStatus, $name, $acc_pwd, $country, $usr_tz, $time_Id){
  $sql="INSERT INTO ls_accounts(account_Id, availStatus, name, acc_pwd, createdOn, country, usr_tz, time_Id) ";
  $sql.="VALUES ('".$account_Id."','".$availStatus."','".$name."','".$acc_pwd."','".date('Y-m-d')."','";
  $sql.=$country."','".$usr_tz."','".$time_Id."');";
  return $sql;
 }
 function query_view_liveSupportAccount(){
  $sql="SELECT * FROM ls_accounts, ls_timings WHERE ls_accounts.time_Id=ls_timings.time_Id;";
  return $sql;
 }
 function query_delete_liveSupportAccount($account_Id){
   $sql="DELETE FROM ls_accounts WHERE account_Id='".$account_Id."';";
   return $sql;
 }
 function query_update_liveSupportAccount($account_Id,$name,$country,$usr_tz,$time_Id){
  $sql="UPDATE ls_accounts SET";
  if(strlen($name)>0){ $sql.=" name='".$name."',"; }
  if(strlen($country)>0){ $sql.=" country='".$country."',"; }
  if(strlen($usr_tz)>0){ $sql.=" usr_tz='".$usr_tz."',"; }
  if(strlen($time_Id)>0){ $sql.=" time_Id='".$time_Id."',"; }
  $sql=chop($sql,',');
  $sql.="WHERE account_Id='".$account_Id."';";
  return $sql;
 }
 function query_updatePwd_liveSupportAccount($account_Id,$acc_pwd){
  $sql="UPDATE ls_accounts SET acc_pwd='".$acc_pwd."' WHERE account_Id='".$account_Id."';";
  return $sql;
 
 }
}
?>