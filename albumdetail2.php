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
<link rel="stylesheet" href="csscol/choicestyle.css" />
</head>
<body>

<?php
include("navbar-admin.php")
?>
<div class="c6">
    <h2 class="tt1">อัลบั้มกาว</h2>
    <div class="tt1 aa padpage2">
        <a href="uploadalbum.php"><button class="confirmButton">เพิ่มลายอัลบั้ม</button></a>
    </div>
    
    <table class="t6 tt1">
        <tr>
            <th>เลขที่อัลบั้ม</th>
            <th>ลายอัลบั้ม</th>
            <th>รูปอัลบั้ม</th>
            <th>&nbsp;</th>
        </tr>
        <?php
        $query = "SELECT * FROM album WHERE a_type='อัลบั้มกาว'";
        $result = mysqli_query($mysqli, $query);
        while($row = mysqli_fetch_row($result)) {
            echo "<tr>";
            echo "<td>$row[0]</td>";
            echo "<td>$row[2]</td>";
            echo "<td><img class='crop-album' src='album/$row[3]' height='120rem'></td>";
            echo "<td><a href='deletealbum.php?id=$row[0]'><input class='cancelButton' type='submit' name='Submit' value='ลบลายอัลบั้ม' /></a></td>";
            echo "</tr>";
        }
    ?>
    </table>

    <div class="c6">
        <a href="editproduct2.php"><input class="backButton" type="submit" name="Submit" value="ย้อนกลับ" /></a>
    </div>

</div>
    
    
</body>
<?php
 include("footer.php")
?>
</html>