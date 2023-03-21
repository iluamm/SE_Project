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

<a href="uploadalbum.php"><button>ไปหน้าเพิ่มอัลบั้ม</button></a>




</body>
<?php
 include("footer.php")
?>
</html>