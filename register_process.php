<?php
include 'db_config.php';
$error = "";

if(isset($_POST['submit'])){
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $fname = $_POST['fullname'];

    if(empty($user)||empty($email)||empty($pass)||empty($fname)){
        $error="All fields are required!";
    } else {
        $hashed_pass=password_hash($pass,PASSWORD_DEFAULT);

        $sql="INSERT INTO users (username,email,password,fullname)
              VALUES ('$user','$email','$hashed_pass','$fname')";

        if(mysqli_query($conn,$sql)){
            header("Location: login_view.php");
            exit();
        }
    }
}
?>