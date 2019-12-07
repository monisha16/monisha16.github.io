<?php
    require_once "config.php";

    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!empty($email) && !empty($password))
    {
        $sql = "SELECT uid,uemail,upwd FROM user WHERE uemail='$email' AND upwd='$password' ";
        $run=mysqli_query($conn,$sql);
        if(mysqli_num_rows($run)>0)
        {
          $sql = "SELECT uid FROM user WHERE uemail='$email' AND upwd='$password' ";
          $run=mysqli_query($conn,$sql);
          $b=mysqli_fetch_row($run);
          $uid=$b[0];
          session_start();
          $_SESSION['uid']=$uid;
            header("Location: games.html");
        }
        else
        {
            echo "<script>alert('Give correct details');";
            echo 'window.location= "index.php"';
            echo "</script>";
        }
    }
?>
