<?php
session_start();
require_once 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="buttonstyle.css" />
</head>
<body>

<?php
include("navbar-admin.php") //navbar
?>

<h2>รายการสินค้าที่จัดส่ง</h2>
<table>
    <tr>
        <th>เลขที่ออเดอร์</th>
        <th>เวลา</th>
        <th colspan="2"></th>
    </tr>
    <tr>
        <td>xxxxx</td>
        <td>xx/xx/xxxx</td>
        <td><input type="submit" class="cancelButton" name="Submit" value="ยกเลิก" /></td>
        <td><input type="submit" class="detailCheckButton" name="Submit" value="รายละเอียด" /></td>
    </tr>
    <tr>
        <td>xxxxx</td>
        <td>xx/xx/xxxx</td>
        <td><input type="submit" class="cancelButton" name="Submit" value="ยกเลิก" /></td>
        <td><input type="submit" class="detailCheckButton" name="Submit" value="รายละเอียด" /></td>
    </tr>
</table>

</body>
<?php
 include("footer.php")
?>
</html>