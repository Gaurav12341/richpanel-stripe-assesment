<?php
session_start();
include('db_connect.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $username= $_POST['name'];
    $useremail= $_POST['email'];
    $password=$_POST['password'];

    if(!empty($username) && !empty($useremail) &&!empty($password)){
        $query ="INSERT INTO users (name, email, password) VALUES ('$username', '$useremail', '$password')";
        mysqli_query($con,$query);
        header("Location: assets/login.php");
    }
    // else{
    //     echo('Passwword not match ');
    // }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Richpanel | Sign Up</title>
    <link rel="stylesheet" href="sign.css">
</head>
<body>
    <div class="main">
        <h2 class="formtitle">Create Account</h2>
        <form action="" method="post" class="form">
            <p>Name</p>
            <input type="text" name="name" placeholder="Enter Your Name">
            <p>Email</p>
            <input type="email" name="email" placeholder="Enter Your Email">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Your Password">
            
            <div class="check">
                <input type="checkbox" checked="checked" id="box"> Remember Me
            </div>
            <input type="submit" value="Login" class="Submit" id="Submit">
            <!-- <button class="signup"><a href="login.html"> Signup</a></button> -->
            <div class="foot">
                <span>Already have an account? <a href="assets/login.php">Login </a></span>
            </div>
        </form>
    </div>
</body>
<script>
</script>
</html>