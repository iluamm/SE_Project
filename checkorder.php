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

<div class="c6">
    <div class="padpage">
        <h2>ตรวจสอบความถูกต้องและกรอกที่อยู่</h2>
        <h2 class="left">รายละเอียดสินค้า</h2>
        <table class="t8">
            <tr>
                <th>ลำดับรายการ   </th>
                <th>สินค้า</th>
                <th>รายละเอียดสินค้า</th>
                <th>ราคา</th>
            </tr>
            <tr>
                <td>1</td>
                <td>รูป img</td>
                <td class="left">
                    อัดรูป
                    <br>ขนาดรูป : 3x3 นิ้ว
                    <br>จำนวน : 64 รูป
                </td>
                <td>500 บาท</td>
            </tr>
            <tr>
                <td>2</td>
                <td>รูป img</td>
                <td class="left">
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
                <td class="left">
                    อัลบั้มกาว
                    <br>ขนาดรูป : 3x3 นิ้ว
                    <br>จำนวน : 64 รูป
                    <br>ลายอัลบั้ม : แมวเหมียว
                </td>
                <td>500 บาท</td>
            </tr>
            <tr>
            <td colspan="3" class="left">ราคาสินค้าทั้งหมด</td>
            <td class="right">1500 บาท</td>
        </tr>
        <tr>
            <td colspan="3" class="left">ค่าจัดส่ง</td>
            <td class="right">50 บาท</td>
        </tr>
        <tr>
            <td colspan="3" class="left">ราคารวม</td>
            <td class="right">1550 บาท</td>
        </tr>
        </table>

        <h2 class="left">ที่อยู่ที่ต้องการจัดส่ง</h2>
        <input class="a10"  type="text" placeholder="เลขที่หมู่"/>
        <p class="graytext">*กรุณาตรวจสอบความถูกต้องของที่อยู่</p>
        <!-- style="width:50%;height:10rem;" -->
        <div class="bn">
            <a href="shoppingcart.php"><input class="backButton" type="submit" name="Submit" value="ย้อนกลับ" /></a>
            <a href="uploadpayment.php"><input class="nextButton" type="submit" name="Submit" value="ถัดไป" /></a>
        </div>
    </div>
</div>



</body>
<?php
 include("footer.php")
?>
</html>