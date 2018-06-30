<?php
session_start();

require_once '../api/app.initiator.php';
require_once '../api/app.database.php';

$logger=Logger::getLogger("controller.authentication.php");

?>