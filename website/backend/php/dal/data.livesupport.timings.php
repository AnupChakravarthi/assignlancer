<?php
class LiveSupportTimings {
 function query_viewAll_agentsTimings(){
  $sql="SELECT ls_timings.time_Id, ls_timings.shift, ls_timings.startTime, ls_timings.endTime, ls_timings.timezone, ";
  $sql.="(SELECT count(*) FROM ls_accounts WHERE ls_timings.time_Id=ls_accounts.time_Id) As agents FROM ls_timings; ";
  return $sql;
 }
 
}

?>