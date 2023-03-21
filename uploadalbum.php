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
<!-- <form action="upload.php" method="post"enctype="multipart/from-data">
                <label>เลขที่อัลบั้ม</label>                
                    <input type="text" name="name" placeholder="ชื่อ-นามสกุล">
                <p>&nbsp;</p>
                <label>ประเภทอัลบั้ม</label>   
                    <input  type="text" name="username" placeholder="เบอร์โทรศัพท์">
                <p>&nbsp;</p>
                <label>อัพโหลดรูปภาพลายอัลบั้ม</label>
                <input type="file" name="image" id="image">
                
                <p>&nbsp;</p>
                <input  type="submit" name="submit" value="submit" />
            </form> -->
 <form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="text" name="a_type" placeholder="a_type">
  <input type="text" name="a_name" placeholder="a_name">
  <input type="file" name="image" id="image">
  <input type="submit" value="Upload Image" name="submit">
</form>

</div>




</body>
<?php
 include("footer.php")
?>
</html>