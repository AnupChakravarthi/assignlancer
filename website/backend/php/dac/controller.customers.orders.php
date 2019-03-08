<?php
session_start();
require_once '../api/app.initiator.php';
require_once '../api/app.database.php';
require_once '../dal/data.customers.authentication.php';
require_once '../dal/data.customers.orders.php';
require_once '../util/util.identity.php';
if(isset($_GET["action"])){
 if($_GET["action"]==''){
 
 }
 else { echo 'INVALID_ACTION'; }
} else { echo 'NO_ACTION'; }
?>