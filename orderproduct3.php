<?php
session_start();
require_once 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="csscol/style.css" />
<link rel="stylesheet" href="csscol/menuliststyle.css" />
</head>

<body>
<?php
include("navbar.php")
?>
<div class="c6">
    <h3>อัดรูป</h3>

    <div class="menuitemlist">
    <?php
        $query = "SELECT * FROM promotion WHERE p_type='อัดรูป'";
        $result = mysqli_query($mysqli, $query);
        while($row = mysqli_fetch_row($result)) {
            if(isset($_SESSION['user_username'])) {
                echo "<a href='orderproduct.php?id=$row[0]'>";
                echo "<div class='menueachitemlist'>";
                echo "<div class='picturemenu'>";
                echo "<img src='promotion/$row[5]'>";
                echo "</div>";
                echo "<div>";
                echo "<p>$row[2] นิ้ว</p>";
                echo "<p class='graytext'>จำนวน $row[3] รูป ราคา $row[4] บาท</p>";
                echo "</div>";
                echo "</div></a>";
            }else{
                echo "<a href='login.php'>";
                echo "<div class='menueachitemlist'>";
                echo "<div class='picturemenu'>";
                echo "<img src='promotion/$row[5]'>";
                echo "</div>";
                echo "<div>";
                echo "<p>$row[2] นิ้ว</p>";
                echo "<p class='graytext'>จำนวน $row[3] รูป ราคา $row[4] บาท</p>";
                echo "</div>";
                echo "</div></a>";
            }
        }
    ?>
    </div>
</div>
    
</body>
<?php
 include("footer.php")
?>
</html>