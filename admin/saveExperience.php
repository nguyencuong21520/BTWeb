<?php
        $name = $_POST['name'];
        $des = $_POST['des'];
        $time = $_POST['time'];
    require("../config.php");
    $sql = "INSERT INTO experience (time,title,des) VALUES ('$time','$name','$des')";
    if(mysqli_query($conn,$sql)){
        $status = "success";
        $response = "Cập nhập thành công";
    }else{
        $status = "error";
        $response = "Cập nhập Thất Bại";
    }
    exit(json_encode(array("status" => $status, "response" => $response)));
?>