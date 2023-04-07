<?php
session_start();
require_once 'connect.php';
$order_id=$_GET['id'];
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
if($_SESSION["user_type"]=="customer"){ include("navbar.php");}
else{include("navbar-admin.php");}
?>

<div class="c6">
    <div class="padpage">
        <h2>ประวัติคำสั่งซื้อ</h2>
        <h2 class="left">รายละเอียดสินค้า</h2>
        <div class="tt5">
            <table class="t8">
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
                        echo '<td><img class="crop-album" src="album/'.$row2['a_image'].'" height="120rem">';
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
                    $query4 = "SELECT * FROM order_detail WHERE order_id='".$order_id."'";
                    $result4 = mysqli_query($mysqli, $query4);
                    $row4 = mysqli_fetch_assoc($result4);
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
        </div>

        <?php if($row4['order_status']=='จัดส่งสำเร็จ'){ 
            $query6 = "SELECT * FROM order_company WHERE order_id='".$order_id."'";
            $result6 = mysqli_query($mysqli, $query6);
            $row6 = mysqli_fetch_assoc($result6);
            ?>
        <div class="c6">
        <h2 class="left">ติดตามสินค้า</h2>

        <table class="t10 left">
            <tr>
                <td>
                    <p class="tt1">เลขพัสดุ : <?php echo $row6['c_track']; ?>
                    <p class="tt1">จัดส่งโดย : <?php echo $row6['c_company']; ?>
                    <p class="tt1">จัดส่งวันที่ : <?php echo $row6['c_date']; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="bold tt1">ติดตามสถานะพัสดุ</p>
                    <?php 
                        if($row6['c_company']=="thaiexpress"){echo 'ไปรษณีย์ไทย : <a href="https://track.thailandpost.co.th/" target="_blank">track.thailandpost.co.th</a>';}
                        elseif($row6['c_company']=="kerryexpress"){echo 'Kerry Express : <a href="https://th.kerryexpress.com/th/track/" target="_blank">th.kerryexpress.com/th/track/</a>';}
                        elseif($row6['c_company']=="lalamove"){echo 'Lalamove : <a href="https://pkge.net/th/couriers/lalamove" target="_blank">pkge.net/th/couriers/lalamove</a>';}
                        elseif($row6['c_company']=="flashexpress"){echo 'Flash Express : <a href="https://flashexpress.co.th/zip-code/" target="_blank">flashexpress.co.th/zip-code/</a>';}
                        
                        ?>
                </td>
            </tr>
        </table>
    </div>
        <?php } ?>
        <div class="tt3">
            <?php
            $query5 = "SELECT * FROM user WHERE user_id='".$row4['user_id']."'";
            $result5 = mysqli_query($mysqli, $query5);
            $row5 = mysqli_fetch_assoc($result5);
            ?>
            <h2 class="left">ชื่อผู้รับ ที่อยู่ และเบอร์โทรศัพท์</h2>
            <?php echo $row5['user_name'] ?>
            <br><?php echo $row4['order_address'] ?>
            <br>เบอร์โทรศัพท์ <?php echo $row4['order_phone'] ?>
            <br>&nbsp;
            <br>วันที่สั่ง: <?php echo $row4['order_date'] ?>
        </div>
        
        <?php if($row4['order_status']=='รอการตรวจสอบการชำระเงิน' && $_SESSION['user_type']=='customer'){ ?>
        <a href="#">
            <img src="image\bin2.png" width="20rem"> 
            <span class="graytext">ยกเลิกออเดอร์<br>
            *หากชำระเงินไปแล้วและต้องการยกเลิกคำสั่งซื้อ กรุณาติดต่อร้านเพื่อรับเงินคืน
            </span>
        </a>
        <?php } ?>
        <?php if($_SESSION["user_type"]=="customer"){ ?><a href="history.php"><input class="backButton ba" type="submit" name="Submit" value="ย้อนกลับ" /></a>
            <?php }else{ ?>
                <a href="history-admin.php?id=<?php echo $row4['user_id']; ?>" ><input class="backButton ba" type="submit" name="Submit" value="ย้อนกลับ" /></a>
            <?php } ?>
    </div>
</div>

</body>
<?php
 include("footer.php")
?>
</html>