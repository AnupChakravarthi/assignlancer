<?php
session_start();

require_once '../api/app.initiator.php';
require_once '../api/app.database.php';
require_once '../dal/data.utils.php';
require_once '../util/util.identity.php';

$logger=Logger::getLogger("controller.utils.php");

if(isset($_GET["action"])){
 if($_GET["action"]=='GET_LIVESUPPORT_TIMINGS'){
   $time_Id = $_GET["time_Id"];
   $reqTimezone = $_GET["reqTimezone"];
   $utils = new Utils();
   $query = $utils->query_getLiveSupportTimings();
   $database = new Database();
   $jsondata = $database->getJSONData($query);
   $dejsondata = json_decode($jsondata);
   if(count($dejsondata)>0){ 
    $shift = $dejsondata[$time_Id]->{'shift'};
	$startTime = $dejsondata[$time_Id]->{'startTime'};
	$endTime = $dejsondata[$time_Id]->{'endTime'};
	$timezone = $dejsondata[$time_Id]->{'timezone'};
	
	$reqstartTimeObj = new DateTime($startTime, new DateTimeZone($timezone));
    $reqstartTimeObj->setTimezone(new DateTimeZone($reqTimezone));
    $reqendTimeObj = new DateTime($endTime, new DateTimeZone($timezone));
    $reqendTimeObj->setTimezone(new DateTimeZone($reqTimezone));
	
	$reqstartTime=$reqstartTimeObj->format('g:i A');
    $reqendTime=$reqendTimeObj->format('g:i A');
	
	$content='{';
	$content.='"time_Id":"'.$time_Id.'",';
	$content.='"shift":"'.$shift.'",';
	$content.='"startTime":"'.$reqstartTime.'",';
	$content.='"endTime":"'.$reqendTime.'",';
	$content.='"timezone":"'.$reqTimezone.'"';
	$content.='}';
	echo $content;
   }
   
 }
 else { echo 'NO_ACTION'; }
}
else { echo 'MISSING_ACTION'; }
?>