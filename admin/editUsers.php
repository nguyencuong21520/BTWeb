<?php
    if(isset($_POST['id'])){

        $id = $_POST['id'];
        $name = $_POST['name'];
        $pass = $_POST['pass'];
        $role = $_POST['role'];

        require("../config.php");
        $sql = "UPDATE users SET name='$name',password='$pass',permission='$role' where id='$id' ";
        if(mysqli_query($conn,$sql)){
            $status = "success";
            $response = "Cập nhập thành công";
        }else{
            $status = "error";
            $response = "Cập nhập Thất Bại";
        }
        exit(json_encode(array("status" => $status, "response" => $response)));
    }
?>