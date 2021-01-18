<?php
session_start();
$error = ''; 
$status ='';
if (isset($_POST['submit'])) {
if (empty($_POST['email']) || empty($_POST['password']) ||empty($_POST['cfpassword']) ||empty($_POST['name']) ) {
$error = "Không được để trống bất kì ô nào";
}
else{
require("config.php");
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$cfpassword = $_POST['cfpassword'];


$sql= mysqli_query($conn,"SELECT * FROM users where email='$email'");
if(mysqli_num_rows($sql)>0)
{
    $error = "Email đã tồn tại";
}
$passwordn = strlen($password);
if($passwordn < 6){
    $error = "Mật khẩu phải lớn hơn 6 kí tự";
}
if($password != $cfpassword){
    $error = "Mật khẩu phải trùng nhau";
}
if($error == ''){
    $query="INSERT INTO users(name, email, password,permission) VALUES ('$name', '$email', '$password', 0)";
        $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");
        $status = "success";
}

}
}
?>