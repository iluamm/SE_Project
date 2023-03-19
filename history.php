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

<div class="padpge">
<h2 class="left">ประวัติการสั่งซื้อ</h2>
<table class="t6">
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
        <td><a href="checkorder2.php"><input type="submit" class="detailCheckButton" name="Submit" value="รายละเอียด" /></a></td>
    </tr>
    <tr>
        <td>xxxxx</td>
        <td>xx/xx/xxxx</td>
        <td>500</td>
        <td>จัดเตรียมสินค้า</td>
        <td><a href="checkorder2.php"><input type="submit" class="detailCheckButton" name="Submit" value="รายละเอียด" /></a></td>
    </tr>
</table>
<h6>&nbsp;</h6>
</body>
<?php
 include("footer.php")
?>
</html>