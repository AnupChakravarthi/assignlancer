<?php
require_once '../api/app.initiator.php';
require_once '../api/app.database.php';
require_once '../util/util.identity.php';
require_once '../dal/data.queue.php';

$queueObj=new Queue();
$dbObj=new Database();
$query=$queueObj->query_setQueueToOFFLine();
echo $dbObj->addupdateData($query);

?>