<?php
require_once '../util/util.file.management.php';

$UPLOAD_PATH='../../../uploads/';
$TEMP_FOLDER='temp/';
$DATA_FOLDER='data/';
$from_folder=$_GET["from_folder"];
$to_folder=$_GET["to_folder"];

$fileManagement = new FileManagement();
$fileManagement->rcopy($UPLOAD_PATH.$TEMP_FOLDER.$from_folder, $UPLOAD_PATH.$TEMP_FOLDER.$to_folder);
?>