<?php
session_start();
require_once 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="csscol/style.css" />
<link rel="stylesheet" href="csscol/menuliststyle.css" />
<link rel="stylesheet" href="csscol/buttonstyle.css" />
<link rel="stylesheet" href="csscol/popupstyle.css" />
</head>
<body>

<?php
include("navbar-admin.php") //navbar
?>

<div class="c6">
    <h2>อัดรูป</h2>
    <div class="tt1 aa">
        <a href="uploadproduct.php"><button class="confirmButton">เพิ่มสินค้า</button></a>
    </div>
    
    <div class="menuitemlist">
    <?php
        $query = "SELECT * FROM promotion WHERE p_type='อัดรูป'";
        $result = mysqli_query($mysqli, $query);
        while($row = mysqli_fetch_row($result)) {
            echo "<div class='menueachitemlist'>";
            echo "<div class='picturemenu'>";
            echo "<img src='promotion/$row[5]'>";
            echo "<a href='deletepro.php?id=$row[0]'><button class='btn'><img src='image\bin.png'></button></a>";
            echo "</div>";
            echo "<div>";
            echo "<p>$row[2] นิ้ว</p>";
            echo "<p class='graytext'>จำนวน $row[3] รูป ราคา $row[4] บาท</p>";
            echo "</div>";
            echo "</div>";
        }
        ?>
    </div>

    <div id="popup" class="overlay">
        <div class="delConfirm center">
            <h2>ยืนยันการลบสินค้าออกจากรายการแนะนำ</h2>
            <div class="content">
                <span class="bold">รายการที่ลบ : </span><span>อัลบั้มสอด 3x2 นิ้ว</span>
                <div class="bn">
                    <a href="#"><button class="backButton">ยกเลิก</button></a>
                    <button class="nextButton">ลบสินค้า</button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<?php
 include("footer.php")
?>
</html>