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

<body width="100%">
<?php
include("navbar.php")
?>
<div class="logsign">
    <div class="logsigncolumn">
        <img src="image\login_photo.jpg" width="100%">
    </div>
    
    <div class="logsigncolumn">
        <h1>กรุณาเข้าสู่ระบบ</h1>

        <div class="area4">
            <form class="inputbar" align="center" name="frm" method="post" action="checklogin.php" enctype="multipart/from-data">
                <div class="warpborder">
                    <img src="image\user.png">
                    <input class="withicon" type="text" name="username" placeholder="เบอร์โทรศัพท์">
                </div>
                <p>&nbsp;</p>
                <div class="warpborder">
                    <img src="image\key.png">
                    <input class="withicon" type="password" name="password" placeholder="รหัสผ่าน">
                </div>
                
                <p>&nbsp;</p>
                <input class="losicButton" type="submit" name="Submit" value="เข้าสู่ระบบ" /></input>
            </form>
        </div>

        <p align="center">
            <a href="register.php">ยังไม่มีบัญชี? สมัครเลย</a>
        </p>
    </div>
</div>

</body>

<?php
    include("footer.php")
?>

</html>