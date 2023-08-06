<?php
session_start();
include('../db_connect.php');
$msg=false;
if(isset($_POST['email'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query="select * from users where email='".$email."' AND password= '".$password."' limit 1";

    $result= mysqli_query($con, $query);
    if(mysqli_num_rows($result)==1){
        header("Location: monthly.php");
    }
    else{
        $msg="Incorrect Password";
        echo ($msg);
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Richpanel | Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="main">
        <h2 class="formtitle">Login to your Account</h2>
        <form action="" method="post" class="form">
         
            <p>Email</p>
            <input type="email" name="email" placeholder="Enter Your Email">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Your Password">
            
            <div class="check">
                <input type="checkbox" checked="checked" id="box"> Remember Me
            </div>
            <input type="submit" value="Login" class="Submit" id="Submit">
            <!-- <button class="signup"> <a href="monthly.html">Login</a>  </button> -->
            <div class="foot">
                <span>New to MyApp? <a href="../index.php">SignUp </a></span>
            </div>
        </form>
    </div>
</body>
</html>