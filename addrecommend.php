<?php
    require_once 'connect.php';

    $promotion_id = $_POST['recid'];

    $sql= "INSERT INTO recommend (rec_id,promotion_id)
    VALUES (NULL,'$promotion_id')"; 
    $objQuery = $mysqli -> query($sql);
    echo "<script>";
    echo "alert('เพิ่มสินค้าแนะนำสำเร็จ');";
    echo "</script>";
    header("location: http://localhost/SE_Project/index-admin.php");
    ?>