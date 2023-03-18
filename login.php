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
</head>

<body width="100%">
<?php
include("navbar.php")
?>
<div class="logsign">
    <div class="logsigncolumn">
        <img src="\image\login photo.jpg" width="100%">
    </div>
    
    <div class="logsigncolumn">
        <h1>กรุณาเข้าสู่ระบบ</h1>

        <form name="frm" align="center" method="post" action="checklogin.php" enctype="multipart/from-data">
            <input class="common" type="text" name="username" placeholder="เบอร์โทรศัพท์">
            <p>&nbsp;</p>
            <input class="common" type="password" name="password" placeholder="รหัสผ่าน">
            <p>&nbsp;</p>
            <input class="losicButton" type="submit" name="Submit" value="เข้าสู่ระบบ" /></input>
        </form>
        <h5>
            <a href="register.php">ยังไม่มีบัญชี? สมัครเลย</a>
        </h5>
    </div>
</div>

</body>

<?php
    include("footer.php")
?>

</html>