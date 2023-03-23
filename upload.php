<?php
    require_once 'connect.php';
    session_start();

$target_dir = "album/";
do{
    $uniq = uniqid(); 
    $strSQL = "SELECT * FROM album WHERE a_image = '".$uniq.".jpg'";
    $objQuery = $mysqli -> query($strSQL); 
    $objResult = mysqli_num_rows($objQuery);
}while($objResult!=0);

$name = $_FILES['image']['name'];

$new_name = $uniq . '.jpg';
$target_file = $target_dir .$new_name;

$a_type = $mysqli -> real_escape_string($_POST['album_type']);
$a_name = $mysqli -> real_escape_string($_POST['a_name']);


if($a_type=="" || $a_name=="" || empty($_FILES['image']['name'])){
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
    
    //storind the data in your database
    $query= "INSERT into album (album_id,a_type,a_name,a_image)
            VALUES (NULL,'$a_type','$a_name','$new_name ')";
    $objQuery = $mysqli -> query($query);
        echo "<script>";
        echo "alert('อัปโหลดสำเร็จ');";
        echo "window.history.back();";
        echo "</script>";
        header( "location: http://localhost/SE_Project/albumdetail.php" );
}
    ?>