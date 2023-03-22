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
<link rel="stylesheet" href="csscol/tablestyle.css" />
<link rel="stylesheet" href="csscol/inputstyle.css" />
</head>
<body>

<?php
include("navbar-admin.php") //navbar
?>
<div class="c6">
    <h2>อัลบั้มสอด</h2>
    <div class="tt1 aa">
        <a href="albumdetail.php"><button class="detailCheckButton">ลายอัลบั้ม</button></a>
        <a href="albumdetail.php"><button class="confirmButton">เพิ่มสินค้า</button></a>
    </div>
    

    <div class="menuitemlist">
    <div class="menueachitemlist">
            <div class="picturemenu">
                <img src="album\elephant.jpg">
                <a href="#"><button class="btn"><img src="image\bin.png"></button></a>
            </div>
            <div>
                <p>3x2 นิ้ว</p>
                <p class="graytext">จำนวน 64 รูป ราคา 279 บาท</p>
            </div>
        </div>

        <div class="menueachitemlist">
            <div class="picturemenu">
                <img src="album\elephant.jpg">
                <a href="#"><button class="btn"><img src="image\bin.png"></button></a>
            </div>
            <div>
                <p>3x2 นิ้ว</p>
                <p class="graytext">จำนวน 64 รูป ราคา 279 บาท</p>
            </div>
        </div>

        <div class="menueachitemlist">
            <div class="picturemenu">
                <img src="album\elephant.jpg">
                <a href="#"><button class="btn"><img src="image\bin.png"></button></a>
            </div>
            <div>
                <p>3x2 นิ้ว</p>
                <p class="graytext">จำนวน 64 รูป ราคา 279 บาท</p>
            </div>
        </div>

        <div class="menueachitemlist">
            <div class="picturemenu">
                <img src="album\elephant.jpg">
                <a href="#"><button class="btn"><img src="image\bin.png"></button></a>
            </div>
            <div>
                <p>3x2 นิ้ว</p>
                <p class="graytext">จำนวน 64 รูป ราคา 279 บาท</p>
            </div>
        </div>

        <div class="menueachitemlist">
            <div class="picturemenu">
                <img src="album\elephant.jpg">
                <a href="#"><button class="btn"><img src="image\bin.png"></button></a>
            </div>
            <div>
                <p>3x2 นิ้ว</p>
                <p class="graytext">จำนวน 64 รูป ราคา 279 บาท</p>
            </div>
        </div>

        <div class="menueachitemlist">
            <div class="picturemenu">
                <img src="album\elephant.jpg">
                <a href="#"><button class="btn"><img src="image\bin.png"></button></a>
            </div>
            <div>
                <p>3x2 นิ้ว</p>
                <p class="graytext">จำนวน 64 รูป ราคา 279 บาท</p>
            </div>
        </div>

    </div>
</div>

</body>
<?php
 include("footer.php")
?>
</html>