<?php
session_start();
require_once 'connect.php';
$order_id=$_GET['id'];
$user_id = $_SESSION["user_id"];
$query6 = "SELECT * FROM user WHERE user_id='$user_id'";
$result6 = mysqli_query($mysqli, $query6);
$fetch = mysqli_fetch_assoc($result6);

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
include("navbar.php")
?>

<div class="c6">
    <div class="padpage">
        <h2>ตรวจสอบความถูกต้องและกรอกที่อยู่</h2>
        <h2 class="left">รายละเอียดสินค้า</h2>
        <table class="t10">
            <tr>
                <th>ลำดับรายการ   </th>
                <th>สินค้า</th>
                <th>รายละเอียดสินค้า</th>
                <th>ราคา</th>
            </tr>
        <?php
        $Total=0;
        $m=0;
        $query = "SELECT * FROM list WHERE order_id='$order_id'";
        $result = mysqli_query($mysqli, $query);
        while($row = mysqli_fetch_assoc($result)){
            $m+=1;
            $sql1 = "SELECT * FROM promotion WHERE promotion_id='".$row['promotion_id']."'";
            $result1 = mysqli_query($mysqli, $sql1); 
            $row1 = $result1 -> fetch_array(MYSQLI_ASSOC);

            $sql2 = "SELECT * FROM album WHERE album_id='".$row['album_id']."'";
            $result2 = mysqli_query($mysqli, $sql2); 
            $row2 = $result2 -> fetch_array(MYSQLI_ASSOC);

            echo '<tr><td>'.$m.'</td>';
            echo '<td><img img class="crop-album" src="album/'.$row2['a_image'].'" height="120rem">';
            echo '<td class="left">';
            echo $row1['p_type'];
            echo '<br>ขนาดรูป : '.$row1['pic_size'].' นิ้ว';
            echo '<br>จำนวน : '.$row1['pic_amount'].' รูป';
            echo '<br>ลายอัลบั้ม : '.$row2['a_name'];
            echo '<br><a class="more-detail" href="downloadpic.php?id='.$row['list_no'].'">คลิกเพื่อดูรายละเอียดเพิ่มเติม</a>';
            echo '</td>';
            echo '<td>'.$row1['p_price'].' บาท';
            echo '</td></tr>';
            $Total+=$row1['p_price'];
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
        </table>

        <h2 class="left">ชื่อผู้รับ ที่อยู่ และเบอร์โทรศัพท์</h2>
        <?php
                $query7= "SELECT * FROM order_detail WHERE order_id='$order_id'";
                $result7 = mysqli_query($mysqli, $query7);
                $fetch2 = mysqli_fetch_assoc($result7);
                if(!isset($fetch2['order_address'])||$fetch2['order_address']==""){
                    $order_address=$fetch['user_address'];
                }else{
                    $order_address=$fetch2['order_address'];
                }
                if(!isset($fetch2['order_phone'])||$fetch2['order_phone']==""){
                    $order_phone=$fetch['user_phone'];
                }else{
                    $order_phone=$fetch2['order_phone'];
                }
        ?>
        <form action="addressupdate.php?id=<?php echo $order_id; ?>" enctype="multipart/from-data" method="post">
            <div class="tt1">
                <input class="common" type="text" placeholder="ชื่อ-นามสกุลผู้รับ" name="order_customerName" value="<?php echo $fetch['user_name'];?>" readonly/>
            </div>
            <div class="tt1">
                <input class="a10" type="text" placeholder="ที่อยู่ที่ต้องการจัดส่งให้ผู้รับ" name="order_address" value="<?php echo $order_address;?>"/>
            </div>
            <div class="tt1">
                <input class="common" type="text" placeholder="เบอร์โทรศัพท์" name="order_phone" value="<?php echo $order_phone;?>"/>
            </div>
            
            <p class="graytext">*กรุณาตรวจสอบความถูกต้องของชื่อ-นามสกุลผู้รับ ที่อยู่ และเบอร์โทรศัพท์</p>
            
            <div class="aa">
                <input class="nextButton" type="submit" name="addressupdate" value="ถัดไป" />
            </div>
        </form>
    </div>
</div>

</body>
<?php
 include("footer.php")
?>
</html>