<?php
session_start();
require_once 'connect.php';
?>
<!DOCTYPE html>
<html>
<body>
<head>
<link rel="stylesheet" href="csscol/style.css" />
<link rel="stylesheet" href="csscol/buttonstyle.css" />
<link rel="stylesheet" href="csscol/tablestyle.css" />
</head>
<?php
include("navbar.php")
?>


<div class="padpage">
    <h2>ตะกร้าสินค้า</h2>
    <form action="order.php" method="post" enctype="multipart/form-data">
    <table class="t6 tt1">
        <tr>
            <th>ลำดับรายการ   </th>
            <th>สินค้า</th>
            <th>รายละเอียดสินค้า</th>
            <th>ราคา</th>
        </tr>

        <?php if(isset($_SESSION["intLine"])){ ?>

        <?php
        $Total=0;
        $m=0;
        for($i=1; $i<=(int)$_SESSION["intLine"]; $i++){
            if($_SESSION["promotion_id"][$i] !=""){
                $m+=1;
                $sql1 = "SELECT * FROM promotion WHERE promotion_id='".$_SESSION['promotion_id'][$i]."'";
                $result1 = mysqli_query($mysqli, $sql1); 
                $row1 = $result1 -> fetch_array(MYSQLI_ASSOC);
                $sql2 = "SELECT * FROM album WHERE album_id='".$_SESSION['album_id'][$i]."'";
                $result2 = mysqli_query($mysqli, $sql2); 
                $row2 = $result2 -> fetch_array(MYSQLI_ASSOC);
                echo '<tr><td>'.$m.'</td>';
                echo '<td><img src="album/'.$row2['a_image'].'" height="120rem">';
                echo '<td class="left">';
                echo $row1['p_type'];
                echo '<br>ขนาดรูป : '.$row1['pic_size'].' นิ้ว';
                echo '<br>จำนวน : '.$row1['pic_amount'].' รูป';
                echo '<br>ลายอัลบั้ม : '.$row2['a_name'];
                echo '</td>';
                echo '<td>'.$row1['p_price'].'บาท';
                echo '<a class="delcButton" href="delete_cart.php?Line='.$i.'">✖</a>';
                echo '</td></tr>';
                $Total+=$row1['p_price'];
            }
        }
        ?>

        <tr>
            <td colspan="3" class="left">ราคาสินค้าทั้งหมด</td>
            <td class="right"><?php echo $Total; ?> บาท</td>
        </tr>
        <tr>
            <td colspan="3" class="left">ค่าจัดส่ง</td>
            <td class="right">50 บาท</td>
        </tr>
        <tr>
            <td colspan="3" class="left">ราคารวม</td>
            <td class="right"><?php echo $Total+50; ?> บาท</td>
        </tr>

        <?php }
        else{ ?>
            <tr>
                <td colspan="4" class="fat"> <p class="graytext">คุณยังไม่เพิ่มรายการใดลงในตะกร้า</p></td>
            </tr>
        <?php } ?>

    </table>

    <div class="padpage2">
        <p class="graytext">*รายการในตะกร้าจะหายไปเมื่อคุณออกจากระบบ</p>
    </div>
    
    <br>
    <?php if(isset($_SESSION["intLine"])){ ?>
    <input type="hidden" name="total" value="<?php echo $Total+50; ?>"/>
    <div class="c6" align="right" >
        <!-- <div class="padpage"> -->
            <a href="order.php">
            <input class="orderConfirmButton" type="submit" name="Submit" value="ยืนยันคำสั่งซื้อ" /></input>
            </a>
        <!-- </div> -->
    </div>
    <?php } ?>
    </form>
    



</div>



</body>
<?php
 include("footer.php")
?>
</html>