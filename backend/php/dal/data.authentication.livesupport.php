<?php

class LiveSupportAuthentication {

  function query_validate_emailRegOrNot($email){
   $sql="SELECT count(*) FROM accounts WHERE email='".$email."' AND accountType='CUSTOMER_LIVESUPPORT';";
   return $sql;
  }
  
  function query_check_emailDuplicateExists($email,$account_Id){
   $sql="SELECT count(*) FROM accounts WHERE email ='".$email."' AND NOT account_Id='".$account_Id."' AND ";
   $sql.="accountType='CUSTOMER_LIVESUPPORT';";
   return $sql;
  }
  
  function query_validate_UserAuthentication($email,$acc_pwd){
   $sql="SELECT * FROM accounts WHERE email='".$email."' AND acc_pwd='".md5($acc_pwd)."' AND accountType='CUSTOMER_LIVESUPPORT';";
   return $sql;
  }
  
  function query_addAccount($account_Id,$availStatus,$name,$email,$acc_pwd,$createdOn,$country,$time_Id){
    $sql="INSERT INTO accounts(account_Id, accountType, availStatus, name, email, acc_pwd,	createdOn, email_val, country,";
	$sql.="time_Id) VALUES ('".$account_Id."','CUSTOMER_LIVESUPPORT','".$availStatus."','".$name."','".$email."','".$acc_pwd."','";
	$sql.=$createdOn."','N','".$country."','".$time_Id."');";
    return $sql; 
  }
  
  function query_updateAccount($account_Id,$availStatus,$name,$email,$email_val,$country){
    $sql="UPDATE accounts SET ";
	if(strlen($availStatus)>0){ $sql.=" availStatus='".$availStatus."',"; }
	if(strlen($name)>0){ $sql.=" name='".$name."',"; }
	if(strlen($email)>0){ $sql.= " email='".$email."',"; }
	if(strlen($email_val)>0){ $sql.=" email_val='".$email_val."',"; }
	if(strlen($country)>0){ $sql.=" country='".$country."',"; }
	$sql=chop($sql,',');
	$sql.=" WHERE account_Id='".$account_Id."' AND accountType='CUSTOMER_LIVESUPPORT';";
    return $sql; 
  }
  
  function query_updatePwdAccount($account_Id,$oldPassword,$newPassword){
    $sql="UPDATE accounts SET acc_pwd='".md5($newPassword)."' ";
	$sql.="WHERE account_Id='".$account_Id."' AND acc_pwd='".md5($oldPassword)."' AND accountType='CUSTOMER_LIVESUPPORT';";
	return $sql; 
  }
  
  function query_deleteAccount($account_Id){
    $sql="DELETE FROM accounts WHERE account_Id='".$account_Id."' AND accountType='CUSTOMER_LIVESUPPORT';";
	return $sql; 
  }
  
  function query_count_getListOfAccount(){
    $sql="SELECT count(*) FROM accounts WHERE accounts.accountType='CUSTOMER_LIVESUPPORT';";
	return $sql; 
  }
  function query_data_getListOfAccount($limit_start,$limit_end){
    $sql="SELECT accounts.account_Id, accounts.accountType, accounts.availStatus, ";
	$sql.="accounts.name, accounts.email, accounts.createdOn, accounts.country, ls_timings.time_Id, ";
	$sql.="ls_timings.shift, TIME_FORMAT(ls_timings.startTime,'%h:%i %p') As startTime, ";
	$sql.="TIME_FORMAT(ls_timings.endTime,'%h:%i %p') As endTime, ";
	$sql.="ls_timings.timezone FROM accounts, ls_timings WHERE accounts.accountType='CUSTOMER_LIVESUPPORT' ";
	$sql.="AND accounts.time_Id = ls_timings.time_Id LIMIT ".$limit_start.",".$limit_end.";";
	return $sql; 
  }
}

?>