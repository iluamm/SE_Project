<?php
session_start();
require_once 'connect.php';

if(isset($_POST['find'])){

    $user_phone = $_POST['user_phone'];
    $query = "SELECT * FROM user WHERE user_phone='$user_phone'";
    $result = mysqli_query($mysqli, $query);
    $row = mysqli_fetch_assoc($result);

    header( "location: http://localhost/SE_Project/history-admin.php?id=".$row['user_id']."" );
}
?>