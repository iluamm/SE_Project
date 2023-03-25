<?php
session_start();
require_once 'connect.php';

echo (int)$_SESSION["intLine"].'<br>';
for($i=1; $i<=(int)$_SESSION["intLine"]; $i++){
    if($_SESSION["promotion_id"][$i] !=""){
        $sql1 = "SELECT * FROM promotion WHERE promotion_id='".$_SESSION['promotion_id'][$i]."'";
        $result1 = mysqli_query($mysqli, $sql1); 
        $row1 = $result1 -> fetch_array(MYSQLI_ASSOC);
        echo $i.'&nbsp;';
        echo $row1['promotion_id'].'&nbsp;';
        echo $_SESSION["album_id"][$i].'&nbsp;';
        echo '<a href="delete_cart.php?Line='.$i.'">ลบ</a>';
    }
    echo '<br>';
}