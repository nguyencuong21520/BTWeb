<?php
require("config.php");
$sql = "select * from education ORDER BY id DESC";
$lists = mysqli_query($conn,$sql);
$dataEducation = mysqli_fetch_all($lists);
?>