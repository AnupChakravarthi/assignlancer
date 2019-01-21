<?php
$_SESSION["PROJECT_MODE"]='DEBUG'; // DEBUG / PROD
$_SESSION["USR_LANG"]='english';
if($_SESSION["PROJECT_MODE"]=='DEBUG'){
$_SESSION["PROJECT_VERSION_NUMBER"]='1.0';
$_SESSION["PROJECT_URL"]="http://".$_SERVER["HTTP_HOST"]."/assignlancer/website/";
} else {
$_SESSION["PROJECT_VERSION_NUMBER"]='1.0';
// $_SESSION["PROJECT_URL"]="http://.com/".$_SESSION["PROJECT_VERSION_NUMBER"]."/";
}
?>
<script type="text/javascript">
var PROJECT_URL = '<?php if(isset($_SESSION["PROJECT_URL"])) { echo $_SESSION["PROJECT_URL"]; } ?>';
var USR_LANG = '<?php if(isset($_SESSION["USR_LANG"])) { echo $_SESSION["USR_LANG"]; } ?>';
var SESSION_ID = '<?php echo session_id(); ?>';
var CLIENT_IPADDRESS = '<?php echo $_SERVER['REMOTE_ADDR']; ?>'; 
var QUEUE_ADDEDON = '<?php if(isset($_SESSION["ADD_TO_QUEUE"])) { echo $_SESSION["ADD_TO_QUEUE"]; } ?>';
/* ACCOUNT_HOLDERS */
var ACCOUNT_TYPE = '<?php if(isset($_SESSION["ACCOUNT_TYPE"])) { echo $_SESSION["ACCOUNT_TYPE"]; } ?>';
var ACCOUNT_ID = '<?php if(isset($_SESSION["ACCOUNT_ID"])) { echo $_SESSION["ACCOUNT_ID"]; } ?>';
var ACCOUNT_AVAILSTATUS = '<?php if(isset($_SESSION["ACCOUNT_AVAILSTATUS"])) { echo $_SESSION["ACCOUNT_AVAILSTATUS"]; } ?>';
var ACCOUNT_NAME = '<?php if(isset($_SESSION["ACCOUNT_NAME"])) { echo $_SESSION["ACCOUNT_NAME"]; } ?>';
var ACCOUNT_EMAIL = '<?php if(isset($_SESSION["ACCOUNT_EMAIL"])) { echo $_SESSION["ACCOUNT_EMAIL"]; } ?>';
var ACCOUNT_CREATED = '<?php if(isset($_SESSION["ACCOUNT_CREATED"])) { echo $_SESSION["ACCOUNT_CREATED"]; } ?>';
var ACCOUNT_COUNTRY = '<?php if(isset($_SESSION["ACCOUNT_COUNTRY"])) { echo $_SESSION["ACCOUNT_COUNTRY"]; } ?>';
var ACCOUNT_PASSWORD = '<?php if(isset($_SESSION["ACCOUNT_PASSWORD"])) { echo $_SESSION["ACCOUNT_PASSWORD"]; } ?>';
console.log("PROJECT_URL: "+PROJECT_URL);
console.log("USR_LANG: "+USR_LANG);
console.log("SESSION_ID: "+SESSION_ID);
console.log("CLIENT_IPADDRESS: "+CLIENT_IPADDRESS);
console.log("QUEUE_ADDEDON: "+QUEUE_ADDEDON);

console.log("ACCOUNT_TYPE: "+ACCOUNT_TYPE); // CUSTOMER_LIVESUPPORT / CUSTOMERS / ADMINISTRATOR
console.log("ACCOUNT_ID: "+ACCOUNT_ID);
console.log("ACCOUNT_AVAILSTATUS: "+ACCOUNT_AVAILSTATUS);
console.log("ACCOUNT_NAME: "+ACCOUNT_NAME);
console.log("ACCOUNT_EMAIL: "+ACCOUNT_EMAIL);
console.log("ACCOUNT_CREATED: "+ACCOUNT_CREATED);
console.log("ACCOUNT_COUNTRY: "+ACCOUNT_COUNTRY);
</script>