<?php
    require_once 'connect.php';
    session_start();
    $target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
    if(isset($_POST["submit"])){
        echo "connected failed.";
              $image = $_FILES['image']['tmp_name'];
              $a_type = $mysqli -> real_escape_string($_POST['a_type']);
              $a_name = $mysqli -> real_escape_string($_POST['a_name']);
              $imgContent = addslashes(file_get_contents($image));


            //Insert image content into database
            $insert = $mysqli->query("INSERT into album (album_id,a_type,a_name,a_image)
            VALUES (NULL,'$a_type','$a_name','$imgContent')");
            if($insert){
                echo "File uploaded successfully.";
                header( "location: http://localhost/SE_Project/index-admin.php" );
            }else{
                echo "File upload failed, please try again.";
                header( "location: http://localhost/SE_Project/index-admin.php" );
            } 
        }
    ?>