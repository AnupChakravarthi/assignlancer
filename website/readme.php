<?php session_start();
include_once 'templates/api/api_params.php';
include_once 'templates/api/api_js.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>Assignlancer</title>
  <meta charset="utf-8">
  <link rel="icon" href="<?php echo $_SESSION["PROJECT_URL"]; ?>images/favicon.ico" type="image/gif" sizes="16x16">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/jquery.min.js"></script>
  <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?php echo $_SESSION["PROJECT_URL"]; ?>styles/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $_SESSION["PROJECT_URL"]; ?>styles/font-awesome.min.css">
<style>
.mtop15p { margin-top:15px; }
</style>
</head>
<body>
 <div class="container-fluid">
 <div class="row mtop15p">
   <div align="center" class="col-sm-12"><b>TASKS</b></div>
 </div>
 <div class="row mtop15p">
   <div class="col-sm-4">
    <!-- -->
	Administrator Login <span class="label label-success"><b>Success</b></span>
	<!-- -->
   </div>
 </div>
 </div>
</body>
</html>