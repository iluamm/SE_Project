<?php
require_once 'connect.php';

$order_id = $_GET['id'];
$query = "SELECT * FROM order_transcript WHERE order_id = '".$order_id."'";
$result = mysqli_query($mysqli, $query);
$row = mysqli_fetch_row($result);
$flgDelete = unlink("transcript/$row[3]");
    $query = "DELETE FROM order_detail WHERE order_id='$order_id'";
    $objQuery = $mysqli -> query($query);
    echo "<script>";
    echo "alert('ลบสำเร็จ');";
    echo "window.history.back();";
    echo "</script>";
?>