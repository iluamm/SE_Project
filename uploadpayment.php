<?php
session_start();
require_once 'connect.php';
$order_id=$_GET['id'];
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
    <form action="paymentupdate.php?id=<?php echo $order_id; ?>" method="post" enctype="multipart/form-data">
        
    <div class="center">
            <img class="qrcodepic" src="image\businessQR.jpg">

            <div align="center">
                <label for="image" class="label-upload">
                    <div class="warpupload warpupload-w2-5">
                        <p class="graytext">อัปโหลดหลักฐานการชำระเงิน</p>
                        <img src="image\upload.png" width="30rem">
                        <input class="custom-upload" type="file" name="image" id="image" />
                    </div>
                </label>
            </div>
            <p class="red">**หากไม่ชำระเงินภายใน 24 ชั่วโมง ระบบจะยกเลิกออเดอร์อัตโนมัติ</p>
        </div>

    <h2 class="left">ข้อมูลการโอนเงิน</h2>
    <dd>
        <p class="tt1">วันที่โอนเงิน <input name="t_date" class="a1-5" type="date" /></p>
        <p class="tt1">เวลาที่โอนเงิน <input  name="t_time" class="a1-5" type="time" /></p>
        <a href="deleteorder.php?id=<?php echo $order_id; ?>">
            <img src="image\bin2.png" width="20rem"> 
            <span class="graytext">ยกเลิกออเดอร์<br>
            *หากชำระเงินไปแล้วและต้องการยกเลิกคำสั่งซื้อ กรุณาติดต่อร้านเพื่อรับเงินคืน
            </span>
        </a>
    </dd>
    <input type="hidden" name="order_status" value="รอการตรวจสอบการชำระเงิน">
    <div class="bn">
        <a class="backButton" href="checkorder.php?id=<?php echo $order_id; ?>">ย้อนกลับ</a>
        <a href="history.php"><input class="nextButton" type="submit" name="paymentupdate" value="ถัดไป" /></a>
    </div>
    </form>
</div>
</body>
<?php
 include("footer.php")
?>
</html>