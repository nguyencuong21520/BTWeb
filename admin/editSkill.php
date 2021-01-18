<?php
    if(isset($_POST['id'])){

        $id = $_POST['id'];
        $name = $_POST['name'];
        $icon = $_POST['icon'];
        $quan = $_POST['quan'];
        $color = $_POST['color'];

        require("../config.php");
        $sql = "UPDATE skill SET icon='$icon',name='$name', quantity='$quan',color='$color' where id='$id' ";
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