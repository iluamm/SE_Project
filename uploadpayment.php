<?php
session_start();
require_once 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="csscol/style.css" />
<link rel="stylesheet" href="csscol/buttonstyle.css" />
<link rel="stylesheet" href="csscol/inputstyle.css" />
</head>
<body>

<?php
include("navbar.php")
?>

<div class="c5">
    <h2>ชำระเงิน</h2>

    <div class="center">
        <img class="qrcodepic" src="image\businessQR.jpg">
        <div align="center">
            <label for="slip" class="label-upload">
                <div class="warpupload warpupload-w2-5">
                    <p class="graytext">อัปโหลดหลักฐานการชำระเงิน</p>
                    <img src="image\upload.png" width="30rem">
                    <input class="custom-upload" type="file" name="slip" id="slip"/>
                </div>
            </label>
        </div>
        <p class="red">**หากไม่ชำระเงินภายใน 24 ชั่วโมง ระบบจะยกเลิกออเดอร์อัตโนมัติ</p>
    </div>

    <h2 class="left">ข้อมูลการโอนเงิน</h2>
    <dd>
        <p class="tt1">วันที่โอนเงิน <input class="a1-5" type="date" /></p>
        <p class="tt1">เวลาที่โอนเงิน <input  class="a1" type="time" /></p>
        <a  href="#">
            <img src="image\bin2.png" width="20rem"> 
            <span class="graytext">ยกเลิกออเดอร์<br>
            *หากชำระเงินไปแล้วและต้องการยกเลิกคำสั่งซื้อ กรุณาติดต่อร้านเพื่อรับเงินคืน
            </span>
        </a>
        
    </dd>
    <div class="bn">
        <a href="checkorder.php"><input class="backButton" type="submit" name="Submit" value="ย้อนกลับ" /></a>
        <a href="history.php"><input class="nextButton" type="submit" name="Submit" value="ถัดไป" /></a>
    </div>
</div>



</body>
<?php
 include("footer.php")
?>
</html>