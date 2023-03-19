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
<style>
input.search{
    width:100%;
    height:2rem;
    border: none;
}

.searchbox{
    margin-bottom: 2.5%;
}

.search{
    width: 100%;
    position: relative;
    display: flex;
    outline: none;
    border: 1px solid #8f8f8f;
    border-radius: 1rem;
}

.search img{
    width: 1rem;
    height: 1rem;
    padding: 0.575rem;
}
</style>

</head>
<body>

<?php
include("navbar-admin.php") //navbar
?>
<div class="contextbox">
    <div class="padpage">
        <h2 class="left">ค้นหาประวัติลูกค้า</h2>
        <form class="inputbar">
            <div class="warpborder">
                <img src="image\search.png">
                <input class="withicon" placeholder="ค้นหา" />
            </div>
        </form>

        <div class="addressbox">
            <br>เบอร์โทร
            <br><input type="text" class="common" value="phone" readonly/>
        </div>

        <div class="addressbox">
            <p>Firstname - Lastname
            <br><input type="text" class="common" value="ลูกพี่เนม เทพซ่า" readonly/>
        </div>
        
        <div class="addressbox">
            <p>Address
            <br><input type="text" class="address" value="phone" readonly/>
        </div>

    </div>
</div>

<div class="contextbox2">
    <h2 class="left">ประวัติการสั่งซื้อ</h2>
</div>
<table class="t5">
    <tr>
        <th>เลขที่ออเดอร์</th>
        <th>วันที่สั่ง</th>
        <th>ราคาออเดอร์</th>
        <th>สถานะออเดอร์</th>
        <th></th>
    </tr>
    <tr>
        <td>xxxxx</td>
        <td>xx/xx/xxxx</td>
        <td>500</td>
        <td>รอตรวจสอบ</td>
        <td><a href="orderdetail.php">
        <input type="submit" class="detailCheckButton" name="Submit" value="รายละเอียด" />
        </a></td>
    </tr>
    <tr>
        <td>xxxxx</td>
        <td>xx/xx/xxxx</td>
        <td>500</td>
        <td>จัดเตรียมสินค้า</td>
        <td><a href="orderdetail.php">
        <input type="submit" class="detailCheckButton" name="Submit" value="รายละเอียด" /></a>
        </td>
    </tr>
</table>
<h6>&nbsp;</h6>
</body>
    <?php
    include("footer.php")
    ?>
</html>