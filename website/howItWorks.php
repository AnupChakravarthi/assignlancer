<?php 
session_start();
include_once 'templates/api/api_params.php';
include_once 'templates/api/api_js.php';
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>Assignlancer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/jquery.min.js"></script>
  <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/jquery-ui.js"></script>
  <script type="text/javascript" src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/jquery.ui.chatbox.js"></script>
  <script type="text/javascript" src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/cookies.js"></script>
  <link type="text/css" href="<?php echo $_SESSION["PROJECT_URL"]; ?>styles/jquery.ui.chatbox.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo $_SESSION["PROJECT_URL"]; ?>styles/jquery-ui.css">
  <link rel="stylesheet" href="<?php echo $_SESSION["PROJECT_URL"]; ?>styles/core-skeleton.css">
  <link rel="stylesheet" href="<?php echo $_SESSION["PROJECT_URL"]; ?>styles/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $_SESSION["PROJECT_URL"]; ?>styles/font-awesome.min.css">
<script type="text/javascript">
$(document).ready(function(){
  selectAppInitHeader('appInitHeader-howItWorks');
  chatBoxInitilaizer();
});
</script>
<style>
body { background-color:#337ab7; }
</style>
</head>
<body>
<div id="chat_div"></div>
<?php include_once 'templates/api/api_init_header.php'; ?>
<div class="container-fluid" style="margin-top:10px;">
<div class="row">

<div class="col-xs-12 col-md-3">
<!-- -->
<div class="list-group">
<div class="list-group-item">
<h4><span class="label label-primary">1</span> <span style="color:#337ab7;"><b>Place your Order</b></span></h4>
</div>
</div>
<!-- -->
</div>

<div class="col-xs-12 col-md-3">
<!-- -->
<div class="list-group">
<div class="list-group-item">
<h4><span class="label label-primary">2</span> <span style="color:#337ab7;"><b>Complete Secure Payment</b></span></h4>
</div>
</div>
<!-- -->
</div>

<div class="col-xs-12 col-md-6">
<!-- -->
<div class="list-group">
<div class="list-group-item">
<h4><span class="label label-primary">3</span> <span style="color:#337ab7;"><b>Download your Drafts from your Dashboard</b></span></h4>
</div>
</div>
<!-- -->
</div>

<div class="col-xs-12 col-md-3">
<!-- -->
<div class="list-group">
<div class="list-group-item">
<h4><span class="label label-primary">4</span> <span style="color:#337ab7;"><b>Provide your Comments</b></span></h4>
</div>
</div>
<!-- -->
</div>


<div class="col-xs-12 col-md-3">
<!-- -->
<div class="list-group">
<div class="list-group-item">
<h4><span class="label label-primary">5</span> <span style="color:#337ab7;"><b>Download Final Paper</b></span></h4>
</div>
</div>
<!-- -->
</div>

</div>
</div>
</body>
</html>