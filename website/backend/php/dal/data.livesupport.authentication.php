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
}
?>