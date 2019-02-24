<?php
class LiveSupportTimings {
 function query_viewAll_agentsTimings(){
  $sql="SELECT time_Id, shift, startTime, endTime, timezone FROM ls_timings; ";
  return $sql;
 }
 
}

?>