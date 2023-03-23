<?php
require_once 'connect.php';

$promotion_id = $_GET['id'];
$query = "SELECT * FROM promotion WHERE promotion_id = '".$promotion_id."'";
$result = mysqli_query($mysqli, $query);
$row = mysqli_fetch_row($result);
echo $row[3];
$flgDelete = unlink("promotion/$row[5].jpg");
    $query = "DELETE FROM promotion WHERE promotion_id='$promotion_id'";
    $objQuery = $mysqli -> query($query);
    echo "<script>";
    echo "alert('ลบสำเร็จ');";
    echo "window.history.back();";
    echo "</script>";
?>