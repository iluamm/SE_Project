<?php
session_start();
require_once 'connect.php';

if(isset($_POST['addrole']))
{
    $username = $mysqli -> real_escape_string($_POST['username']);
    $password = $mysqli -> real_escape_string($_POST['password']);

    $strSQL = "SELECT * FROM user WHERE username = '". $username."'
    and password = '".$password."'";
    $objQuery = $mysqli -> query($strSQL); 
    $objResult = $objQuery -> fetch_array(MYSQLI_ASSOC);

    if( $username=="" || $password==""){
        echo "<script>";
        echo "alert('กรุณากรอกข้อมูลให้ครบถ้วน');";
        echo "window.history.back();";
        echo "</script>";
    }
    elseif(!$objResult){
        echo "<script>";
        echo "alert('ชื่อผู้ใช้งาน หรือรหัสผ่านไม่ถูกต้อง');";
        echo "window.history.back();";
        echo "</script>";
    }
    else{
        $sql2 = "UPDATE user SET user_type = 'admin' WHERE username = '". $username."'
        and password = '".$password."'";
        $objQuery2 = $mysqli -> query($sql2);
        echo "<script>";
        echo "alert('เพิ่มพนักงานเสร็จสิ้น');";
        echo "window.history.back();";
        echo "</script>";
    }
}
?>