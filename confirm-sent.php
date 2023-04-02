<?php
require_once 'connect.php';

$order_id = $_GET['id'];
$c_track = $_POST['c_track'];
$c_company = $_POST['c_company'];
$c_date = $mysqli -> real_escape_string($_POST['c_date']);

$sql= "INSERT INTO order_company (ocom_id,c_track,c_company,c_date,order_id)
    VALUES (NULL,'$c_track','$c_company','$c_date','$order_id')"; 
    $objQuery = $mysqli -> query($sql);

$sql2 = "UPDATE order_detail SET order_status = 'จัดส่งสำเร็จ'
    WHERE order_id = '$order_id'";
    $objQuery2 = $mysqli -> query($sql2);
    echo "<script>";
    echo "alert('ยืนยันข้อมูลสำเร็จ');";
    echo "</script>";
    header("location: http://localhost/SE_Project/checkordersent.php");
?>