<?php

require_once 'connect.php';

if(isset($_POST['regis']))
{
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password1 = $_POST['password'];
    $password2 = $_POST['password2'];
    $user_type = "customer";
    
    if($password1==$password2){
        $sql = "INSERT INTO username (user_id,username, password,user_type)
        VALUES (NULL,'$username', '$password1', '$user_type')";
        $objQuery = $mysqli -> query($sql);
        echo 'Insert Success';
        header( "location: http://localhost/SE_Project/login.php" );
    }
    else{
        echo 'Insert Failed';
        header("location: http://localhost/SE_Project/register.php");
    }
}
?>