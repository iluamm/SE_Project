<?php
session_start();
require_once 'connect.php';
$order_id=$_GET['id'];

if(isset($_POST['paymentupdate'])){

    $order_status = $_POST['order_status'];
    $sql = "UPDATE order_detail SET order_status = '$order_status'
    WHERE order_id = '$order_id'";
    $objQuery = $mysqli -> query($sql);
    header("location: http://localhost/SE_Project/history.php");
}
?>