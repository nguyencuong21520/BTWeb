<?php
session_start();
$error = ''; 
if (isset($_POST['submit'])) {
if (empty($_POST['email']) || empty($_POST['password'])) {
$error = "Thiếu email hoặc password";
}
else{
require("config.php");
$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT email, password from users where email=? AND password=? LIMIT 1";

$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$stmt->bind_result($email, $password);
$stmt->store_result();
if($stmt->fetch()){
    $_SESSION['login_user'] = $email; 
    header("location:./admin/users.php"); 
} else{
    $error ="Email hoặc mật khẩu sai";
}
}
}
?>