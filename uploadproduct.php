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
</head>
<body>

<?php
include("navbar-admin.php") //navbar
?>


<div class="c5">
    <h2>เพิ่มสินค้า</h2>
    <form>

        <div class="tt1">
            <p> ประเภทสินค้า<span class="red">*</span> 
            <select class="select-add" name="album_type" id="album_type">
                <option value="insert">อัลบั้มสอด</option>
                <option value="adhesive">อัลบั้มกาว</option>
                <option value="adhesive">อัดรูป</option>
            </select></p>
        </div>

        <div class="tt1">
            <p>อัปโหลดรูปภาพสินค้า<span class="red">*</span></p>
            
            <!-- label -->
            <label for="image" class="label-upload">
                <div class="warpupload">
                    <p class="graytext">Select file to upload</p>
                    <img src="image\upload.png" width="30rem">
                    <input class="custom-upload" type="file" name="image" id="image"/>
                </div>
            </label>
        </div>

        

        <h3 class="left">รายละเอียดสินค้า</h3>
        <div class="tt1">
            <p>จำนวนรูป
            <input class="add" type="number" name="a_name" placeholder="จำนวนรูป"> รูป<span class="red">*</span> </p>
        </div>

        <div class="tt1">
            <p>ราคา
            <input class="add" type="number" name="a_name" placeholder="ราคา"> บาท<span class="red">*</span> </p>
        </div>

        <div class="bn">
            <a href="index-admin.php" class="backButton graytext" value="ยืนยัน">ย้อนกลับ</a>
            <a href="#"><input class="nextButton" type="submit" name="Submit" value="ยืนยัน" /></a>
        </div>

    </form>
</div>


</body>
<?php
include("footer.php")
?>
</html>