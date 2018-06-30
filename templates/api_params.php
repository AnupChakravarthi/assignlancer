<?php
session_start();
if(!isset($_SESSION["PROJECT_URL"])){ $_SESSION["PROJECT_URL"]="http://".$_SERVER["HTTP_HOST"]."/assignlancer/"; }
?>
<script type="text/javascript">
var PROJECT_URL='<?php if(isset($_SESSION["PROJECT_URL"])) { echo $_SESSION["PROJECT_URL"]; } ?>';
var SESSION_ID='<?php echo session_id(); ?>';
var CLIENT_IPADDRESS='<?php echo $_SERVER['REMOTE_ADDR']; ?>';
console.log("PROJECT_URL: "+PROJECT_URL);
console.log("SESSION_ID: "+SESSION_ID);
console.log("CLIENT_IPADDRESS: "+CLIENT_IPADDRESS);
</script>