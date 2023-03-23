<?php
    require_once 'connect.php';
    session_start();

$target_dir = "promotion/";

do{
    $uniq = uniqid(); 
    $strSQL = "SELECT * FROM promotion WHERE p_image = '".$uniq.".jpg'";
    $objQuery = $mysqli -> query($strSQL); 
    $objResult = mysqli_num_rows($objQuery);
}while($objResult!=0);

$name = $_FILES['image']['name'];

$new_name = $uniq . '.jpg';
$target_file = $target_dir .$new_name;

$size1 = $mysqli -> real_escape_string($_POST['size1']);
$size2 = $mysqli -> real_escape_string($_POST['size2']);
$pic_size = $size1.'x'.$size2;
$p_type = $mysqli -> real_escape_string($_POST['p_type']);
$pic_amount = $mysqli -> real_escape_string($_POST['pic_amount']);
$pic_price = $mysqli -> real_escape_string($_POST['pic_price']);


if($size1=="" || $size2=="" || $p_type=="" || $pic_amount=="" || $pic_price=="" || empty($_FILES['image']['name'])){
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
    $query= "INSERT into promotion (promotion_id,p_type,pic_size,pic_amount,p_price,p_image)
            VALUES (NULL,'$p_type','$pic_size','$pic_amount','$pic_price','$new_name ')";
    $objQuery = $mysqli -> query($query);
    if($p_type=='insert'){
        echo "<script>";
        echo "alert('อัปโหลดสำเร็จ');";
        echo "window.history.back();";
        echo "</script>";
        header( "location: http://localhost/SE_Project/editproduct1.php" );
    }elseif($p_type=='adhesive'){
        echo "<script>";
        echo "alert('อัปโหลดสำเร็จ');";
        echo "window.history.back();";
        echo "</script>";
        header( "location: http://localhost/SE_Project/editproduct2.php" );
    }elseif($p_type=='image'){
        echo "<script>";
        echo "alert('อัปโหลดสำเร็จ');";
        echo "window.history.back();";
        echo "</script>";
        header( "location: http://localhost/SE_Project/editproduct3.php" );
    }else{
        echo "<script>";
        echo "alert('อัปโหลดสำเร็จ');";
        echo "window.history.back();";
        echo "</script>";
        header( "location: http://localhost/SE_Project/index-admin.php" );
    }
}
    ?>