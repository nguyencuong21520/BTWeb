<?php
    if(isset($_POST['id'])){

        $id = $_POST['id'];
        $icon = $_POST['icon'];
        $link = $_POST['link'];
        require("../config.php");
        $sql = "UPDATE social SET icon='$icon',link='$link' where id='$id' ";
        if(mysqli_query($conn,$sql)){
            $status = "success";
            $response = "Cập nhập thành công";
        }
        exit(json_encode(array("status" => $status, "response" => $response)));
    }
?>