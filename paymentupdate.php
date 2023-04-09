<?php
require_once 'connect.php';
session_start();

$order_id=$_GET['id'];
$target_dir = "transcript/";
if(isset($_POST['paymentupdate'])){
    do{
        $uniq = uniqid(); 
        $strSQL = "SELECT * FROM order_transcript WHERE t_image = '".$uniq.".jpg'";
        $objQuery = $mysqli -> query($strSQL); 
        $objResult = mysqli_num_rows($objQuery);
    }while($objResult!=0);

    $name = $_FILES["image"]["name"];
    
    $new_name = $uniq . '.jpg';
    $target_file = $target_dir .$new_name;

    $order_status = $_POST['order_status'];
    $t_time = $_POST['t_time'];
    $t_date = $mysqli -> real_escape_string($_POST['t_date']);
    if($t_date=="0000-00-00" || $t_time=="" || empty($_FILES['image']['name'])){
        echo "<script>";
        echo "alert('กรุณากรอกข้อมูลให้ครบถ้วน');";
        echo "window.history.back();";
        echo "</script>";
    }
    else{
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
        } else {
            echo "ERROR!!!";
        }

        $sql = "UPDATE order_detail SET order_status = '$order_status'
        WHERE order_id = '$order_id'";
        $objQuery = $mysqli -> query($sql);
    
        $sql2 = "INSERT INTO order_transcript (transcript_id,t_date,t_time,t_image,order_id)
        VALUES (NULL,'$t_date','$t_time','$new_name',$order_id)";
        $objQuery2 = $mysqli -> query($sql2);
    
        header("location: http://localhost/SE_Project/history.php");
    }
}
?>