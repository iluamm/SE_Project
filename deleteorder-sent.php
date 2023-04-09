<?php
require_once 'connect.php';

$order_id = $_GET['id'];
$query = "SELECT * FROM list WHERE order_id = '".$order_id."'";
$result = mysqli_query($mysqli, $query);
while($row = mysqli_fetch_row($result)){
    $query2 = "SELECT * FROM order_image WHERE list_no = '".$row[0]."'";
    $result2 = mysqli_query($mysqli, $query2);
    while($row2 = mysqli_fetch_row($result2)){
    $flgDelete = unlink("uploads/$row2[1]");
    }
}
$query3 = "DELETE FROM order_detail WHERE order_id='$order_id'";
    $objQuery = $mysqli -> query($query3);
    echo "<script>";
    echo "alert('ลบสำเร็จ');";
    echo "</script>";
    header("location:http://localhost/SE_Project/checkordersent.php");