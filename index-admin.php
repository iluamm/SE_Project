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
<link rel="stylesheet" href="csscol/inputstyle.css" />
<link rel="stylesheet" href="csscol/popupstyle.css" />
</head>
<body>

<?php
include("navbar-admin.php") //navbar
?>
<?php
 include("footer.php")
?>
<div class="c6">
    <div class="banner">
        <img src="image\banner2.jpg">
    </div>
    <!-- <h1>BANNER!!!</h1> -->
    <h2 class="left">สินค้าแนะนำ</h2>
    

    <div class="menuitemlist">

        <div>
            <a href="#popup1">
                <div class="addRec">
                    <div class="item">
                        <img src="image\camera.png" width="30rem">
                        <p>เพิ่มสินค้า</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="menueachitemlist">
            <div class="picturemenu">
                <img src="album\elephant.jpg">
                <a href="#popup2"><button class="btn"><img src="image\bin.png"></button></a>
            </div>
            <div>
                <p>อัลบั้มสอด 3x2 นิ้ว</p>
                <p class="graytext">จำนวน 64 รูป ราคา 279 บาท</p>
            </div>
        </div>

        <div class="menueachitemlist">
            <div class="picturemenu">
                <img src="album\elephant.jpg">
                <a href="#popup2"><button class="btn"><img src="image\bin.png"></button></a>
            </div>
            <div>
                <p>อัลบั้มสอด 3x2 นิ้ว</p>
                <p class="graytext">จำนวน 64 รูป ราคา 279 บาท</p>
            </div>
        </div>

        <div class="menueachitemlist">
            <div class="picturemenu">
                <img src="album\elephant.jpg">
                <a href="#popup2"><button class="btn"><img src="image\bin.png"></button></a>
            </div>
            <div>
                <p>อัลบั้มสอด 3x2 นิ้ว</p>
                <p class="graytext">จำนวน 64 รูป ราคา 279 บาท</p>
            </div>
        </div>

        <div class="menueachitemlist">
            <div class="picturemenu">
                <img src="album\elephant.jpg">
                <a href="#popup2"><button class="btn"><img src="image\bin.png"></button></a>
            </div>
            <div>
                <p>อัลบั้มสอด 3x2 นิ้ว</p>
                <p class="graytext">จำนวน 64 รูป ราคา 279 บาท</p>
            </div>
        </div>

        <div class="menueachitemlist">
            <div class="picturemenu">
                <img src="album\elephant.jpg">
                <a href="#popup2"><button class="btn"><img src="image\bin.png"></button></a>
            </div>
            <div>
                <p>อัลบั้มสอด 3x2 นิ้ว</p>
                <p class="graytext">จำนวน 64 รูป ราคา 279 บาท</p>
            </div>
        </div>

        <div class="menueachitemlist">
            <div class="picturemenu">
                <img src="album\elephant.jpg">
                <a href="#popup2"><button class="btn"><img src="image\bin.png"></button></a>
            </div>
            <div>
                <p>อัลบั้มสอด 3x2 นิ้ว</p>
                <p class="graytext">จำนวน 64 รูป ราคา 279 บาท</p>
            </div>
        </div>

    </div>

    <div id="popup1" class="overlay">
        <div class="popup center">
            <h2>เพิ่มสินค้าแนะนำ</h2>
            <a class="close" href="#">&times;</a>
            <div class="content">
                <div class="tt1">
                    <select class="select-addRec">
                        <option value="" disabled selected hidden>ค้นหาจากไอดี</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                    </select>
                </div>
                <div class="left padpage">
                    <p class="bold">รายละเอียดสินค้า</p>
                    <p>ประเภท : อัลบั้มกาว
                        <br>ขนาด : 3x3 นิ้ว
                        <br>จำนวนรูป : 54 รูป
                        <br>ขนาด : 299 บาท
                    </p>
                </div>
                <div class="padpage aa">
                    <button class="saveButton">เพิ่มสินค้าแนะนำ</button>
                </div>
            </div>
        </div>
    </div>

    <div id="popup2" class="overlay">
        <div class="delConfirm center">
            <h2>ยืนยันการลบสินค้าออกจากรายการแนะนำ</h2>
            <div class="content">
                <span class="bold">รายการที่ลบ : </span><span>อัลบั้มสอด 3x2 นิ้ว</span>
                <div class="bn">
                    <a href=""><button class="delButton">ยกเลิก</button></a>
                    <button class="nextButton">ลบสินค้า</button>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>