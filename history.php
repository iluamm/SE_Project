<?php
session_start();
require_once 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="csscol/style.css" />
<link rel="stylesheet" href="csscol/buttonstyle.css" />
<link rel="stylesheet" href="csscol/tablestyle.css" />
</head>
<body>

<?php
include("navbar.php") //navbar
?>

<div class="padpage">
    <h2 class="center">ประวัติการสั่งซื้อ</h2>
</div>
<table class="t5">
    <tr>
        <th>เลขที่ออเดอร์</th>
        <th>วันที่สั่ง</th>
        <th>ราคาออเดอร์</th>
        <th>สถานะออเดอร์</th>
        <th></th>
    </tr>
    <?php
        $query = "SELECT * FROM order_detail WHERE user_id='".$_SESSION['user_id']."'";
        $result = mysqli_query($mysqli, $query);
        while($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>'.$row['order_id'].'</td>';
            echo '<td>'.$row['order_date'].'</td>';
            echo '<td>'.$row['order_price'].'</td>';
            echo '<td>'.$row['order_status'].'</td>';

            if($row['order_status']=='รอการชำระเงิน'){
            echo '<td><a href="checkorder.php?id='.$row['order_id'].'"><input type="submit" class="detailCheckButton" name="Submit" value="รายละเอียด" /></a></td>';
            }else{
            echo '<td><a href="checkorder2.php?id='.$row['order_id'].'"><input type="submit" class="detailCheckButton" name="Submit" value="รายละเอียด" /></a></td>';
            }
            echo '</tr>';
        }
        if(mysqli_num_rows($result)==0){
            echo '
            <tr>
            <td colspan="7" class="fat"> <p class="graytext">ยังไม่มีสินค้าที่เคยทำการสั่ง</p></td>
            </tr>';
        }
    ?>
</table>
<div class="c6"></div>
</body>
<?php
 include("footer.php")
?>
</html>