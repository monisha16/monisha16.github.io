<?php

$to="bhatkaushikkateel@gmail.com";
$a="Feed back from ";
$b= $_POST['user'];
$sub=$a.$b;
$feedback=$_POST['feedback'];
 // $feedback="<html>
 //
 // <body>
 //
 //   <h1>Thank you for participating</h1>
 //   <h3>Your ID for the tournament is</h3>
 //   <div class='code' style='background:#45135e; padding:10vh;margin:10vh; width: 30vh;color:white; border-radius: 15px;'>
 //   <h2><span>123456</span></h2>
 //   </div>
 // <style class=''>
 //
 //
 // body{
 //   display: flex;
 //   flex-direction: column;
 //   align-items: center;
 //   justify-content:center;
 //   background:#202040;
 //   color: white;
 //   background-repeat: no-repeat;
 //   background-position: right top;
 //   background-attachment: fixed;
 //   padding: 0px;
 //   margin: 0px;
 //
 // }
 // h2{
 //   background: white;
 //   color: black;
 //   align-items: center;
 //   display: flex;
 //   justify-content: center;
 //  border-bottom: 6px solid #F04040;
 //  border-radius: 5px;
 // }
 //
 // }
 // </style>
 // </body></html>";
$usermail="  user email : ".$_POST['usermail'];
$message=$feedback.$usermail;
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .="From: Stadia of olympus user feedback";
if(mail($to,$sub,$message,$headers)){
  echo "<script>location.href='index.html'</script>";
}
else{
  echo "error! please try again later.";
}


 ?>
