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
  selectAppInitHeader('appInitHeader-contactUs');
  chatBoxInitilaizer();
});
</script>
</head>
<body>
<style>
body { background-color:#4caf50; }
</style>
<div id="chat_div"></div>
<?php include_once 'templates/api_init_header.php'; ?>
<div class="container-fluid" style="margin-top:5%;">
<div class="row">
 <div class="col-md-4">
 
 </div>
 <div class="col-md-4">
  <!-- -->
  <div class="list-group">
   <div class="list-group-item">
   
     <div class="container-fluid">
	 <div class="row">
     <div align="center" class="col-xs-12">
      <h4 style="letter-spacing:2px;"><b>Submit your Query</b></h4>
     </div>
	 <div class="col-xs-12">
	  <!-- -->
	  <div class="form-group">
	    <label>Name</label>
		<input type="text" class="form-control" placeholder="Enter your Name"/>
	  </div>
	  <div class="form-group">
	    <label>Email</label>
		<input type="text" class="form-control" placeholder="Enter your Email"/>
	  </div>
	  <div class="form-group">
	    <label>Subject</label>
		<input type="text" class="form-control" placeholder="Enter your Subject"/>
	  </div>
	  <div class="form-group">
	    <label>Message</label>
		<textarea type="text" class="form-control" placeholder="Enter your Message"></textarea>
	  </div>
	  <div class="form-group">
	   <button class="btn btn-primary form-control"><b>Send</b></button>
	  </div>
 	  <!-- -->
	 </div>
	 </div>
	 </div>
	 
   </div>
  </div>
  <!-- -->
 </div>
 <div class="col-md-4">
 
 </div>
</div>
</div>
</body>
</html>