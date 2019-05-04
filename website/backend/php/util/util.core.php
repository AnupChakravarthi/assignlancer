<?php
class UtilityCore {
 function convertTimeFromTimezone($fromTimezone,$fromTime,$toTimezone){
  $date = new DateTime($fromTime, new DateTimeZone($fromTimezone));
  $date->setTimezone(new DateTimeZone($toTimezone));
  return $date->format('h:i A');
 }
}
?>