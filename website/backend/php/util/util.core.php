<?php
class UtilityCore {

 function convertTimeFromTimezone($fromTimezone,$fromTime,$toTimezone){
  $date = new DateTime($fromTime, new DateTimeZone($fromTimezone));
  $date->setTimezone(new DateTimeZone($toTimezone));
  return $date->format('h:i A');
 }
 
 function compareTimeStamp($timeStamp1,$timeStamp2){
  $time1 = strtotime($timeStamp1);
  $time2 = strtotime($timeStamp2);
  $time = $time1-$time2;
       if($time==0){ return 'SAME_TIME'; }
  else if($time<0){ return 'TIME1_LESS'; }
  else if($time>0){ return 'TIME1_GREATER'; }
 }
 
}

?>