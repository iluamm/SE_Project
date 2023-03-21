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


<div class="padpage">

<h2>เพิ่มลายอัลบั้ม</h2>
 <form action="upload.php" method="post" enctype="multipart/form-data">
  ประเภทอัลบั้ม : 
    <select name="album_type" id="album_type">
        <option value="insert">อัลบั้มสอด</option>
        <option value="adhesive">อัลบั้มกาว</option>
    </select>
  <br>ลายอัลบั้ม : <input type="text" name="a_name" placeholder="ลายอัลบั้ม">
  <br>อัปโหลดรูปภาพลายอัลบั้ม<input type="file" name="image" id="image">
  <br>
  <input class="detailCheckButton"  type="submit" value="ยืนยัน" name="submit">
</form>
<a href="index-admin.php"><button class="detailCheckButton" >ย้อนกลับ</button></a>

</div>




</body>
<?php
 include("footer.php")
?>
</html>