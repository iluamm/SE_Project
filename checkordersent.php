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
include("navbar-admin.php") //navbar
?>

<h2>รายการสินค้าที่จัดส่ง</h2>
<table class="t4">
    <tr>
        <th>เลขที่ออเดอร์</th>
        <th>เวลา</th>
        <th colspan="2"></th>
    </tr>
    <?php
        $query = "SELECT * FROM order_detail WHERE order_status='จัดเตรียมสินค้า'";
        $result = mysqli_query($mysqli, $query);
        while($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>'.$row['order_id'].'</td>';
            echo '<td>'.$row['order_date'].'</td>';
            echo '<td><a href="deleteorder.php?id='.$row['order_id'].'"><input type="submit" class="cancelButton" name="cancel" value="ยกเลิก" /></a></td>';
            echo '<td><a href="orderdetail.php?id='.$row['order_id'].'"><input type="submit" class="detailCheckButton" name="confirm" value="รายละเอียด" /></a></td>';
            echo '</tr>';
        }
        if(mysqli_num_rows($result)==0){
            echo '
            <tr>
            <td colspan="7" class="fat"> <p class="graytext">ยังไม่มีสินค้าที่ต้องยืนยันการจัดส่ง</p></td>
            </tr>';
        }
    ?>
</table>
<h6>&nbsp;</h6>
</body>
<?php
 include("footer.php")
?>
</html>