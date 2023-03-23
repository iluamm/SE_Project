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

<div class="c6">
    <h2>อัลบั้มกาว</h2>
    <div class="tt1 aa">
        <a href="albumdetail2.php"><button class="detailCheckButton">ลายอัลบั้ม</button></a>
        <a href="uploadproduct.php"><button class="confirmButton">เพิ่มสินค้า</button></a>
    </div>
    
    <div class="menuitemlist">

        <?php
        $query = "SELECT * FROM promotion WHERE p_type='adhesive'";
        $result = mysqli_query($mysqli, $query);
        while($row = mysqli_fetch_row($result)) {
            echo "<div class='menueachitemlist'>";
            echo "<div class='picturemenu'>";
            echo "<img src='promotion/$row[5]'>";
            echo "<a href='deletepro.php?id=$row[0]'><button class='btn'><img src='image\bin.png'></button></a>";
            echo "</div>";
            echo "<div>";
            echo "<p>$row[2] นิ้ว</p>";
            echo "<p class='graytext'>จำนวน $row[3] รูป ราคา $row[4] บาท</p>";
            echo "</div>";
            echo "</div>";
        }
        ?>

    </div>
</div>
</body>
<?php
 include("footer.php")
?>
</html>