<?php

require_once "config.php";

$ename=$_POST['e'];
$place=$_POST['place'];
$address=$_POST['address'];
$rules=$_POST['rules'];
$edate=$_POST['edate'];
$price=$_POST['price'];
$gid=$_GET['gid'];
session_start();
$uid=$_SESSION['uid'];


if(empty($price))
{
  $sql="INSERT INTO hosted (gid, uid, ename, eloc, erules, edate, price, place) VALUES ('$gid', '$uid', '	$ename', '$place', NULL, '$edate', '$price', '$address');";
 mysqli_query($conn,$sql);
 header("Location: games.html");

}
else
{
    $sql="INSERT INTO hosted (gid, uid, ename, eloc, erules, edate, price, place) VALUES ('$gid', '$uid', '	$ename', '$place', '$rules', '$edate', '$price', '$address');";
    mysqli_query($conn,$sql);
    header("Location: games.html");

}

?>
