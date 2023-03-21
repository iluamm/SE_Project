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
    <div class="contextbox">
        <h2>อัลบั้มสอด</h2>
        <a href="albumdetail.php"><button class="detailCheckButton">ลายอัลบั้ม</button></a>
        <p>&nbsp;</p>

        <div class="menuitemlist">
            <div class="menueachitemlist">
                <div class="picturemenu">
                    <img src="album\elephant.jpg">
                </div>
                <div>
                    <p>3x2 นิ้ว</p>
                    <p class="graytext">จำนวน 64 รูป ราคา 279 บาท</p>
                </div>
            </div>

            <div class="menueachitemlist">
                <div class="picturemenu">
                    <img src="album\elephant.jpg">
                </div>
                <div>
                    <p>3x2 นิ้ว</p>
                    <p class="graytext">จำนวน 64 รูป ราคา 279 บาท</p>
                </div>
            </div>

            <div class="menueachitemlist">
                <div class="picturemenu">
                    <img src="album\elephant.jpg">
                </div>
                <div>
                    <p>3x2 นิ้ว</p>
                    <p class="graytext">จำนวน 64 รูป ราคา 279 บาท</p>
                </div>
            </div>

            <div class="menueachitemlist">
                <div class="picturemenu">
                    <img src="album\elephant.jpg">
                </div>
                <div>
                    <p>3x2 นิ้ว</p>
                    <p class="graytext">จำนวน 64 รูป ราคา 279 บาท</p>
                </div>
            </div>

            <div class="menueachitemlist">
                <div class="picturemenu">
                    <img src="album\elephant.jpg">
                </div>
                <div>
                    <p>3x2 นิ้ว</p>
                    <p class="graytext">จำนวน 64 รูป ราคา 279 บาท</p>
                </div>
            </div>

            <div class="menueachitemlist">
                <div class="picturemenu">
                    <img src="album\elephant.jpg">
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