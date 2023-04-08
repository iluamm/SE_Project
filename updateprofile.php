<?php 
    session_start();
    require_once 'connect.php';
    $user_id = $_SESSION["user_id"];
    
if(isset($_POST['editconfirm'])){

    $phone = $_POST['user_phone'];
    $_SESSION["user_name"] = $phone;
    $name = $_POST['user_name'];
    $_SESSION["user_name"] = $name;
    $address = $_POST['user_address'];

    $sql = "UPDATE user SET user_name = '$name', user_address = '$address', user_phone = '$phone'
    WHERE user_id = '$user_id'";
    $objQuery = $mysqli -> query($sql); 
    header( "location: http://localhost/SE_Project/profile.php" );
}
?>