<?php
require("config.php");
$sql = "select * from social";
$lists = mysqli_query($conn,$sql);
$dataSocial = mysqli_fetch_all($lists);
?>