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
include("navbar-admin.php") //navbar
?>
    <div class="contextbox">
        <h2>อัลบั้มสอด</h2>
        <a href="uploadalbum.php"><button class="detailCheckButton">เพิ่มลายอัลบั้ม</button></a>
        <p>&nbsp;</p>

        <?php
    $query = "SELECT * FROM album";
    $result = mysqli_query($mysqli, $query);
    while($row = mysqli_fetch_row($result)) {
        echo "<img src='album/$row[3].jpg' height='120rem'><br>";
    }
?>

        </div>
    </div>
    




</body>
<?php
 include("footer.php")
?>
</html>