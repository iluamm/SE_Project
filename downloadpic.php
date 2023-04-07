<?php
session_start();
require_once 'connect.php';
$list_no=$_GET['id'];
$query = "SELECT * FROM list WHERE list_no='".$list_no."'";
$result = mysqli_query($mysqli, $query);
$row = mysqli_fetch_assoc($result);
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
        <a href="orderdetail.php?id=<?php echo $row['order_id']; ?>"><button class="backButton">ย้อนกลับ</button></a>
        <button class="confirmButton">ดาวน์โหลดทั้งหมด</button>
    </div>
</div>
    
    
</body>
<?php
 include("footer.php")
?>

</html>