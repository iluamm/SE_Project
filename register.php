<?php
session_start();
require_once 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="buttonstyle.css" />
<link rel="stylesheet" href="inputstyle.css" />
<link rel="stylesheet" href="tablestyle.css" />
</head>
<body>

<?php
include("navbar.php")
?>
<!-- <h1>ลงชื่อเข้าใช้</h1>
<form name="frm" align="center" method="post" action="checkregis.php" enctype="multipart/from-data">
<input class="form-input" type="text" name="name" placeholder="ชื่อ-นามสกุล">
<input class="form-input" type="text" name="username" placeholder="เบอร์โทรศัพท์">
<input class="form-input" type="text" name="password" placeholder="รหัสผ่าน">
<input class="form-input" type="text" name="password2" placeholder="ยืนยันรหัสผ่าน">
<br><input class="form-button" type="submit" name="regis" value="สมัครสมาชิก" /></input>
</form> -->

<div class="logsign">
    <div class="logsigncolumn">
        <img src="image\login_photo.jpg" width="100%">
    </div>
    
    <div class="logsigncolumn">
        <h1>ลงชื่อเข้าใช้</h1>
        <div class="area4">
            <form class="inputbar" align="center" name="frm" method="post" action="checkregis.php" enctype="multipart/from-data">
                <div class="warpborder">
                    <img src="image\user.png">
                    <input class="withicon" type="text" name="name" maxlength="25" placeholder="ชื่อ-นามสกุล">
                </div>
                <p>&nbsp;</p>
                <div class="warpborder">
                    <img src="image\phone.png">
                    <input class="withicon" type="text" name="username" maxlength="10" placeholder="เบอร์โทรศัพท์">
                </div>
                <p>&nbsp;</p>
                <div class="warpborder">
                    <img src="image\key.png">
                    <input class="withicon" type="password" name="password" placeholder="รหัสผ่าน">
                </div>
                <p>&nbsp;</p>
                <div class="warpborder">
                    <img src="image\key.png">
                    <input class="withicon" type="password" name="password" placeholder="ยืนยันรหัสผ่าน">
                </div>
                
                <p>&nbsp;</p>
                <input class="losicButton" type="submit" name="Submit" value="สมัครสมาชิก" /></input>
            </form>
        </div>
    </div>
</div>




</body>
<?php
 include("footer.php")
?>
</html>