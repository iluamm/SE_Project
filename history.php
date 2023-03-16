<?php
session_start();
require_once 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" />
</head>
<body>

<?php
include("navbar-admin.php") //navbar
?>

<div class="padpage">
<h2>ค้นหาประวัติลูกค้า</h2>
<form>
<input style="width:80%;height:2rem;" placeholder="เบอร์โทร" />
</form>

<br>เบอร์โทร
<br><input style="width:20%;height:2rem;" type="text"value="phone" readonly/>

<p>Firstname - Lastname
<br><input style="width:20%;height:2rem;" type="text"value="ลูกพี่เนม เทพซ่า" readonly/>

<p>Address
<br><input style="width:50%;height:10rem;" type="text"value="phone" readonly/>

<p style="margin-top:3rem"><h2>ประวัติการสั่งซื้อ</h2>
<table border="1">
    <tr>
        <th>เลขที่ออเดอร์</th>
        <th>วันที่สั่ง</th>
        <th>ราคาออเดอร์</th>
        <th>สถานะออเดอร์</th>
        <th></th>
    </tr>
    <tr>
        <td>xxxxx</td>
        <td>xx/xx/xxxx</td>
        <td>500</td>
        <td>รอตรวจสอบ</td>
        <td>รายละเอียด</td>
    </tr>
    <tr>
        <td>xxxxx</td>
        <td>xx/xx/xxxx</td>
        <td>500</td>
        <td>จัดเตรียมสินค้า</td>
        <td>จัดส่งสำเร็จ</td>
    </tr>
</table>
</div>




</body>
    <?php
    include("footer.php")
    ?>
</html>