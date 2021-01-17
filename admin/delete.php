<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $tableName = $_GET['tableName'];

}
require("../config.php");

$sql = "delete from $tableName where id = '$id'";
if(mysqli_query($conn, $sql)){
    header("location:$tableName.php");
}
?>