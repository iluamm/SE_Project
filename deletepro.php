<?php
require_once 'connect.php';

$promotion_id = $_GET['id'];
$query = "SELECT * FROM promotion WHERE promotion_id = '".$promotion_id."'";
$result = mysqli_query($mysqli, $query);
$row = mysqli_fetch_row($result);
$flgDelete = unlink("promotion/$row[5]");
    $query = "DELETE FROM promotion WHERE promotion_id='$promotion_id'";
    $objQuery = $mysqli -> query($query);
    if($objQuery){
        echo "<script>";
        echo "alert('ลบสำเร็จ');";
        echo "window.history.back();";
        echo "</script>";
    }else{
        echo "<script>";
        echo "alert('โปรโมชั่นนี้มีการใช้งานอยู่');";
        echo "window.history.back();";
        echo "</script>";
    }
?>