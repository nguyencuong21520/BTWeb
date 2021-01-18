<?php
    $name = $_POST['name'];
    $icon = $_POST['icon'];
    $quan = $_POST['quan'];
    $color = $_POST['color'];
    require("../config.php");
    $sql = "INSERT INTO skill (name,icon,quantity,color) VALUES ('$name','$icon','$quan','$color')";
    if(mysqli_query($conn,$sql)){
        $status = "success";
        $response = "Cập nhập thành công";
    }else{
        $status = "error";
        $response = "Cập nhập Thất Bại";
    }
    exit(json_encode(array("status" => $status, "response" => $response)));
?>