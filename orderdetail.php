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
include("navbar-admin.php")
?>

<div class="padpage">
    <h2>รายละเอียดออเดอร์</h2>
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
            <td class="left">
                อัดรูป
                <br>ขนาดรูป : 3x3 นิ้ว
                <br>จำนวน : 64 รูป
            </td>
            <td>500 บาท
            <a href="downloadpic.php"><input class="detaButton" type="submit" name="Submit" value="❯" /></input></a>
            </td>
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
            <td>500 บาท
                <a href="downloadpic.php"><input class="detaButton" type="submit" name="Submit" value="❯" /></input></a>
            </td>
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
            <td>500 บาท
            <a href="downloadpic.php"><input class="detaButton" type="submit" name="Submit" value="❯" /></input></a>
            </td>
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
    
    <div class="c6">
        <h2 class="left">ติดตามสินค้า</h2>

        <table class="t10 left">
            <tr>
                <td>
                    <p class="tt1">เลขพัสดุ : <input class="add" type="text" placeholder="เลขพัสดุ" maxlength="13"/></p>
                    <p class="tt1">จัดส่งโดย : <select class="select-add" name="delivery" id="delivery">
                                    <option value="thaiexpress">ไปรษณีย์ไทย</option>
                                    <option value="kerryexpress">Kerry Express</option>
                                    <option value="lalamove">Lalamove</option>
                                    <option value="flashexpress">Flash Express</option>
                                 </select></p>
                    <p class="tt1">จัดส่งวันที่ : <input class="a1-5" type="date" /></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="bold tt1">ติดตามพัสดุ</p>
                    Kerry Express : ลิงค์
                </td>
            </tr>
        </table>
    </div>

    <div class="c6">
        <h2 class="left">ชื่อผู้รับ ที่อยู่ และเบอร์โทรศัพท์</h2>
        <p class="tt1">
            <br>สัปปะรด พิซซ่า
            <br>11/12 ซอย 5 ถนนข้าวสาร แขวงข้าวสาร ตำบลข้าวสาร จังหวัดข้าวสวย เลขไปรษณีย์ 55555 
            <br>เบอร์โทรศัพท์ 0812345679
            <br>&nbsp;
            <br>วันที่สั่ง: xx/xx/
        </p>

        <a  href="#">
            <img src="image\bin2.png" width="20rem"> 
            <span class="graytext">ยกเลิกออเดอร์<br>
            *หากชำระเงินไปแล้วและต้องการยกเลิกคำสั่งซื้อ กรุณาติดต่อร้านเพื่อรับเงินคืน
            </span>
        </a>

        <div class="bn">
            <a href="history-admin.php"><input class="backButton" type="submit" name="Submit" value="ย้อนกลับ" /></a>
            <input class="nextButton" type="submit" name="Submit" value="จัดเตรียมสำเร็จ" />
        </div>
    </div>
</div>


</body>
<?php
 include("footer.php")
?>
</html>
    