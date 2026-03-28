<?php
session_start();
include 'db_config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login_view.php");
    exit();
}

$uid = $_SESSION['user_id'];
$query = mysqli_query($conn, "SELECT * FROM users WHERE id='$uid'");
$user = mysqli_fetch_assoc($query);
?>