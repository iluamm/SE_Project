<?php
session_start();
require_once 'connect.php';
?>
<!DOCTYPE html>
<html>
<body>
<head>
<link rel="stylesheet" href="csscol/style.css" />
<link rel="stylesheet" href="csscol/buttonstyle.css" />
<link rel="stylesheet" href="csscol/tablestyle.css" />
</head>
<?php
include("navbar.php")
?>


<div class="padpage">
<h2>ตะกร้าสินค้า</h2>
<table class="t6">
    <tr>
        <th>ลำดับรายการ   </th>
        <th>สินค้า</th>
        <th>รายละเอียดสินค้า</th>
        <th>ราคา</th>
    </tr>
    <tr>
        <td>1</td>
        <td>รูป img</td>
        <td>
            อัดรูป
            <br>ขนาดรูป : 3x3 นิ้ว
            <br>จำนวน : 64 รูป
        </td>
        <td>500 บาท</td>
    </tr>
    <tr>
        <td>2</td>
        <td>รูป img</td>
        <td>
            อัลบั้มกาว
            <br>ขนาดรูป : 3x3 นิ้ว
            <br>จำนวน : 64 รูป
            <br>ลายอัลบั้ม : แมวเหมียว
        </td>
        <td>500 บาท</td>
    </tr>
    <tr>
        <td>3</td>
        <td>รูป img</td>
        <td>
            อัลบั้มกาว
            <br>ขนาดรูป : 3x3 นิ้ว
            <br>จำนวน : 64 รูป
            <br>ลายอัลบั้ม : แมวเหมียว
        </td>
        <td>500 บาท</td>
    </tr>
    <tr>
        <td colspan="3">ราคาสินค้าทั้งหมด</td>
        <td>1500 บาท</td>
    </tr>
    <tr>
        <td colspan="3">ค่าจัดส่ง</td>
        <td>50 บาท</td>
    </tr>
    <tr>
        <td colspan="3">ราคารวม</td>
        <td>1550 บาท</td>
    </tr>
</table>

<br>
<a href="checkorder.php"><button>ยืนยันคำสั่งซื้อ</button></a>


</div>



</body>
<?php
 include("footer.php")
?>
</html>