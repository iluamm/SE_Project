<?php
session_start();
require_once 'connect.php';
$order_id=$_GET['id'];

if(isset($_POST['addressupdate'])){

    $order_address = $_POST['order_address'];
    $sql = "UPDATE order_detail SET order_address = '$order_address'
    WHERE order_id = '$order_id'";
    $objQuery = $mysqli -> query($sql);
    header("location: http://localhost/SE_Project/uploadpayment.php?id=$order_id");
}
?>