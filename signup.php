<?php

require_once "config.php";

$user=$_POST['uname'];
$email=$_POST['mail'];
$pass=$_POST['pass'];

$sql="SELECT * FROM user WHERE uemail='$email' AND upwd='$pass' "; 
$result=mysqli_query($conn,$sql);
$numrows=mysqli_num_rows($result);
if($numrows==1)
{
    echo "User Already Exists";
    
}
else
{ 
    $sql="INSERT INTO user(uname,uemail,upwd) VALUES('$user','$email','$pass')";
    mysqli_query($conn,$sql);
    header("Location: games.html");

}

?>