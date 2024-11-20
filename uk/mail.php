<?php
$login = explode("/", $_SERVER['DOCUMENT_ROOT']);

$to = 'support@freehost.com.ua';
$subject = 'Test message';
$message = 'Test message';

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= 'FROM: Test message <'.$login[4].'@'.$_SERVER['SERVER_NAME'].'>' . "\r\n";
//$headers .= "Bcc: birthday-archive@example.com\r\n"; 

$res=mail($to, $subject, $message, $headers);
if ($res)
  echo "true";
else
  echo "false";
?>