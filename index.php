<?php
session_start();
require_once 'connect.php';
?>
<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="csscol/style.css" />
<link rel="stylesheet" href="csscol/menuliststyle.css" />
</head>

<body>

<?php
include("navbar.php")
?>


<div class="contextbox">
    <div class="banner">
        <img src="image\banner2.jpg">
    </div>
    <!-- <h1>BANNER!!!</h1> -->
    <h2 class="left">สินค้าแนะนำ</h2>

    <div class="menuitemlist">

    <?php if(isset($_SESSION['user_username'])) { ?>
        <a href="orderproduct.php">
        <div class="menueachitemlist">
            <div class="picturemenu">
                <img src="album\elephant.jpg">
            </div>
            <div>
                <p>3x2 นิ้ว</p>
                <p class="graytext">จำนวน 64 รูป ราคา 279 บาท</p>
            </div>
        </div>
        </a>
        <?php }else{ ?>
            <a href="login.php">
            <div class="menueachitemlist">
            <div class="picturemenu">
                <img src="album\elephant.jpg">
            </div>
            <div>
                <p>3x2 นิ้ว</p>
                <p class="graytext">จำนวน 64 รูป ราคา 279 บาท</p>
            </div>
        </div>
        </a>
        <?php } ?>
        

        <?php if(isset($_SESSION['user_username'])) { ?>
        <a href="orderproduct.php">
        <div class="menueachitemlist">
            <div class="picturemenu">
                <img src="album\elephant.jpg">
            </div>
            <div>
                <p>3x2 นิ้ว</p>
                <p class="graytext">จำนวน 64 รูป ราคา 279 บาท</p>
            </div>
        </div>
        </a>
        <?php }else{ ?>
            <a href="login.php">
            <div class="menueachitemlist">
            <div class="picturemenu">
                <img src="album\elephant.jpg">
            </div>
            <div>
                <p>3x2 นิ้ว</p>
                <p class="graytext">จำนวน 64 รูป ราคา 279 บาท</p>
            </div>
        </div>
        </a>
        <?php } ?>        
        
        
        <?php if(isset($_SESSION['user_username'])) { ?>
        <a href="orderproduct.php">
        <div class="menueachitemlist">
            <div class="picturemenu">
                <img src="album\elephant.jpg">
            </div>
            <div>
                <p>3x2 นิ้ว</p>
                <p class="graytext">จำนวน 64 รูป ราคา 279 บาท</p>
            </div>
        </div>
        </a>
        <?php }else{ ?>
            <a href="login.php">
            <div class="menueachitemlist">
            <div class="picturemenu">
                <img src="album\elephant.jpg">
            </div>
            <div>
                <p>3x2 นิ้ว</p>
                <p class="graytext">จำนวน 64 รูป ราคา 279 บาท</p>
            </div>
        </div>
        </a>
        <?php } ?>
        

        <?php if(isset($_SESSION['user_username'])) { ?>
        <a href="orderproduct.php">
        <div class="menueachitemlist">
            <div class="picturemenu">
                <img src="album\elephant.jpg">
            </div>
            <div>
                <p>3x2 นิ้ว</p>
                <p class="graytext">จำนวน 64 รูป ราคา 279 บาท</p>
            </div>
        </div>
        </a>
        <?php }else{ ?>
            <a href="login.php">
            <div class="menueachitemlist">
            <div class="picturemenu">
                <img src="album\elephant.jpg">
            </div>
            <div>
                <p>3x2 นิ้ว</p>
                <p class="graytext">จำนวน 64 รูป ราคา 279 บาท</p>
            </div>
        </div>
        </a>
        <?php } ?>
        

        <?php if(isset($_SESSION['user_username'])) { ?>
        <a href="orderproduct.php">
        <div class="menueachitemlist">
            <div class="picturemenu">
                <img src="album\elephant.jpg">
            </div>
            <div>
                <p>3x2 นิ้ว</p>
                <p class="graytext">จำนวน 64 รูป ราคา 279 บาท</p>
            </div>
        </div>
        </a>
        <?php }else{ ?>
            <a href="login.php">
            <div class="menueachitemlist">
            <div class="picturemenu">
                <img src="album\elephant.jpg">
            </div>
            <div>
                <p>3x2 นิ้ว</p>
                <p class="graytext">จำนวน 64 รูป ราคา 279 บาท</p>
            </div>
        </div>
        </a>
        <?php } ?>
        
        
        <?php if(isset($_SESSION['user_username'])) { ?>
        <a href="orderproduct.php">
        <div class="menueachitemlist">
            <div class="picturemenu">
                <img src="album\elephant.jpg">
            </div>
            <div>
                <p>3x2 นิ้ว</p>
                <p class="graytext">จำนวน 64 รูป ราคา 279 บาท</p>
            </div>
        </div>
        </a>
        <?php }else{ ?>
            <a href="login.php">
            <div class="menueachitemlist">
            <div class="picturemenu">
                <img src="album\elephant.jpg">
            </div>
            <div>
                <p>3x2 นิ้ว</p>
                <p class="graytext">จำนวน 64 รูป ราคา 279 บาท</p>
            </div>
        </div>
        </a>
        <?php } ?>

    </div>
</div>



</body>
<?php
 include("footer.php")
?>
</html>