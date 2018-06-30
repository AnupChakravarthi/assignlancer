<?php

class authentication {

  function query_addAccount($account_Id,$accountType,$availStatus,$name,$email,$acc_pwd,$createdOn){
    $sql="INSERT INTO accounts(account_Id, accountType, availStatus, name, email, acc_pwd, 	createdOn)";
	$sql.="VALUES ('".$account_Id."','".$accountType."','".$availStatus."','".$name."','".$email."','".$acc_pwd."','".$createdOn."');";
    return $sql; 
  }
  
  function query_updateAccount($account_Id,$availStatus,$name,$email,$acc_pwd){
    $sql="UPDATE accounts SET availStatus='".$availStatus."', name='".$name."', email='".$email."',";
	$sql.="acc_pwd='".$acc_pwd."' WHERE account_Id='".$account_Id."';";
    return $sql; 
  }
  
  function query_deleteAccount(($account_Id){
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