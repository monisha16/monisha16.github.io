<?php

// require_once "config.php";

// $user=$_POST['uname'];
// $email=$_POST['mail'];
// $pass=$_POST['pass'];

// $sql="SELECT * FROM user WHERE uemail='$email' AND upwd='$pass' "; 
// $result=mysqli_query($conn,$sql);
// $numrows=mysqli_num_rows($result);
// if($numrows==1)
// {
//     echo "User Already Exists";
    
// }
// else
// { 
//     $sql="INSERT INTO user(uname,uemail,upwd) VALUES('$user','$email','$pass')";
//     mysqli_query($conn,$sql);
//     header("Location: games.html");

// }

require_once "config.php";
// Define variables and initialize with empty values
$email = $pass = $name = "";
$email_err = $pass_err = $name_err ="";
$res_err = "";
$type_of_alert = "";
$mode = "";
// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

     // Validate name
     $input_name = trim($_POST["uname"]);
     if (empty($input_name)) {
         $name_err = "Please enter a name.";
     } else {
         $name = $input_name;
     }

    // Validate email
    $input_email = trim($_POST["mail"]);
    if (empty($input_email)) {
        $email_err = "Please enter a email.";
    } elseif (!filter_var($input_email, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/")))) {
        $email_err = "Please enter a valid email.";
    } else {
        $email = $input_email;
    }

    // Validate pass
    $input_pass = trim($_POST["pass"]);
    if (empty($input_pass)) {
        $pass_err = "Please enter an pass.";
    } else {
        $pass = $input_pass;
    }
   
    

    // Check input errors before inserting in database
    if (empty($email_err) && empty($pass_err) && empty($name_err)) 
    {
        $sql = "SELECT uemail FROM user WHERE uemail='$input_email'";
        $run=mysqli_query($conn,$sql);
        if(mysqli_num_rows($run)==0)
        {
            $sql="INSERT INTO user(uname,uemail,upwd) VALUES(?,?,?)";
            // $sql2 = "INSERT into users (email, name, phone, dob, sex) values(?,?,?,?,?)";
            if ($stmt = $conn->prepare($sql)) 
            {
                // Bind variables to the prepared statement as parameters
                $stmt->bind_param("sss",$_POST["uname"],$_POST['mail'], $_POST['pass']);
                if ($stmt->execute())
                    {
                        $sql = "SELECT uid FROM user WHERE uemail='$email' AND upwd='$pass' ";
                        $run=mysqli_query($conn,$sql);
                        $b=mysqli_fetch_row($run);
                        $uid=$b[0];
                        session_start();
                        $_SESSION['uid']=$uid;
                        header("Location: games.html");
                        exit();
                    } 
                else 
                    {
                        echo "Something went wrong. Please try again later.";
                    } 
            }   
            else 
            {
                $error = $conn->errno . ' ' . $conn->error;
                echo $error; // 1054 Unknown column 'foo' in 'field list'
            }
        }
        else{
            echo "<script> alert('User already exists.');";
            echo 'window.location= "index.php"';
            echo "</script>";
        }
    }

    // Close connection
    $conn->close();
}
?>