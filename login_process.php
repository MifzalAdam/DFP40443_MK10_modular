<?php
session_start();
include 'db_config.php';

$error = "";

if(isset($_POST['login'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username='$user'");
    $row = mysqli_fetch_assoc($result);

    if($row && password_verify($pass,$row['password'])){
        $_SESSION['user_id'] = $row['id'];
        header("Location: dashboard_view.php");
        exit();
    } else {
        $error = "Invalid Username or Password";
    }
}
?>