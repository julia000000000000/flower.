<?php

ini_set('display_errors','On');
error_reporting('E_ALL');

$to = 'salyha_yuliia@vpu21.if.ua'; 
$sitename = $_SERVER['SERVER_NAME'];
 $number  = strip_tags($_POST['number']);
    $name  = strip_tags($_POST['name']);
    $email  = strip_tags($_POST['email']);
    $message  = strip_tags($_POST['message']);

if (isset($_POST['number']) && !empty($_POST['number']))
{
   
    $subject  = "[Zajavka s sajta ".$sitename."]";
    $headers  = "From: gmail@".$sitename." \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";

    $msg  = "<html><body style='font-family:Arial,sans-serif;'>";
    $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'></h2>\r\n";
    if(isset($_POST['name']) && !empty($_POST['name'])){
      $msg .= "<p><strong>Name</strong> ".$name."</p>\r\n";
    }
    if(isset($_POST['number']) && !empty($_POST['number'])){
      $msg .= "<p><strong>Number</strong> ".$phone."</p>\r\n";
    }
    if(isset($_POST['email']) && !empty($_POST['email'])){
      $msg .= "<p><strong>E-mail:</strong> ".$email."</p>\r\n";
    }
    if(isset($_POST['message']) && !empty($_POST['message'])){
      $msg .= "<p><strong>Message</strong> ".$message."</p>\r\n";
    }
    $msg .= "</body></html>";
  

    mail($to, $subject, $msg, $headers);
}
else
{
    echo "false";
}
?>