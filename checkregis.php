<?php

session_start();
require_once 'connect.php';

if(isset($_POST['regis']))
{
    $name = $_POST['name'];
    $username = $mysqli -> real_escape_string($_POST['username']);
    $password1 = $mysqli -> real_escape_string($_POST['password']);
    $password2 = $mysqli -> real_escape_string($_POST['password2']);
    $user_type = "customer";

    $strSQL = "SELECT * FROM user WHERE username = '". $username."'";
    $objQuery = $mysqli -> query($strSQL); 
    $objResult = mysqli_num_rows($objQuery);

    if($name=="" || $username=="" || $password1=="" || $password2==""){
        echo "<script>";
        echo "alert('กรุณากรอกข้อมูลให้ครบถ้วน');";
        echo "window.history.back();";
        echo "</script>";
    }
    elseif($objResult>0){
        echo "<script>";
        echo "alert('ชื่อผู้ใช้งานนี้ มีการใช้งานแล้ว');";
        echo "window.history.back();";
        echo "</script>";
    }
    elseif($password1==$password2){
        $sql = "INSERT INTO user (user_id,username, password,user_type)
        VALUES (NULL,'$username', '$password1', '$user_type')";
        $objQuery = $mysqli -> query($sql);
        header( "location: http://localhost/SE_Project/login.php" );
    }
    else{
            header("location: http://localhost/SE_Project/register.php");
    }
}
?>