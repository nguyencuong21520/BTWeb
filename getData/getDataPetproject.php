<?php
require("config.php");
$sql = "select * from petproject";
$lists = mysqli_query($conn,$sql);
$dataPetproject = mysqli_fetch_all($lists);
?>