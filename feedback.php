<?php
require_once "config.php";


$to='monishatarkar16@gmail.com';
$feedback= $_POST['feedback'];
$headers= 'From: $from\n';
$subject='hello';
$from=$_POST['email'];
$n=$_POST['name'];

$message='<b>Name:</b>'.$n.'<br/><b>Email:</b>'.$from.'<br/><p>message is</p>'.$feedback.'</p>';

if(mail($to,$subject,$message,$headers))
{
echo "mail sent successfully";
}
else{
    echo "mail not sent";
}
?>