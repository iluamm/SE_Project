<?php
$host = 'localhost';
$username = 'root';
$password = '';
$db = 'polaroid';

$link = mysqli_connect($host, $username, $password);
$mysqli = new mysqli($host, $username, $password,$db);
if(!$link){
    echo "Cannot connect to phpmyadmin";
}
else{
    mysqli_select_db($link ,$db);
}

// $sql = "SELECT * FROM order_datail WHERE order_date < DATE_SUB(NOW(), INTERVAL 3 DAY) AND order_status=='รอการชำระเงิน'";
// $result = $mysqli -> query($sql);
// while($row = mysqli_fetch_row($result)){
//     $query2 = "SELECT * FROM order_image WHERE list_no = '".$row[0]."'";
//     $result2 = mysqli_query($mysqli, $query2);
//     while($row2 = mysqli_fetch_row($result2)){
//     $flgDelete = unlink("uploads/$row2[1]");
//     }
// }
// $query3 = "DELETE FROM order_detail WHERE order_date < DATE_SUB(NOW(), INTERVAL 3 DAY) AND order_status=='รอการชำระเงิน'";
// $objQuery = $mysqli -> query($query3);
// ?>