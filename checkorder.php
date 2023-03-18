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
include("navbar.php")
?>

<div class="contextbox">
<div class="padpage">
<h2>ตรวจสอบความถูกต้องและกรอกที่อยู่</h2>
<h3 class="left">รายละเอียดสินค้า</h3>
<table>
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

<p><h2>ที่อยู่ที่ต้องการจัดส่ง</h2></p>
<br><input style="width:50%;height:10rem;" type="text" placeholder="เลขที่หมู่"/>
<br>*กรุณาตรวจสอบความถูกต้องของที่อยู่

<p><a href="shoppingcart.php"><button>ย้อนกลับ</button></a>
<a href="uploadpayment.php"><button>ยืนยัน</button></a>

</div>
</div>



</body>
<?php
 include("footer.php")
?>
</html>