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
<link rel="stylesheet" href="csscol/popupstyle.css" />
</head>
<body>

<?php
include("navbar-admin.php") //navbar
?>
<?php
 include("footer.php")
?>
<div class="c6">
    <h2 class="">รายการสินค้าที่ต้องตรวจสอบ</h2>
    <table class="t8">
        <tr>
            <th>เลขที่ออเดอร์</th>
            <th>วันที่โอน</th>
            <th>เวลา</th>
            <th>ยอด</th>
            <th>สลิป</th>
            <th colspan="2"></th>
        </tr>
        <!-- <tr>
            <td>xxxxx</td>
            <td>xx/xx/xxxx</td>
            <td>15.00</td>
            <td>500</td>
            <td><a href="#popup1"><input type="submit" class="checkpicButton" name="Submit" value="ดูรูป" /></a></td>
            <td><input type="submit" class="cancelButton" name="Submit" value="ยกเลิก" /></td>
            <td><input type="submit" class="confirmButton" name="Submit" value="ยอมรับ" /></td>
        </tr>
        <tr>
            <td>xxxxx</td>
            <td>xx/xx/xxxx</td>
            <td>15.00</td>
            <td>500</td>
            <td><a href="#popup1"><input type="submit" class="checkpicButton" name="Submit" value="ดูรูป" /></a></td>
            <td><input type="submit" class="cancelButton" name="Submit" value="ยกเลิก" /></td>
            <td><input type="submit" class="confirmButton" name="Submit" value="ยอมรับ" /></td>
        </tr> -->
        <?php
            $query = "SELECT * FROM order_detail WHERE order_status='รอการตรวจสอบการชำระเงิน'";
            $result = mysqli_query($mysqli, $query);
            while($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>'.$row['order_id'].'</td>';
                echo '<td>xxx</td>';
                echo '<td>xxx</td>';
                echo '<td>'.$row['order_price'].'</td>';
                echo '<td><a href="#popup1"><input type="submit" class="checkpicButton" name="Submit" value="ดูรูป" /></a></td>';
                echo '<td><input type="submit" class="cancelButton" name="cancel" value="ยกเลิก" /></td>';
                echo '<td><input type="submit" class="confirmButton" name="confirm" value="ยอมรับ" /></td>';
                echo '</tr>';
            }
        ?>
        <tr>
            <td colspan="6" class="fat"> <p class="graytext">ยังไม่มีสินค้าที่ต้องตรวจสอบ</p></td>
        </tr>
    </table>

    <div id="popup1" class="overlay">
        <div class="popup center">
            <h2>ใบเสร็จการโอนเงิน</h2>
            <a class="close" href="#">&times;</a>
            <div class="content">
                <img src="transcript\s1.png">
            </div>
        </div>
    </div>
</div>

</body>
</html>