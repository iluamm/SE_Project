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
</head>
<body>

<?php
include("navbar-admin.php")
?>
<div class="c6">
    <h2>ดาวน์โหลดรูปภาพ</h2>

    <div class="menuitemlist">
        <div class="DLeachitemlist">
            <div class="picturemenu">
                <img src="album\elephant.jpg">
            </div>
        </div>

        <div class="DLeachitemlist">
            <div class="picturemenu">
                <img src="album\elephant.jpg">
            </div>
        </div>

        <div class="DLeachitemlist">
            <div class="picturemenu">
                <img src="album\elephant.jpg">
            </div>
        </div>

        <div class="DLeachitemlist">
            <div class="picturemenu">
                <img src="album\elephant.jpg">
            </div>
        </div>

        <div class="DLeachitemlist">
            <div class="picturemenu">
                <img src="album\elephant.jpg">
            </div>
        </div>

        <div class="DLeachitemlist">
            <div class="picturemenu">
                <img src="album\elephant.jpg">
            </div>
        </div>

    </div>


    <div class="bn">
        <a href="javascript:history.back()"><button class="backButton">ยกเลิก</button></a>
        <?php
            if($_SESSION["user_type"]=="admin"){ ?>
                <button class="confirmButton">ดาวน์โหลดทั้งหมด</button> 
        <?php } ?>
    </div>
</div>
    
    
</body>
<?php
 include("footer.php")
?>

</html>