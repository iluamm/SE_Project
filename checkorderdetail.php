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


<h2 align="center">รายการสินค้าที่ต้องตรวจสอบ</h2>
<table border="1" align="center">
    <tr>
        <th>เลขที่ออเดอร์</th>
        <th>วันที่โอน</th>
        <th>เวลา</th>
        <th>ยอด</th>
        <th>สลิป</th>
        <th colspan="2"></th>
    </tr>
    <tr>
        <td>xxxxx</td>
        <td>xx/xx/xxxx</td>
        <td>15.00</td>
        <td>500</td>
        <td>ดูรูป</td>
        <td><input type="submit" name="Submit" value="ยกเลิก" /></td>
        <td><input type="submit" name="Submit" value="ยอมรับ" /></td>
    </tr>
    <tr>
        <td>xxxxx</td>
        <td>xx/xx/xxxx</td>
        <td>15.00</td>
        <td>500</td>
        <td>ดูรูป</td>
        <td><input type="submit" name="Submit" value="ยกเลิก" /></td>
        <td><input type="submit" name="Submit" value="ยอมรับ" /></td>
    </tr>
</table>



</body>
<?php
 include("footer.php")
?>
</html>