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
    <div class="contextbox">
        <h2>ลายอัลบั้มสอด</h2>
        <a href="uploadalbum.php"><button class="detailCheckButton">เพิ่มลายอัลบั้ม</button></a>
        <p>&nbsp;</p>
        
        <table class="t5">
            <tr>
                <th>เลขที่อัลบั้ม</th>
                <th>ลายอัลบั้ม</th>
                <th>รูปอัลบั้ม</th>
                <th>&nbsp;</th>
            </tr>
            <?php
            $query = "SELECT * FROM album";
            $result = mysqli_query($mysqli, $query);
            while($row = mysqli_fetch_row($result)) {
                echo "<tr>";
                echo "<td>$row[0]</td>";
                echo "<td>$row[2]</td>";
                echo "<td><img src='album/$row[3].jpg' height='120rem'></td>";
                echo "<td><a href='deletealbum.php?id=$row[0]'>ลบลายอัลบั้ม</a></td>";
                echo "</tr>";
            }
        ?>
        </table>

        </div>
    </div>
    




</body>
<?php
 include("footer.php")
?>
</html>