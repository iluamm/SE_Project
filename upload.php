<?php
    require_once 'connect.php';
    session_start();
// //     $target_dir = "uploads/";
// // $target_file = $target_dir . basename($_FILES["image"]["name"]);
//     if(isset($_POST["submit"])){
//               $image = $_FILES['image']['tmp_name'];
//               $a_type = $mysqli -> real_escape_string($_POST['a_type']);
//               $a_name = $mysqli -> real_escape_string($_POST['a_name']);
//               $imgContent = addslashes(file_get_contents($image));


//             //Insert image content into database
//             $insert = "INSERT into album (album_id,a_type,a_name,a_image)
//             VALUES (NULL,'$a_type','$a_name','$imgContent')";
//             $objQuery = $mysqli -> query($insert);
//             if($objQuery){
//                 echo "File uploaded successfully.";
//                 // header( "location: http://localhost/SE_Project/index-admin.php" );
//             }else{
//                 echo "File upload failed, please try again.";
//                 // header( "location: http://localhost/SE_Project/index-admin.php" );
//             } 
//         }
$target_dir = "album/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;

$a_type = $mysqli -> real_escape_string($_POST['album_type']);
$a_name = $mysqli -> real_escape_string($_POST['a_name']);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
} else {
    echo "ERROR!!!";
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