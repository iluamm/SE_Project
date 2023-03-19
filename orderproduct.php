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

<div class="padpage">
<h2>รูปแบบเบิ้มๆ!!! Gallery</h2>
<table>
    <tr>
        <td>                
            <p>Order detail</p>
            <br>ขนาดภาพ: 3x2 นิ้ว
            <br>จำนวน: 64 รูป
            <br>ชนิดกระดาษ: กระดาษ Fujicolor Crystal Archive 260 แกรม
            <br>ระยะเวลาจัดทำ: ไม่เกิน 1 สัปดาห์
        </td>
        <td>
            <p>ราคารวม 500 บาท</p>
            <br><a href="uploadorder.php"><button>เริ่มทำการสั่งซื้อ</button></a>
        </td>
    </tr>
</table>

</div>




</body>
<?php
 include("footer.php")
?>
</html>