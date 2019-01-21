<?php
$to = $_GET["toAddress"];
$account_Id=$_GET["account_Id"];
$subject = 'Please Validate your Account from Assignlancer.';
 $msg='<html>';
  $msg.='<body>';
  $msg.='Thank you, for registering your acount with our Assignlancer.com. <br/>';
  $msg.='<h4><b>We provide you Good Service in completing your Assignments.</b></h4>';
  $msg.='<a href="http://localhost/assignlancer/validate/'.$account_Id.'">';
  $msg.='<button style="background-color:#2196f3;color:#fff;padding:10px;border:1px solid #fff;">';
  $msg.='Click Here to validate your Account.';
  $msg.='</button>';
  $msg.='</a>';
  $msg.='</body>';
  $msg.='</html>';
echo $msg;
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <admin@kalyanaveena.com>' . "\r\n";
mail($to,$subject,$msg,$headers);
?>