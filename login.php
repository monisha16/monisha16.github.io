<?php
    require_once "config.php";

    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!empty($email) && !empty($password))
    {
        $sql = "SELECT uemail,upwd FROM user WHERE uemail='$email' AND upwd='$password' ";
        $run=mysqli_query($conn,$sql);
        if(mysqli_num_rows($run)>0)
        {
            header("Location: games.html");
        }
        else
        {
            echo "<script>alert('Give correct details');";
            echo 'window.location= "index.html"';
            echo "</script>";
        }
    }
?>