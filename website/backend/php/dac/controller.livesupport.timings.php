<?php
require_once '../api/app.initiator.php';
require_once '../api/app.database.php';
require_once '../dal/data.livesupport.timings.php';
require_once '../util/util.core.php';

if(isset($_GET["action"])){
 if($_GET["action"]=='GETAGENT_TIMINGS_BYTIMEZONE'){
   $req_timezone = $_GET["req_timezone"];
   $utilityCore = new UtilityCore();
   $liveSupportTimings = new LiveSupportTimings();
   $query = $liveSupportTimings->query_viewAll_agentsTimings();
   $database = new Database();
   $jsonData = $database->getJSONData($query);
   $dejsonData = json_decode($jsonData);
   if(isset($dejsonData)>0){
    $content='[';
    for($index=0;$index<count($dejsonData);$index++){
	 
     $time_Id = $dejsonData[$index]->{'time_Id'};
	 $shift = $dejsonData[$index]->{'shift'};
	 
	 $def_timezone = $dejsonData[$index]->{'timezone'};
	 $def_startTime = $dejsonData[$index]->{'startTime'};
	 $def_endTime = $dejsonData[$index]->{'endTime'};
	 $agents = $dejsonData[$index]->{'agents'};
	 
	 $req_startTime = $utilityCore->convertTimeFromTimezone($def_timezone,$def_startTime,$req_timezone);
	 $req_endTime = $utilityCore->convertTimeFromTimezone($def_timezone,$def_endTime,$req_timezone);
	 
	 $content.='{';
	 $content.='"time_Id":"'.$time_Id.'",';
	 $content.='"shift":"'.$shift.'",';
	 $content.='"startTime":"'.$req_startTime.'",';
	 $content.='"endTime":"'.$req_endTime.'",';
	 $content.='"agents":"'.$agents.'",';
	 $content.='"timezone":"'.$req_timezone.'"';
	 $content.='},';
    }
	$content=chop($content,',');
	$content.=']';
	echo $content;
   } else { echo '[]'; }
 } 
 else if($_GET["action"]=='SETAGENT_TIMINGS_BYTIMEZONE'){
  $req_timezone = 'Asia/Kolkata';
  $def_timezone = $_GET["def_timezone"];
  $def_earlyMrng_startTime = $_GET["def_earlyMrng_startTime"];
  $def_earlyMrng_endTime = $_GET["def_earlyMrng_endTime"]; 
  $def_mrng_startTime = $_GET["def_mrng_startTime"];
  $def_mrng_endTime = $_GET["def_mrng_endTime"];
  $def_evng_startTime = $_GET["def_evng_startTime"];
  $def_evng_endTime = $_GET["def_evng_endTime"];
  
  $utilityCore = new UtilityCore();
  $earlyMrng_startTime = $utilityCore->convertTimeFromTimezone($def_timezone,$def_earlyMrng_startTime,$req_timezone);
  $earlyMrng_endTime = $utilityCore->convertTimeFromTimezone($def_timezone,$def_earlyMrng_endTime,$req_timezone);
  $mrng_startTime = $utilityCore->convertTimeFromTimezone($def_timezone,$def_mrng_startTime,$req_timezone);
  $mrng_endTime = $utilityCore->convertTimeFromTimezone($def_timezone,$def_mrng_endTime,$req_timezone);
  $evng_startTime = $utilityCore->convertTimeFromTimezone($def_timezone,$def_evng_startTime,$req_timezone);
  $evng_endTime = $utilityCore->convertTimeFromTimezone($def_timezone,$def_evng_endTime,$req_timezone);
  
  $liveSupportTimings = new LiveSupportTimings();
  $query = $liveSupportTimings->query_update_agentTimings($earlyMrng_startTime,$earlyMrng_endTime, 
  $mrng_startTime,$mrng_endTime,$evng_startTime,$evng_endTime);
  
  $database = new Database();
  echo $database->addupdateData($query);
}
 else { echo 'MISSING_ACTION'; }
}
else { echo 'NO_ACTION'; }
?>