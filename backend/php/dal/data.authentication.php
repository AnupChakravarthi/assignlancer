<?php

class Authentication {

  function query_validate_emailRegOrNot($email){
   $sql="SELECT count(*) FROM accounts WHERE email='".$email."';";
   return $sql;
  }
  
  function query_validate_UserAuthentication($email,$acc_pwd){
   $sql="SELECT * FROM accounts WHERE email='".$email."' AND acc_pwd='".md5($acc_pwd)."';";
   return $sql;
  }
  
  function query_addAccount($account_Id,$accountType,$availStatus,$name,$email,$acc_pwd,$createdOn){
    $sql="INSERT INTO accounts(account_Id, accountType, availStatus, name, email, acc_pwd,	createdOn, email_val)";
	$sql.="VALUES ('".$account_Id."','".$accountType."','".$availStatus."','".$name."','".$email."','".$acc_pwd."','";
	$sql.=$createdOn."','N');";
    return $sql; 
  }
  
  function query_updateAccount($account_Id,$availStatus,$name,$email,$acc_pwd,$email_val){
    $sql="UPDATE accounts SET ";
	if(strlen($availStatus)>0){ $sql.=" availStatus='".$availStatus."',"; }
	if(strlen($name)>0){ $sql.=" name='".$name."',"; }
	if(strlen($email)>0){ $sql.= " email='".$email."',"; }
	if(strlen($acc_pwd)>0){ $sql.=" acc_pwd='".$acc_pwd."',"; }
	if(strlen($email_val)>0){ $sql.=" email_val='".$email_val."'"; }
	$sql.=" WHERE account_Id='".$account_Id."';";
    return $sql; 
  }
  
  function query_deleteAccount($account_Id){
    $sql="DELETE FROM accounts WHERE account_Id='".$account_Id."';";
	return $sql; 
  }
  
  function query_count_getListOfAccount(){
    $sql="SELECT count(*) FROM accounts;";
	return $sql; 
  }
  function query_data_getListOfAccount($limit_start,$limit_end){
    $sql="SELECT * FROM accounts LIMIT ".$limit_start.",".$limit_end.";";
	return $sql; 
  }
}

?>