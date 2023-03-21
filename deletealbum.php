<?php
    require_once 'connect.php';
    session_start();

$target_dir = "album/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;

$a_type = $mysqli -> real_escape_string($_POST['a_type']);
$a_name = $mysqli -> real_escape_string($_POST['a_name']);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
} else {
    echo "Sorry, there was an error uploading your file.";
}

$image=basename( $_FILES["image"]["name"],".jpg"); // used to store the filename in a variable

//storind the data in your database
$query= "INSERT into album (album_id,a_type,a_name,a_image)
        VALUES (NULL,'$a_type','$a_name','$image')";
$objQuery = $mysqli -> query($query);
    echo "<script>";
    echo "alert('อัปโหลดสำเร็จ');";
    echo "window.history.back();";
    echo "</script>";
    ?>