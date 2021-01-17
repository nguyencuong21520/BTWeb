<?php
require("config.php");
$sql = "select * from aboutme where id =1 ";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    $dataAboutMe = mysqli_fetch_assoc($result);
}
?>
