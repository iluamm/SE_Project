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
    <h2>รูปแบบเบิ้มๆ!!! Gallery</h2>
    <table class="t6">
        <tr>
            <td>                
                <p class="left bold">รายละเอียดสินค้า (Order detail)</p>
                <p class="left">
                    ขนาดภาพ: 3x2 นิ้ว
                    <br>จำนวน: 64 รูป
                    <br>ชนิดกระดาษ: กระดาษ Fujicolor Crystal Archive 260 แกรม
                    <br>ระยะเวลาจัดทำ: ไม่เกิน 1 สัปดาห์
                </p>
            </td>
            <td>
                <p>ราคารวม 500 บาท</p>
                <br><a href="uploadorder.php">
                <input class="losicButton" type="submit" name="Submit" value="เริ่มทำการสั่งซื้อ" /></input>
            </td>
        </tr>
    </table>

</div>




</body>
<?php
 include("footer.php")
?>
</html>