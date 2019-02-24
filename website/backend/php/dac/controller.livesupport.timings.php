<?php
require_once '../api/app.initiator.php';
require_once '../api/app.database.php';
require_once '../dal/data.livesupport.timings.php';
require_once '../util/util.core.php';

if(isset($_GET["action"])){
 if($_GET["action"]=='GETAGENT_TIMINGS_BYTIMEZONE'){
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
	 
	 $req_timezone = $_GET["req_timezone"];
	 $req_startTime = $utilityCore->convertTimeFromTimezone($def_timezone,$def_startTime,$req_timezone);
	 $req_endTime = $utilityCore->convertTimeFromTimezone($def_timezone,$def_endTime,$req_timezone);
	 
	 $content.='{';
	 $content.='"time_Id":"'.$time_Id.'",';
	 $content.='"shift":"'.$shift.'",';
	 $content.='"startTime":"'.$req_startTime.'",';
	 $content.='"endTime":"'.$req_endTime.'",';
	 $content.='"timezone":"'.$req_timezone.'"';
	 $content.='},';
    }
	$content=chop($content,',');
	$content.=']';
	echo $content;
   } else { echo '[]'; }
 } else { echo 'MISSING_ACTION'; }
}
else { echo 'NO_ACTION'; }
?>