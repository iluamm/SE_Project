<?php
    require_once 'connect.php';
    session_start();

    $user_id = $_SESSION["user_id"];
    $order_price = $_POST['total'];
    $sql= "INSERT INTO order_detail (order_id,order_address,order_phone,order_price,user_id)
    VALUES (NULL,'','',$order_price,$user_id)"; 
    $objQuery = $mysqli -> query($sql);
    
    $order_id = mysqli_insert_id($mysqli);

    for($i=1; $i<=(int)$_SESSION["intLine"]; $i++){
        if($_SESSION["promotion_id"][$i] !=""){
            $promotion_id=$_SESSION["promotion_id"][$i];
            $album_id=$_SESSION["album_id"][$i];

            $sql2= "INSERT INTO list (list_no,promotion_id,album_id,order_id)
            VALUES (NULL,$promotion_id,$album_id,$order_id)";
            $objQuery2 = $mysqli -> query($sql2);

            $list_no = mysqli_insert_id($mysqli);
            print_r($_SESSION["order_image"][$i]);
            foreach ($_SESSION["order_image"][$i] as $row) {
                $img_name=substr($row,8);
                echo $img_name.'<br>';
                echo $list_no;
                $sql3="INSERT INTO order_image (img_id,img_name,list_no)
                VALUES (NULL,'$img_name',$list_no)";
                $objQuery3 = $mysqli -> query($sql3); 
            }
        }
        $status = 'success';
    }
    if($status=='success'){
        unset($_SESSION["promotion_id"],$_SESSION["album_id"],$_SESSION["intLine"],$_SESSION["order_image"]);
        header("location:http://localhost/SE_Project/checkorder.php?id=$order_id");
    }

    ?>