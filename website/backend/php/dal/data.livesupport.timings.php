<?php
class LiveSupportTimings {
 function query_viewAll_agentsTimings(){
  $sql="SELECT ls_timings.time_Id, ls_timings.shift, ls_timings.startTime, ls_timings.endTime, ls_timings.timezone, ";
  $sql.="(SELECT count(*) FROM ls_accounts WHERE ls_timings.time_Id=ls_accounts.time_Id) As agents FROM ls_timings; ";
  return $sql;
 }
 
 function query_update_agentTimings($earlyMrng_startTime,$earlyMrng_endTime, 
  $mrng_startTime,$mrng_endTime,$evng_startTime,$evng_endTime){
   $sql="UPDATE ls_timings SET startTime='".$earlyMrng_startTime."', endTime='".$earlyMrng_endTime."' ";
   $sql.="WHERE shift='Early Morning' AND timezone='Asia/Kolkata';";
   $sql.="UPDATE ls_timings SET startTime='".$mrng_startTime."', endTime='".$mrng_endTime."' ";
   $sql.="WHERE shift='Morning' AND timezone='Asia/Kolkata';";
   $sql.="UPDATE ls_timings SET startTime='".$evng_startTime."', endTime='".$evng_endTime."' ";
   $sql.="WHERE shift='Evening' AND timezone='Asia/Kolkata';";
   return $sql;
 }
 
}

?>