<?php
session_start();
require_once 'connect.php';
$promotion_id = $_GET['id'];
$query = "SELECT * FROM promotion WHERE promotion_id = '".$promotion_id."'";
$result = mysqli_query($mysqli, $query);
$row = mysqli_fetch_row($result);
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
    <h6><img src="promotion/<?php echo $row[5] ?>" height="350rem"></h6>

    <table class="t6">
        <tr>
            <td>                
                <p class="left bold">รายละเอียดสินค้า (Order detail)</p>
                <p class="left">
                    ขนาดภาพ: <?php echo $row[2] ?> นิ้ว
                    <br>จำนวน: <?php echo $row[3] ?> รูป
                    <br>ชนิดกระดาษ: กระดาษ Fujicolor Crystal Archive 260 แกรม
                    <br>ระยะเวลาจัดทำ: ไม่เกิน 1 สัปดาห์
                </p>
            </td>
            <td>
                <p>ราคารวม <?php echo $row[4] ?> บาท</p>
                <br><a href="uploadorder.php?id=<?php echo $row[0] ?>">
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