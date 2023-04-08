<?php
require_once 'connect.php';

$rec_id = $_GET['id'];
$query = "DELETE FROM recommend WHERE rec_id = '".$rec_id."'";
    $objQuery = $mysqli -> query($query);
    echo "<script>";
    echo "alert('ลบสินค้าแนะนำสำเร็จ');";
    echo "window.history.back();";
    echo "</script>";
?>