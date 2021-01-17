<?php
require("config.php");
$sql = "select * from skill";
$lists = mysqli_query($conn,$sql);
$dataSkill = mysqli_fetch_all($lists);
?>