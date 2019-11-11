<?php

session_start();

$conn = mysqli_connect('localhost','root','','web_proj');

if($conn==false)
{

    die("ERROR: Could not connect." .$conn->connect_error);

}




?>