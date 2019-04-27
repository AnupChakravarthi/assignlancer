<?php
session_start();
$path=$_POST["path"];
$target_dir = "../../../uploads/".$path."/";
$dirName=$_POST["dirName"];
if(!is_dir($target_dir.$dirName)){ mkdir($target_dir.$dirName); }
$target_file = $target_dir .$dirName.'/'. basename($_FILES["uploadFile"]["name"]);
if (move_uploaded_file($_FILES["uploadFile"]["tmp_name"], $target_file)) {
 echo "The file ". basename( $_FILES["uploadFile"]["name"]). " has been uploaded.";
} else { echo "Sorry, there was an error uploading your file.";  }

?>