<?php

session_start();
require_once 'connect.php';

if(isset($_POST['regis']))
{
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password1 = $_POST['password'];
    $password2 = $_POST['password2'];
    $user_type = "customer";
    if($name=="" || $username=="" || $password1=="" || $password2==""){
        $_SESSION['error'] = '1';
        header("location: http://localhost/SE_Project/register.php");
    }
    elseif($password1==$password2){
        $_SESSION['error'] = 'test';
        $sql = "INSERT INTO username (user_id,username, password,user_type)
        VALUES (NULL,'$username', '$password1', '$user_type')";
        $objQuery = $mysqli -> query($sql);
        header( "location: http://localhost/SE_Project/login.php" );
    }
    else{
            $_SESSION["error"] = "test";
            header("location: http://localhost/SE_Project/register.php");
    }
}
?>