<?php
require_once 'connect.php';

$order_id = $_GET['id'];
$query = "UPDATE order_detail SET order_status = 'จัดเตรียมสินค้า'
WHERE order_id = '$order_id'";
$objQuery = $mysqli -> query($query);
    echo "<script>";
    echo "alert('ยืนยันสำเร็จ');";
    echo "window.history.back();";
    echo "</script>";
?>