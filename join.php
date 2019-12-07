<?php

require_once "config.php";

$eid=$_GET['eid'];
$gid=$_GET['gid'];
session_start();
$uid=$_SESSION['uid'];


    $sql="INSERT INTO joined( eid,uid,pay) VALUES('$eid','$uid','n')";
    mysqli_query($conn,$sql);
    header("Location: events.php?gid=$gid");



?>
