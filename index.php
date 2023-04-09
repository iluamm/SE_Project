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
    <div>
        <img class="bannercrop" src="image\banner.jpg">
    </div>

    <h2 class="left">สินค้าแนะนำ</h2>

    <div class="menuitemlist">
    <?php 
        $query2 = "SELECT * FROM recommend";
        $result2 = mysqli_query($mysqli, $query2);
        
        while($row2 = mysqli_fetch_row($result2)) {
            $query3 = "SELECT * FROM promotion WHERE promotion_id='$row2[1]'";
            $result3 = mysqli_query($mysqli, $query3);
            while($row3 = mysqli_fetch_row($result3)){ ?>
                <?php if(isset($_SESSION['user_username'])) { ?>
                <a href="orderproduct.php?id=<?php echo $row3[0]; ?>">
                <div class="menueachitemlist">
                    <div class="picturemenu">
                        <img src="promotion/<?php echo $row3[5]; ?>">
                    </div>
                    <div>
                        <p><?php echo $row3[1]." ".$row3[2]." นิ้ว"; ?></p>
                        <p class="graytext">จำนวน <?php echo $row3[3]?> รูป ราคา <?php echo $row3[4]?> บาท</p>
                    </div>
                </div>
                </a>
                <?php }else{ ?>
                    <a href="login.php">
                    <div class="menueachitemlist">
                        <div class="picturemenu">
                            <img src="promotion/<?php echo $row3[5]; ?>">
                        </div>
                        <div>
                            <p><?php echo $row3[1]." ".$row3[2]." นิ้ว"; ?></p>
                            <p class="graytext">จำนวน <?php echo $row3[3]?> รูป ราคา <?php echo $row3[4]?> บาท</p>
                        </div>
                    </div>
                    </a>
                    <?php } ?>
            <?php }
        }?>
    </div>
</div>



</body>
<?php
 include("footer.php")
?>
</html>