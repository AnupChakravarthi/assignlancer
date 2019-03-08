<?php
session_start();
$target_dir = "../../../uploads/temp/";
$account_Id=$_POST["account_Id"];
if(!is_dir($target_dir.$account_Id)){ mkdir($target_dir.$account_Id); }
$target_file = $target_dir .$account_Id.'/'. basename($_FILES["uploadFile"]["name"]);
if (move_uploaded_file($_FILES["uploadFile"]["tmp_name"], $target_file)) {
 echo "The file ". basename( $_FILES["uploadFile"]["name"]). " has been uploaded.";
} else { echo "Sorry, there was an error uploading your file.";  }

?>