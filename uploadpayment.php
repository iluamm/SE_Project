<?php
session_start();
require_once 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="csscol/style.css" />
<link rel="stylesheet" href="csscol/buttonstyle.css" />
</head>
<body>

<?php
include("navbar.php")
?>

<div class="c6">
    <div class="padpage">
    <h2>ชำระเงิน</h2>
    <h1>แปะรูป QR !!!</h1>

    <font color="red">ค่อยแก้!!</font> <input type="file" id="myfile" name="myfile" placeholder="อัปโหลดหลักฐานการชำระเงิน">
    <br><h4>**หากไม่ชำระเงินภายใน 24 ชั่วโมง ระบบจะยกเลิกออเดอร์โดยอัตโนมัติ</h4></br>


    <h2 class="left">ข้อมูลการโอนเงิน</h2>
    <dd>
        วันที่โอนเงิน <input type="date" />
        <br>เวลาที่โอนเงิน <input type="time" />
        <br>ยกเลิกออเดอร์
    </dd>
    <div class="bn">
        <a href="checkorder.php"><input class="backButton" type="submit" name="Submit" value="ย้อนกลับ" /></a>
        <a href="history.php"><input class="nextButton" type="submit" name="Submit" value="ถัดไป" /></a>
    </div>

    </div>
</div>



</body>
<?php
 include("footer.php")
?>
</html>