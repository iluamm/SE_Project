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
<link rel="stylesheet" href="csscol/menuliststyle.css" />
</head>
<body>

<?php
include("navbar.php")
?>

<div class="padpage">
<h2 class="left">-กรุณาอัพโหลดรูปภาพ-</h2>
<table class="t6">
    <tr>
        <td>
            <input type="file" />
            <p>
                <img src="album/elephant.jpg" height="120rem">
                <img src="album/elephant.jpg" height="120rem">
                <img src="album/elephant.jpg" height="120rem">
                <img src="album/elephant.jpg" height="120rem">
                <img src="album/elephant.jpg" height="120rem">
                <img src="album/elephant.jpg" height="120rem">
                <img src="album/elephant.jpg" height="120rem">
        </td>
    </tr>
</table>

<h2 class="left">-เลือกอัลบั้ม-</h2>
    <input type="radio" id="album" name="album" value="album" /><img src="album/elephant.jpg" height="120rem">
    <input type="radio" id="album" name="album" value="album" /><img src="album/elephant.jpg" height="120rem">
    <input type="radio" id="album" name="album" value="album" /><img src="album/elephant.jpg" height="120rem">
    <input type="radio" id="album" name="album" value="album" /><img src="album/elephant.jpg" height="120rem">
    <input type="radio" id="album" name="album" value="album" /><img src="album/elephant.jpg" height="120rem">
    <input type="radio" id="album" name="album" value="album" /><img src="album/elephant.jpg" height="120rem">
    <input type="radio" id="album" name="album" value="album" /><img src="album/elephant.jpg" height="120rem">


<p>
    <a href="orderproduct.php"><button>ย้อนกลับ</button></a>
    <a href="shoppingcart.php"><button>ถัดไป</button></a>

</div>




</body>
<?php
 include("footer.php")
?>
</html>