<?php include_once 'templates/api_params.php'; ?>
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
  selectAppInitHeader('appInitHeader-aboutUs');
  chatBoxInitilaizer();
});
</script>
<style>

</style>
</head>
<body>
<div id="chat_div"></div>
<?php include_once 'templates/api_init_header.php'; ?>
<div class="container-fluid"  style="background-color:#2196f3;">

<div class="row">
<div align="center" class="col-xs-12 col-md-12">
<h3 style="color:#fff;"><b>WHY US?</b></h3>
</div>
</div>

<div class="row">

<div align="center" class="col-xs-12 col-md-4">
<!-- Confidentiality ::: Start -->
<div class="list-group">
<div class="list-group-item">
<div align="center">
<i class="fa fa-3x fa-lock" style="color:#e91e63;" aria-hidden="true"></i>
</div>

<div align="center">
<h4 style="color:#e91e63;"><b>CONFIDENTIALITY</b></h4>
</div>

<div align="center">
We keep all the information about your order totally secure.
</div>

</div>
</div>
<!-- Confidentiality ::: End -->
</div>

<div align="center" class="col-xs-12 col-md-4">
<!-- Originality ::: Start -->
<div class="list-group">
<div class="list-group-item">
<div align="center">
<i style="color:#f99f1b;" class="fa fa-3x fa-check" aria-hidden="true"></i>
</div>

<div align="center">
<h4 style="color:#f99f1b;"><b>ORIGINALITY</b></h4>
</div>

<div align="center">
We guarentee you, you will get 100% Original Content.
</div>

</div>
</div>
<!-- Originality ::: End -->
</div>

<div align="center" class="col-xs-12 col-md-4">
<!-- Timeliness ::: Start -->
<div class="list-group">
<div class="list-group-item">

<div align="center">
<i style="color:#0f9614;" class="fa fa-3x fa-clock-o" aria-hidden="true"></i>
</div>

<div align="center">
<h4 style="color:#0f9614;"><b>TIMELINESS</b></h4>
</div>

<div align="center">
We will complete your assignment within a tight timeframe.
</div>

</div>
</div>
<!-- Timeliness ::: End -->
</div>

</div>

</div>
</body>
</html>