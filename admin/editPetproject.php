<?php
    if(isset($_POST['id'])){

        $id = $_POST['id'];
        $name = $_POST['name'];
        $des = $_POST['des'];
        $sdes = $_POST['sdes'];
        $type = $_POST['type'];
        $link = $_POST['link'];
        $img = $_POST['img'];


        require("../config.php");
        $sql = "UPDATE petproject SET name='$name', briefdes='$sdes',detaildes='$des',link='$link' where id='$id' ";
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