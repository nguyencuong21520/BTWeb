<?php
        $icon = $_POST['icon'];
        $link = $_POST['link'];
        require("../config.php");
        $sql = "INSERT INTO social(icon,link) VALUES ('$icon','$link')";
        if(mysqli_query($conn,$sql)){
            $status = "success";
            $response = "Cập nhập thành công";
        }else{
            $status = "error";
            $response = "Cập nhập Thất Bại";
        }
        exit(json_encode(array("status" => $status, "response" => $response)));
?>