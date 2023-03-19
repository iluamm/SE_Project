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
<link rel="stylesheet" href="csscol/inputstyle.css" />
</head>
<body>

<?php
include("navbar.php")
?>

<div class="contextbox">
<div class="padpage">
<h2>ตรวจสอบความถูกต้องและกรอกที่อยู่</h2>
<h2 class="left">รายละเอียดสินค้า</h2>
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

<p style="margin-top:3rem"><h2>ชื่อผู้รับ ที่อยู่ และเบอร์โทรศัพท์</h2></p>
<br>สัปปะรด พิซซ่า
<br>11/12 ซอย 5 ถนนข้าวสาร แขวงข้าวสาร ตำบลข้าวสาร จังหวัดข้าวสวย เลขไปรษณีย์ 55555 
<br>เบอร์โทรศัพท์ 0812345679
<br>&nbsp;
<br>วันที่สั่ง: xx/xx/xxxx


<h5>&nbsp;</h3>


ยกเลิกคำสั่งซื้อ (Cancel order)
<br>*หากชำระเงินไปแล้วและต้องการยกเลิกคำสั่งซื้อ กรุณาติดต่อร้านเพื่อรับเงินคืน
<p><a href="history.php"><button>ย้อนกลับ</button></a>



</div>
</div>



</body>
<?php
 include("footer.php")
?>
</html>