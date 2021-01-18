<?php
require("config.php");
$sql = "select * from experience ORDER BY id DESC";
$lists = mysqli_query($conn,$sql);
$dataExperience = mysqli_fetch_all($lists);
?>