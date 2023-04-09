<?php
session_start();
require_once 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="csscol/style.css" />
<link rel="stylesheet" href="csscol/menuliststyle.css" />
<link rel="stylesheet" href="csscol/buttonstyle.css" />
<link rel="stylesheet" href="csscol/tablestyle.css" />
<link rel="stylesheet" href="csscol/inputstyle.css" />
</head>
<body>

<?php
include("navbar-admin.php")
?>
<div class="c6">
    <div class="logsigncolumn">
        <h1>เพิ่มพนักงานใหม่</h1>
        <div class="padpage2">
            <form align="center" method="post" action="addadminrole.php" enctype="multipart/form-data">
                <div class="c6">
                    <div class="warpborder">
                        <img src="image\user.png">
                        <input class="withicon a10" type="text" name="username" placeholder="ชื่อผู้ใช้">
                    </div>
                    <p>&nbsp;</p>
                    <div class="warpborder tt1">
                        <img src="image\key.png">
                        <input class="withicon" type="password" name="password" placeholder="รหัสผ่าน">
                    </div>
                    <div class="tt1">
                        <input class="saveButton" type="submit" name="addrole" value="ยืนยันการลงทะเบียน" /></input>
                    </div>
                </div>
            </form>
        </div>
        <p class="graytext" align="center"><br></p>
    </div>
</div>
</body>
<?php
 include("footer.php")
?>
</html>