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
    <h2>เพิ่มลายอัลบั้ม</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">

        <div class="tt1">
            <p> ประเภทอัลบั้ม<span class="red">*</span> : 
            <select class="select-add" name="album_type" id="album_type">
                <option value="อัลบั้มสอด">อัลบั้มสอด</option>
                <option value="อัลบั้มกาว">อัลบั้มกาว</option>
            </select></p>
        </div>

        <div class="tt1">
            <p>ลายอัลบั้ม<span class="red">*</span> : 
            <input class="add" type="text" name="a_name" placeholder="ลายอัลบั้ม"></p>
        </div>

        <div class="tt1">
            <p>อัปโหลดรูปภาพลายอัลบั้ม<span class="red">*</span></p>
            
            <!-- label -->
            <label for="image" class="label-upload">
                <div class="warpupload">
                    <p class="graytext">Select file to upload</p>
                    <img src="image\upload.png" width="30rem">
                    <input class="custom-upload" type="file" name="image" id="image"/>
                </div>
            </label>
        </div>

        <div class="bn">
            <a href="albumdetail1.php" class="backButton graytext" value="ยืนยัน">ย้อนกลับ</a>
            <a href="#"><input class="nextButton" type="submit" name="Submit" value="ยืนยัน" /></a>
        </div>

    </form>
</div>


</body>
<?php
include("footer.php")
?>
</html>