<?php
	session_start();
    require_once 'connect.php';

        $username = $mysqli -> real_escape_string($_POST['username']);
        $password = $mysqli -> real_escape_string($_POST['password']);
        $strSQL = "SELECT * FROM user WHERE username = '". $username."'
                    and password = '".$password."'";
        $objQuery = $mysqli -> query($strSQL);
        $objResult = $objQuery -> fetch_array(MYSQLI_ASSOC);
        if(!$objResult)
            { 
                echo "<script>";
                echo "alert('ชื่อผู้ใช้งาน หรือรหัสผ่านไม่ถูกต้อง');";
                echo "window.history.back();";
                echo "</script>";
            }
        else
        {
                $_SESSION["user_id"] = $objResult["user_id"];
                $_SESSION["user_username"] = $objResult["username"];
                $_SESSION["user_name"] = $objResult["user_name"];
                $_SESSION["user_type"] = $objResult["user_type"];
                if($objResult["user_type"]=="admin")
                {
                    header("location:http://localhost/SE_Project/index-admin.php");
                }
                else
                {
                    header("location:http://localhost/SE_Project/");
                }
            }

?>