<?php
    if(isset($_POST['id'])){

        $id = $_POST['id'];
        $name = $_POST['name'];
        $des = $_POST['des'];
        $time = $_POST['time'];
        require("../config.php");
        $sql = "UPDATE education SET title='$name', des='$des',time='$time' where id='$id' ";
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