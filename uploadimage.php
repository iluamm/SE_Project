<?php
    require_once 'connect.php';
    session_start();

    if(isset($_POST['upload'])){
        $tmpFilePath = $_FILES['image']['tmp_name'];
        $_SESSION['image_path'][0] = $tmpFilePath;
    echo $_SESSION['image_path'][0];
// $target_dir = "order/";
// $imagecount = count($_FILES["image"]["tmp_name"]);
// for($i=0;$i<$imagecount;$i++){
//     do{
//         $uniq = uniqid(); 
//         $strSQL = "SELECT * FROM order_image WHERE img_name = '".$uniq.".jpg'";
//         $objQuery = $mysqli -> query($strSQL); 
//         $objResult = mysqli_num_rows($objQuery);
//     }while($objResult!=0);

//     $new_name = $uniq . '.jpg';
//     $target_file = $target_dir .$new_name;
//     if (move_uploaded_file($_FILES["image"]["tmp_name"][$i], $target_file)) {
//         echo "The file ". basename( $_FILES["image"]["name"][$i]). " has been uploaded.";
//     } else {
//         echo "ERROR!!!";
//     }
//     $query= "INSERT into order_image (img_id,img_name,list_no)
//             VALUES (NULL,'$new_name','0')";
//     $objQuery = $mysqli -> query($query);
//     if(!$objQuery){
//         echo 'upload to database error';
//     }
// }
// $name = $_FILES['image']['name'];

// $new_name = $uniq . '.jpg';
// $target_file = $target_dir .$new_name;


// if(empty($_FILES['image']['name'])){
//     echo "<script>";
//     echo "alert('กรุณาอัปโหลดรูป');";
//     echo "window.history.back();";  
//     echo "</script>";
// }
// else{
//     if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
//         echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
//     } else {
//         echo "ERROR!!!";
//     }
    
    //storind the data in your database
//     $query= "INSERT into album (album_id,a_type,a_name,a_image)
//             VALUES (NULL,'$a_type','$a_name','$new_name ')";
//     $objQuery = $mysqli -> query($query);
//     if($a_type=='insert'){
//         echo "<script>";
//         echo "alert('อัปโหลดสำเร็จ');";
//         echo "window.history.back();";
//         echo "</script>";
//         header( "location: http://localhost/SE_Project/albumdetail1.php" );
//     }elseif($a_type=='adhesive'){
//         echo "<script>";
//         echo "alert('อัปโหลดสำเร็จ');";
//         echo "window.history.back();";
//         echo "</script>";
//         header( "location: http://localhost/SE_Project/albumdetail2.php" );
//     }else{
//         echo "<script>";
//         echo "alert('อัปโหลดสำเร็จ');";
//         echo "window.history.back();";
//         echo "</script>";
//         header( "location: http://localhost/SE_Project/index-admin.php" );
//     }
// }
    }
    ?>
