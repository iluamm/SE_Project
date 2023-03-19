<?php
session_start();
require_once 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="csscol/style.css" />
<link rel="stylesheet" href="csscol/buttonstyle.css" />
<link rel="stylesheet" href="csscol/inputstyle.css" />
</head>
<body>

<?php
include("navbar.php")
?>

<div class="contextbox">
    <div class="padpage">
        <h2>แก้โปรไฟล์ (Profile)</h2>

        <div class="addressbox">
            เบอร์โทรศัพท์ (Phone number)
            <br><dd>09x-xxx-xxxx</dd>
        </div>

        <div class="addressbox">
            <p>ชื่อ-นามสกุล (Firstname - Lastname)
            <br><input type="text" class="common" value="ลูกพี่เนม เทพซ่า"/>
        </div>
        
        <div class="addressbox">
            <p>ที่อยู่ (Address)
            <br><input type="text" class="profileAddress" value="phone"/>
        </div>

        <div align="right">
            <a href="profile.php"><input type="submit" class="saveButton" name="Submit" value="บันทึกการเปลี่ยนแปลง"  /></a>
        </div>

    </div>
</div>

</body>
<?php
 include("footer.php")
?>
</html>