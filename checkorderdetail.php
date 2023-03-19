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


<h2>รายการสินค้าที่ต้องตรวจสอบ</h2>
<table class="t6">
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
        <td><input type="submit" class="checkpicButton" name="Submit" value="ดูรูป" /></td>
        <td><input type="submit" class="cancelButton" name="Submit" value="ยกเลิก" /></td>
        <td><input type="submit" class="confirmButton" name="Submit" value="ยอมรับ" /></td>
    </tr>
    <tr>
        <td>xxxxx</td>
        <td>xx/xx/xxxx</td>
        <td>15.00</td>
        <td>500</td>
        <td><input type="submit" class="checkpicButton" name="Submit" value="ดูรูป" /></td>
        <td><input type="submit" class="cancelButton" name="Submit" value="ยกเลิก" /></td>
        <td><input type="submit" class="confirmButton" name="Submit" value="ยอมรับ" /></td>
    </tr>
</table>
<h6>&nbsp;</h6>
</body>
<?php
 include("footer.php")
?>
</html>